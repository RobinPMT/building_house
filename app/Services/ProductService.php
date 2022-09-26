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
        'creator'
    ];

    protected $fieldsName = '_post_fields';

    protected function getOrderbyableFields(): array
    {
        return ['id'];
    }

    protected function getFilterableFields(): array
    {
        return [];
    }

    protected function fields(): array
    {
        return [
            'title', 'slug', 'active', 'hot', 'author_id', 'arr_image', 'price',
            'arr_active', 'arr_hot', 'avatar_design', 'description',
            'longs', 'width', 'height', 'area', 'room_number', 'room_description'
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
        ];
    }

    public function includeCreator()
    {
        return [services()->adminService(), 'item', function (Product $model) {
            return $model->creator;
        }];
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
        return pare_url_file($model->avatar_design);
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
            $this->uploadFile($model);
        });

        $this->on('saved', function ($model) use ($user) {
            $this->syncDataSettingKey($model);
        });
    }

    public function uploadFile(Product $model)
    {
        if ($this->getApiRequest()->hasFile('avatar_design')) {
            $file = upload_image('avatar_design', 'products');
            if (isset($file['name'])) {
                $model->avatar_design = $file['name'];
            }
        }
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
