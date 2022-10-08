<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class ProjectService extends ApiService
{
    protected $model = Project::class;

    protected $relations = [
        'creator'
    ];

    protected $fieldsName = '_project_fields';

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
            'title', 'slug', 'content', 'active', 'hot',
            'author_id', 'avatar', 'arr_image', 'arr_active', 'arr_hot', 'title_seo', 'description_seo', 'keyword_seo'
        ];
    }

    protected function mapFilters(): array
    {
        return [
        ];
    }

    public function includeCreator()
    {
        return [services()->adminService(), 'item', function (Project $model) {
            return $model->creator;
        }];
    }

    public function get_arr_active_value($record, Project $model)
    {
        return $model->getStatus();
    }

    public function get_arr_hot_value($record, Project $model)
    {
        return $model->getHot();
    }

    public function get_avatar_value($record, Project $model)
    {
        return pare_url_file($model->avatar, 'projects');
    }

    public function get_arr_image_value($record, Project $model)
    {
        if (isset($model->arr_image) && trim($model->arr_image) != '') {
            return json_encode(array_map(function ($item) {
                return pare_url_file($item, 'projects');
            }, json_decode($model->arr_image)));
        }
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
            $data = $this->uploadArrImages($model);
            if (isset($data)) {
                $oldImages = json_decode($model->arr_image);
                $newImages = array_merge($data, $oldImages ?? []);
                $model->arr_image = json_encode($newImages);
            }
        });
    }

    public function uploadFile(Project $model)
    {
        if ($this->getApiRequest()->hasFile('avatar')) {
            $file = upload_image('avatar', 'projects');
            if (isset($file['name'])) {
                $model->avatar = $file['name'];
            }
        }
    }

    public function uploadArrImages(Project $model)
    {
        if ($this->getApiRequest()->hasFile('images')) {
            $files = upload_images('images', 'projects');
            return array_map(function ($item) {
                return $item['name'];
            }, $files);
        }
        return null;
    }
}
