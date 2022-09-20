<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Arr;

class Library extends Base
{

    protected $table   = 'libraries';

//    protected $guarded =  ['*'];

    protected $fillable = [
        'title', 'avatar', 'arr_image', 'freedom', 'author_id'
    ];

    const ACTIVE = 1;

    const NOT_ACTIVE = 0;


    protected $_freedom = [
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
        return Arr::get($this->_freedom, $this->freedom, '[N\A]');
    }

    public function creator()
    {
        return $this->belongsTo(Admin::class, 'author_id');
    }

}
