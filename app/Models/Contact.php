<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Contact extends Base
{
    protected $table   = 'contacts';

//    protected $guarded =  ['*'];

    protected $fillable = [
        'name', 'email', 'phone', 'active', 'author_id','created_at',
        'updated_at', 'content', 'product_id', 'type'
    ];

    const ACTIVE = 1;

    const NOT_ACTIVE = 0;

    const TYPE_PRODUCT = 'product';

    const TYPE_HOUSING = 'housing';

    protected $_active = [
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
        return Arr::get($this->_active, $this->active, '[N\A]');
    }

    public function handler()
    {
        return $this->belongsTo(Admin::class, 'author_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
