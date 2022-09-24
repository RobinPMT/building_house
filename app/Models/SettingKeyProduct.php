<?php

namespace App\Models;

use Illuminate\Support\Arr;

class SettingKeyProduct extends Base
{
    protected $table   = 'setting_keys_tables';

//    protected $guarded =  ['*'];

    protected $fillable = [
        'name', 'key', 'tag_type', 'active', 'html'
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
