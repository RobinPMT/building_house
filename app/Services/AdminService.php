<?php


namespace App\Services;


use App\Models\Admin;

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
        return [];
    }

    protected function fields(): array
    {
        return ['name',  'email', 'phone', 'avatar', 'active'];
    }

    protected function mapFilters(): array
    {
        return [];
    }

    protected function boot()
    {
        parent::boot();
        $this->on('saving', function ($model) {
            $model->active = $model->active == 'on' ? true : false;
        });
    }
}

