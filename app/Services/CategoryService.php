<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class CategoryService extends ApiService
{
    protected $model = Category::class;

    protected $relations = [
        'creator', 'parent', 'childs', 'products'
    ];

    protected $fieldsName = '_category_fields';

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
            'title', 'slug', 'parent_id', 'icon', 'active',
            'author_id', 'description_seo', 'title_seo', 'keyword_seo',
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
        return [services()->adminService(), 'item', function (Category $model) {
            return $model->creator;
        }];
    }

    public function includeParent()
    {
        return [services()->categoryService(), 'item', function (Category $model) {
            return $model->parent;
        }];
    }

    public function includeChilds()
    {
        return [services()->categoryService(), 'items', function (Category $model) {
            return $model->childs;
        }];
    }

    public function includeProducts()
    {
        return [services()->productService(), 'items', function (Category $model) {
            return $model->products;
        }];
    }

    public function get_arr_active_value($record, Category $model)
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
            $model->author_id = $user->getKey() ?? null;
            $model->active = $model->active == 'on' ? true : false;
            if ($model->getKey() == $model->parent_id) {
                $model->parent_id = null;
            }
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
