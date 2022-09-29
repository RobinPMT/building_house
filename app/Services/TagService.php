<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;

class TagService extends ApiService
{
    protected $model = Tag::class;

    protected $relations = [

    ];

    protected $fieldsName = '_tag_fields';

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
            'title', 'active',
            'arr_active',
        ];
    }

    protected function mapFilters(): array
    {
        return [
        ];
    }

    public function get_arr_active_value($record, Tag $model)
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
//            $model->author_id = $user->getKey() ?? null;
//            $model->active = $model->active == 'on' ? true : false;

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
