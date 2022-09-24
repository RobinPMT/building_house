<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\SettingKeyProduct;
use Illuminate\Support\Facades\Auth;

class SettingKeyProductService extends ApiService
{
    protected $model = SettingKeyProduct::class;

    protected $relations = [
    ];

    protected $fieldsName = '_setting_key_product_fields';

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
            'name', 'key', 'tag_type', 'active', 'html', 'arr_active'
        ];
    }

    protected function mapFilters(): array
    {
        return [
        ];
    }

    public function get_arr_active_value($record, SettingKeyProduct $model)
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
//            dd($model);
        });
    }
}
