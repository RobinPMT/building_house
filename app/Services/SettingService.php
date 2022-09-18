<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\Post;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;

class SettingService extends ApiService
{
    protected $model = Setting::class;

    protected $relations = [
    ];

    protected $fieldsName = '_setting_fields';

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
            'key', 'value', 'active',
        ];
    }

    protected function mapFilters(): array
    {
        return [
        ];
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

        });
    }

}
