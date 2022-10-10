<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostService extends ApiService
{
    protected $model = Post::class;

    protected $relations = [
        'creator', 'tags'
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
            'arr_active', 'arr_hot', 'slug', 'tag_ids', 'type', 'type_name', 'keyword_seo'
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

    public function includeTags()
    {
        return [services()->tagService(), 'items', function (Post $model) {
            return $model->tags;
        }];
    }

    public function get_arr_active_value($record, Post $model)
    {
        return $model->getStatus();
    }

    public function get_type_name_value($record, Post $model)
    {
        if ($model->type == Post::TYPE_FINANCE) {
            return 'Tin tài chính';
        } elseif ($model->type == Post::TYPE_EVENT) {
            return 'Tin tức - Sự kiện';
        } elseif ($model->type == Post::TYPE_PROMOTION) {
            return 'Tin khuyến mãi';
        } elseif ($model->type == Post::TYPE_NEW) {
            return 'Tin tức';
        }
        return 'Không rõ';
    }

    public function get_tag_ids_value($record, Post $model)
    {
        return $model->tags->pluck('id');
    }

    public function get_arr_hot_value($record, Post $model)
    {
        return $model->getHot();
    }

    public function get_avatar_value($record, Post $model)
    {
        return pare_url_file($model->avatar, 'posts');
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
            $model->type =  Post::TYPE_NEW;
            $model->title_seo = isset($model->title_seo) ? $model->title_seo : $model->title;
            $model->description_seo = isset($model->description_seo) ? $model->description_seo : $model->description;
            $this->uploadFile($model);
        });
        $this->on('saved', function ($model) use ($user) {
            $tag_ids = $model->getRaw('tag_ids');
            if (is_array($tag_ids) && count($tag_ids) > 0) {
                $model->tags()->sync($tag_ids);
            }
        });
    }

    public function uploadFile(Post $model)
    {
        if ($this->getApiRequest()->hasFile('avatar')) {
            $file = upload_image('avatar', 'posts');
            if (isset($file['name'])) {
                $model->avatar = $file['name'];
            }
        }
    }
}
