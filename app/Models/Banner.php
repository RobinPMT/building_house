<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Banner extends Base
{
    protected $table   = 'banners';

    protected $fillable = [
        'title', 'active', 'link', 'avatar_main', 'avatar_not_main',
        'description','created_at', 'updated_at', 'order'
    ];

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
}
