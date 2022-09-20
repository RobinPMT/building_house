<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\Library;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class LibraryService extends ApiService
{
    protected $model = Library::class;

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
        return ['freedom'];
    }

    protected function fields(): array
    {
        return [
            'title', 'avatar', 'arr_image', 'freedom', 'author_id', 'arr_freedom'
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
        return $model->getStatus();
    }

    public function get_avatar_value($record, Library $model)
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
        });
    }
}
