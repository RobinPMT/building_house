<?php

namespace App\Services;

use App\Models\User;

class UserService extends ApiService
{
    protected $model = User::class;

    protected $relations = [

    ];

    protected $fieldsName = '_user_fields';

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
        return ['name',  'email', 'phone', 'avatar', 'active', 'arr_active', 'address'];
    }

    protected function mapFilters(): array
    {
        return [];
    }

    public function get_avatar_value($record, User $model)
    {
        return pare_url_file($model->avatar, 'avatars');
    }

    protected function boot()
    {
        parent::boot();
        $this->on('creating', function ($model) {
        });
    }
}
