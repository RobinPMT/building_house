<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Arr;

class Contact extends Base
{

    protected $table   = 'contacts';

//    protected $guarded =  ['*'];

    protected $fillable = [
        'name', 'email', 'phone', 'active', 'author_id'
    ];

    const ACTIVE = 1;

    const NOT_ACTIVE = 0;


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

}
