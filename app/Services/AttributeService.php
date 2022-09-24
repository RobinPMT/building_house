<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\Attribute;
use App\Models\Post;
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

//            $this->uploadFile($model);
        });

        $this->on('saved', function ($model) use ($user) {
            if ($model->type == Attribute::TYPE_SYSTEM) {
                $this->updateSystemKey($model);
            }
        });
    }

    public function updateSystemKey(Attribute $model)
    {
        $arr_new = [];
        $data_new = $model->getRaw('data_new');
        if (is_array($data_new) && count($data_new)) {
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

    public function uploadFile(Post $model)
    {
        if ($this->getApiRequest()->hasFile('avatar')) {
            $file = upload_image('avatar');
            if (isset($file['name'])) {
                $model->avatar = $file['name'];
            }
        }
    }
}
