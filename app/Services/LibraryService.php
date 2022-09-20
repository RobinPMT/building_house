<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\Library;
use Illuminate\Support\Facades\Auth;

class LibraryService extends ApiService
{
    protected $model = Library::class;

    protected $relations = [
        'creator'
    ];

    protected $fieldsName = '_library_fields';

    protected function getOrderbyableFields(): array
    {
        return ['id'];
    }

    protected function getFilterableFields(): array
    {
        return ['freedom'];
    }

    protected function fields(): array
    {
        return [
            'title', 'avatar', 'arr_image', 'freedom', 'author_id', 'arr_freedom',
            'active', 'banner_home', 'banner_product', 'arr_active', 'arr_banner_product', 'arr_banner_home','avatar_url'
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
            'freedom' => function ($value) {
                return ['freedom', $value];
            },
        ];
    }

    public function includeCreator()
    {
        return [services()->adminService(), 'item', function (Library $model) {
            return $model->creator;
        }];
    }

    public function get_arr_freedom_value($record, Library $model)
    {
        return $model->getFreedom();
    }

    public function get_arr_active_value($record, Library $model)
    {
        return $model->getStatus();
    }

    public function get_arr_banner_home_value($record, Library $model)
    {
        return $model->getBannerHome();
    }

    public function get_arr_banner_product_value($record, Library $model)
    {
        return $model->getBannerProduct();
    }

    public function get_avatar_url_value($record, Library $model)
    {
        return pare_url_file($model->avatar, 'slides_hot');
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
        });
    }
}
