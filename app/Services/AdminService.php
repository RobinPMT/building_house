<?php

namespace App\Services;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminService extends ApiService
{
    protected $model = Admin::class;

    protected $relations = [

    ];

    protected $fieldsName = '_admin_fields';

    protected function getOrderbyableFields(): array
    {
        return ['id'];
    }

    protected function getFilterableFields(): array
    {
        return ['user_not_myself'];
    }

    protected function fields(): array
    {
        return ['name',  'email', 'phone', 'avatar', 'active', 'arr_active'];
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

    public function get_arr_active_value($record, Admin $model)
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
        $this->on('saving', function ($model) {
            $model->active = $model->active == 'on' ? true : false;
        });
    }
}
