<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\Product;
use App\Models\SettingKeyProduct;
use Illuminate\Support\Facades\Auth;

class ProductService extends ApiService
{
    protected $model = Product::class;

    protected $relations = [
        'creator', 'keys', 'category', 'rooms', 'attributes'
    ];

    protected $fieldsName = '_product_fields';

    protected function getOrderbyableFields(): array
    {
        return ['id', 'order'];
    }

    protected function getFilterableFields(): array
    {
        return ['category_id'];
    }

    protected function fields(): array
    {
        return [
            'title', 'slug', 'active', 'hot', 'author_id', 'arr_image', 'price', 'order',
            'arr_active', 'arr_hot', 'avatar_design', 'description', 'image_back_ground_design',
            'longs', 'width', 'height', 'area', 'room_number', 'room_description', 'category_id', 'setting_keys',
            'title_seo', 'description_seo', 'keyword_seo'
        ];
    }

    protected function mapFilters(): array
    {
        return [
            'user_not_myself' => function ($value) {
                if ($value == 1) {
                    return function ($query) use ($value) {
                        $user = auth('admins')->user();
                        $query->where('id', '!=', $user->getKey())->where('email', '!=', 'admin@gmail.com');
                    };
                }
            },
            'category_id' => function ($value) {
                return ['category_id', $value];
            },
        ];
    }

    public function includeCreator()
    {
        return [services()->adminService(), 'item', function (Product $model) {
            return $model->creator;
        }];
    }

    public function includeCategory()
    {
        return [services()->categoryService(), 'item', function (Product $model) {
            return $model->category;
        }];
    }

    public function includeAttributes()
    {
        return [services()->attributeService(), 'item', function (Product $model) {
            return $model->attributes;
        }];
    }

    public function includeKeys()
    {
        return [services()->settingKeyProductService(), 'items', function (Product $model) {
            return $model->keys;
        }];
    }

    public function includeRooms()
    {
        return [services()->roomService(), 'items', function (Product $model) {
            return $model->rooms;
        }];
    }

    public function get_setting_keys_value($record, Product $model)
    {
        return $model->keys->toArray();
    }

    public function get_arr_active_value($record, Product $model)
    {
        return $model->getStatus();
    }

    public function get_arr_hot_value($record, Product $model)
    {
        return $model->getHot();
    }

    public function get_avatar_design_value($record, Product $model)
    {
        return pare_url_file($model->avatar_design, 'products');
    }

    public function get_image_back_ground_design_value($record, Product $model)
    {
        return pare_url_file($model->image_back_ground_design, 'products');
    }

    public function get_arr_image_value($record, Product $model)
    {
        if (isset($model->arr_image) && trim($model->arr_image) != '') {
            return json_encode(array_map(function ($item) {
                return [
                    'image' => pare_url_file($item->image, 'products'),
                    'status' => $item->status
                ];
            }, json_decode($model->arr_image)));
        }
    }

    protected function newQuery()
    {
        $query = parent::newQuery();
//        $user = auth('admins')->user();
//        $query->where('id', '!=', $user->getKey())->orWhere('email', '!=', 'admin@gmail.com');
        return $query;
    }

    protected function boot()
    {
        parent::boot();
        $user = auth('admins')->user();
        $this->on('saving', function ($model) use ($user) {
            $model->author_id = $user->getKey() ?? null;
            $model->active = $model->active == 'on' ? true : false;
            $model->hot = $model->hot == 'on' ? true : false;
            $model->title_seo = isset($model->title_seo) ? $model->title_seo : $model->title;
            $model->description_seo = isset($model->description_seo) ? $model->description_seo : $model->description;
            $this->uploadFile($model, 'avatar_design');
            $this->uploadFile($model, 'image_back_ground_design');
            $data = $this->uploadArrImages($model);
            if (isset($data)) {
                $oldImages = json_decode($model->arr_image);
                $newImages = array_merge($data, $oldImages ?? []);
                $arrImages = array_map(function ($item) {
                    return [
                        'image' => $item,
                        'status' => false
                    ];
                }, $newImages);
                $model->arr_image = json_encode($arrImages);
            }
        });

        $this->on('saved', function ($model) use ($user) {
            $this->syncDataSettingKey($model);
        });
    }

    public function uploadFile(Product $model, $key)
    {
        if ($this->getApiRequest()->hasFile($key)) {
            $file = upload_image($key, 'products');
            if (isset($file['name'])) {
                $model->$key = $file['name'];
            }
        }
    }

    public function uploadArrImages(Product $model)
    {
        if ($this->getApiRequest()->hasFile('images')) {
            $files = upload_images('images', 'products');
            return array_map(function ($item) {
                return $item['name'];
            }, $files);
        }
        return null;
    }

    public function syncDataSettingKey(Product $model)
    {
        $settingkeys = services()->settingKeyProductService()->where('active', SettingKeyProduct::ACTIVE)->select('id', 'key', 'tag_type')->get();
        $data = [];
        foreach ($settingkeys as $settingkey) {
            if ($settingkey->tag_type == SettingKeyProduct::TYPE_CHECKBOX) {
                $data[$settingkey->id] = ['value' => $model->getRaw($settingkey->key) == 'on' ? true : false];
            } else {
                $data[$settingkey->id] = ['value' => $model->getRaw($settingkey->key)];
            }
        }
        $model->keys()->sync($data);
    }
}
