<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\Policy;
use Illuminate\Support\Facades\Auth;

class PolicyService extends ApiService
{
    protected $model = Policy::class;

    protected $relations = [

    ];

    protected $fieldsName = '_policy_fields';

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
            'title', 'slug', 'active', 'order', 'content',
           'description_seo', 'title_seo', 'keyword_seo',
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

    public function get_arr_active_value($record, Policy $model)
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
            $model->title_seo = isset($model->title_seo) ? $model->title_seo : $model->title;
            $model->description_seo = isset($model->description_seo) ? $model->description_seo : $model->title;
//            $this->uploadFile($model);
        });
    }
}
