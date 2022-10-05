<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Room extends Base
{
    protected $table   = 'rooms';

    protected $fillable = [
        'title', 'slug', 'icon', 'active', 'parent_id',
        'author_id','created_at',
        'updated_at'
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

    public function creator()
    {
        return $this->belongsTo(Admin::class, 'author_id');
    }

    public function childs()
    {
        return $this->hasMany(Room::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Room::class, 'parent_id')->select('id', 'title');
    }
}
