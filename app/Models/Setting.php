<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Arr;

class Setting extends Base
{

    protected $table   = 'settings';

//    protected $guarded =  ['*'];

    protected $fillable = [
        'name', 'key', 'value', 'active', 'icon'
    ];

    const ACTIVE = 1;

    const NOT_ACTIVE = 0;


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


}
