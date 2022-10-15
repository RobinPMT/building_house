<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\Filter;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class FilterService extends ApiService
{
    protected $model = Filter::class;

    protected $relations = [
    ];

    protected $fieldsName = '_filter_fields';

    protected function getOrderbyableFields(): array
    {
        return ['id', 'order'];
    }

    protected function getFilterableFields(): array
    {
        return [];
    }

    protected function fields(): array
    {
        return [
            'title', 'from', 'to', 'value', 'active', 'order', 'arr_active',
            'type', 'created_at',
            'updated_at'
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

    public function get_arr_active_value($record, Filter $model)
    {
        return $model->getStatus();
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
            $model->active = $model->active == 'on' ? true : false;
//            $this->uploadFile($model);
        });
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
