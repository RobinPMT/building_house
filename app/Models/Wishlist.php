<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Wishlist extends Base
{
    protected $table   = 'wishlists';

//    protected $guarded =  ['*'];

    protected $fillable = [
        'title', 'creator_id', 'product_id', 'author_id', 'type', 'status',
        'created_at', 'updated_at',
    ];

    const STATUS_FINISHED = 1;

    const STATUS_NOT_FINISHED = 0;

    const TYPE_WISHLIST = 'wishlist';

    const TYPE_TRANSACTION = 'transaction';

    protected $_status = [
        1 => [
            'name' => 'Đã xử lý',
            'class' => 'badge-light-success'
        ],
        0 => [
            'name' => 'Chưa xử lý',
            'class' => 'badge-light-warning'
        ],
    ];

    public function getStatus()
    {
        return Arr::get($this->_status, $this->status, '[N\A]');
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function handler()
    {
        return $this->belongsTo(Admin::class, 'author_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function attributes()
    {
        return $this->belongsToMany(Attribute::class, 'wishlists_attributes', 'wishlist_id', 'attribute_id')->withPivot('wishlist_id', 'attribute_id', 'key_choose')
            ->select(
                'wishlist_id',
                'attribute_id',
                'key_choose',
                'title',
                'type',
                'room_id',
                'avatar',
                'active',
                'author_id',
                'arr_value',
                'arr_image'
            );
    }
}
