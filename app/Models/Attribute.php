<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Attribute extends Base
{
    protected $table   = 'attributes';

    protected $fillable = [
        'title', 'type', 'room_id', 'avatar', 'active',
        'author_id', 'arr_value', 'arr_image','created_at',
        'updated_at', 'order', 'product_id'
    ];

    const TYPE_SYSTEM = 'system';

    const TYPE_STYLE = 'style';

    const STATUS_PUBLIC = 1;

    const STATUS_PRIVATE = 0;

    protected $_active = [
        1 => [
            'name' => 'Hoạt động',
            'class' => 'badge-light-success'
        ],
        0 => [
            'name' => 'Tắt',
            'class' => 'badge-light-warning'
        ],
    ];

    public function getStatus()
    {
        return Arr::get($this->_active, $this->active, '[N\A]');
    }

    public function creator()
    {
        return $this->belongsTo(Admin::class, 'author_id');
    }

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id')->select('id', 'title');
    }

    public function wishlists()
    {
        return $this->belongsToMany(Wishlist::class, 'wishlists_attributes', 'attribute_id', 'wishlist_id')->withPivot('wishlist_id', 'attribute_id', 'key_choose')
            ->select('wishlist_id', 'attribute_id', 'key_choose');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
