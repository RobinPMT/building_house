<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\Housing;
use Illuminate\Support\Facades\Auth;

class HousingService extends ApiService
{
    protected $model = Housing::class;

    protected $relations = [
    ];

    protected $fieldsName = '_housing_fields';

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
            'title', 'active', 'avatar_main', 'avatar_not_main', 'author_id',
            'content', 'arr_active',
        ];
    }

    protected function mapFilters(): array
    {
        return [
        ];
    }

    public function get_arr_active_value($record, Housing $model)
    {
        return $model->getStatus();
    }

    public function get_avatar_not_main_value($record, Housing $model)
    {
        return pare_url_file($model->avatar_not_main, 'housings');
    }

    public function get_avatar_main_value($record, Housing $model)
    {
        return pare_url_file($model->avatar_main, 'housings');
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
            $model->active = $model->active == 'on' ? true : false;
            $this->uploadFile($model, 'avatar_main');
            $this->uploadFile($model, 'avatar_not_main');
        });
    }

    public function uploadFile(Housing $model, $field)
    {
        if ($this->getApiRequest()->hasFile($field)) {
            $file = upload_image($field, 'housings');
            if (isset($file['name'])) {
                $model->$field = $file['name'];
            }
        }
    }
}
