<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;

class RoomService extends ApiService
{
    protected $model = Room::class;

    protected $relations = [
        'creator', 'parent', 'childs', 'products'
    ];

    protected $fieldsName = '_room_fields';

    protected function getOrderbyableFields(): array
    {
        return ['id', 'order'];
    }

    protected function getFilterableFields(): array
    {
        return ['_parent_id', 'product_id'];
    }

    protected function fields(): array
    {
        return [
            'title', 'active', 'author_id', 'arr_active', 'parent_id', 'order', 'product_ids'
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
            'product_id' => function ($value) {
                return function ($query) use ($value) {
                    $query->whereHas('products', function ($query) use ($value) {
                        $query->where('product_id', $value);
                    });
                };
            },
            '_parent_id' => function ($value) {
                return ['parent_id', $value];
            },
        ];
    }

    public function includeCreator()
    {
        return [services()->adminService(), 'item', function (Room $model) {
            return $model->creator;
        }];
    }

    public function get_arr_active_value($record, Room $model)
    {
        return $model->getStatus();
    }

    public function get_product_ids_value($record, Room $model)
    {
        return $model->products->pluck('id');
    }

    public function includeParent()
    {
        return [services()->roomService(), 'item', function (Room $model) {
            return $model->parent;
        }];
    }

    public function includeChilds()
    {
        return [services()->roomService(), 'items', function (Room $model) {
            return $model->childs;
        }];
    }

    public function includeProducts()
    {
        return [services()->productService(), 'items', function (Room $model) {
            return $model->products;
        }];
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
        });

        $this->on('saved', function ($model) use ($user) {
            $product_ids = $model->getRaw('product_ids');
            $model->products()->sync($product_ids);
        });
    }
}
