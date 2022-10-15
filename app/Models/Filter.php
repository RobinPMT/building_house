<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Filter extends Base
{
    protected $table   = 'filters';

    protected $fillable = [
        'title', 'from', 'to', 'value', 'active', 'order',
        'type', 'created_at',
        'updated_at'
    ];

    const AREA = 'area';

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
