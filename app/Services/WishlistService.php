<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\Contact;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class WishlistService extends ApiService
{
    protected $model = Wishlist::class;

    protected $relations = [
        'handler'
    ];

    protected $fieldsName = '_wishlist_fields';

    protected function getOrderbyableFields(): array
    {
        return ['id'];
    }

    protected function getFilterableFields(): array
    {
        return ['type'];
    }

    protected function fields(): array
    {
        return [
            'title', 'creator_id', 'product_id', 'author_id', 'type', 'status', 'arr_status', 'name', 'email', 'phone'
        ];
    }

    protected function mapFilters(): array
    {
        return [
            'type' => function ($value) {
                return ['type', $value];
            },
        ];
    }

    public function get_arr_status_value($record, Wishlist $model)
    {
        return $model->getStatus();
    }

//    public function get_get_type_value($record, Wishlist $model)
//    {
//        if ($model->type == Contact::TYPE_PRODUCT) {
//            return 'Sản phẩm';
//        } elseif ($model->type == Contact::TYPE_HOUSING) {
//            return 'Giải pháp kinh doanh';
//        }
//        return 'Không rõ';
//    }

    public function includeHandler()
    {
        return [services()->adminService(), 'item', function (Wishlist $model) {
            return $model->handler;
        }];
    }

    public function includeCreator()
    {
        return [services()->userService(), 'item', function (Wishlist $model) {
            return $model->creator;
        }];
    }

    public function includeProduct()
    {
        return [services()->productService(), 'item', function (Wishlist $model) {
            return $model->product;
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
        $this->on('creating', function ($model) use ($user) {
        });
        $this->on('updating', function ($model) use ($user) {
//            $model->author_id = $user->getKey() ?? null;
        });
    }
}
