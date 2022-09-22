<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductService extends ApiService
{
    protected $model = Product::class;

    protected $relations = [
        'creator'
    ];

    protected $fieldsName = '_post_fields';

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
            'title', 'slug', 'description', 'content', 'active', 'hot',
            'author_id', 'description_seo', 'title_seo', 'avatar', 'view',
            'arr_active', 'arr_hot', 'slug'
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
        return [services()->adminService(), 'item', function (Post $model) {
            return $model->creator;
        }];
    }

    public function get_arr_active_value($record, Post $model)
    {
        return $model->getStatus();
    }

    public function get_arr_hot_value($record, Post $model)
    {
        return $model->getHot();
    }

    public function get_avatar_value($record, Post $model)
    {
        return pare_url_file($model->avatar);
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
            $model->hot = $model->hot == 'on' ? true : false;
            $this->uploadFile($model);
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
