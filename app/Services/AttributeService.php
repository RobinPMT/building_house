<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\Attribute;
use Illuminate\Support\Facades\Auth;

class AttributeService extends ApiService
{
    protected $model = Attribute::class;

    protected $relations = [
        'creator', 'room'
    ];

    protected $fieldsName = '_attribute_fields';

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
            'title', 'type', 'room_id', 'avatar', 'active',
            'author_id', 'arr_value', 'arr_image',
            'arr_active',
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
        return [services()->adminService(), 'item', function (Attribute $model) {
            return $model->creator;
        }];
    }

    public function includeRoom()
    {
        return [services()->roomService(), 'item', function (Attribute $model) {
            return $model->room;
        }];
    }

    public function get_arr_active_value($record, Attribute $model)
    {
        return $model->getStatus();
    }

//    public function get_type_value($record, Attribute $model)
//    {
//        return $model->type == Attribute::TYPE_SYSTEM ? 'Hệ thống' : 'Kiểu dáng';
//    }

    public function get_arr_value_value($record, Attribute $model)
    {
        if (isset($model->arr_value) && $model->type == Attribute::TYPE_SYSTEM) {
            return json_decode($model->arr_value);
        }
    }

    public function get_arr_image_value($record, Attribute $model)
    {
        if (isset($model->arr_image) && $model->type == Attribute::TYPE_STYLE) {
            return array_map(function ($item) {
                $item->image = pare_url_file($item->image, 'attributes');
                return $item;
            }, json_decode($model->arr_image));
//            return json_decode($model->arr_image);
        }
    }

    public function get_avatar_value($record, Attribute $model)
    {
        return pare_url_file($model->avatar, 'attributes');
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
            $this->uploadFile($model);
        });

        $this->on('saved', function ($model) use ($user) {
            if ($model->type == Attribute::TYPE_SYSTEM) {
                $this->updateSystemKey($model);
            } else {
                $this->updateStyleKey($model);
            }
        });
    }

    public function updateSystemKey(Attribute $model)
    {
        $arr_new = [];
        $data_new = $model->getRaw('data_new');
        if (is_array($data_new) && count($data_new) > 0) {
            $arr_new = array_map(function ($item) {
                if (isset($item['value'])) {
                    if (!isset($item['key'])) {
                        $item['key'] = md5(microtime().rand());
                    }
                    return  $item;
                }
                return null;
            }, $data_new);
        }
        $arr_new =  array_filter($arr_new);
        $model->arr_value = json_encode($arr_new);
        $model->save();
    }

    public function updateStyleKey(Attribute $model)
    {
        $data = $this->uploadArrImages($model);
        $arr_new = [];
        $arr_old = [];
        $data_new = $model->getRaw('data_new');
        $data_old = json_decode($model->arr_image);
        if (is_array($data_old) && count($data_old) > 0) {
            foreach ($data_old as $item) {
                $arr_old[$item->key] = $item;
            }
        }
        if (is_array($data_new) && count($data_new) > 0) {
            $arr_new = array_map(function ($item, $i) use ($data_new, $arr_old, $data) {
                if (isset($item['value'])) {
                    if (!isset($item['key'])) {
                        $item['key'] = md5(microtime().rand());
                        $item['image'] = $data[$i];
                    } else {
                        if (is_array($arr_old) && count($arr_old) > 0) {
                            $item['image'] = $arr_old[$item['key']]->image;
                        }
                    }
                    return  $item;
                }
                return null;
            }, $data_new, array_keys($data_new));
        }
        $arr_new =  array_filter($arr_new);
        $model->arr_image = json_encode($arr_new);
        $model->save();
    }

    public function uploadArrImages(Attribute $model)
    {
        if ($this->getApiRequest()->hasFile('images')) {
            $files = upload_images('images', 'attributes');
            return array_map(function ($item) {
                return $item['name'];
            }, $files);
        }
        return null;
    }

    public function uploadFile(Attribute $model)
    {
        if ($this->getApiRequest()->hasFile('avatar')) {
            $file = upload_image('avatar', 'attributes');
            if (isset($file['name'])) {
                $model->avatar = $file['name'];
            }
        }
    }
}
