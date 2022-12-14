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
        return ['id', 'order'];
    }

    protected function getFilterableFields(): array
    {
        return ['freedom'];
    }

    protected function fields(): array
    {
        return [
            'title', 'avatar', 'arr_image', 'freedom', 'author_id', 'arr_freedom', 'arr_hot', 'hot', 'order',
            'active', 'banner_home', 'banner_product', 'arr_active', 'arr_banner_product', 'arr_banner_home','avatar_url', 'slug','title_seo', 'description_seo', 'keyword_seo'

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

    public function get_arr_hot_value($record, Library $model)
    {
        return $model->getHot();
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
        if (!$model->freedom) {
            return pare_url_file($model->avatar, 'libraries');
        }
        return pare_url_file($model->avatar, 'slides_hot');
    }

    public function get_arr_image_value($record, Library $model)
    {
        if (isset($model->arr_image) && trim($model->arr_image) != '') {
            return json_encode(array_map(function ($item) {
                return pare_url_file($item, 'libraries');
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
            $model->title_seo = isset($model->title_seo) ? $model->title_seo : $model->title;
            $model->description_seo = isset($model->description_seo) ? $model->description_seo : $model->title;
            if (isset($model->title)) {
                $model->freedom = false;
            }
            $this->uploadAvatar($model);
            $data = $this->uploadArrImages($model);
            if (isset($data)) {
                $oldImages = json_decode($model->arr_image);
                $newImages = array_merge($data, $oldImages ?? []);
                $model->arr_image = json_encode($newImages);
            }
        });
    }

    public function uploadAvatar(Library $model)
    {
        if ($this->getApiRequest()->hasFile('avatar')) {
            $file = upload_image('avatar', 'libraries');
            if (isset($file['name'])) {
                $model->avatar = $file['name'];
            }
        }
    }

    public function uploadArrImages(Library $model)
    {
        if ($this->getApiRequest()->hasFile('images')) {
            $files = upload_images('images', 'libraries');
            return array_map(function ($item) {
                return $item['name'];
            }, $files);
        }
        return null;
    }
}
