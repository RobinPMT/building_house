<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Setting extends Base
{
    protected $table   = 'settings';

//    protected $guarded =  ['*'];

    protected $fillable = [
        'name', 'key', 'value', 'active', 'icon','created_at',
        'updated_at', 'type', 'avatar'
    ];

    const ACTIVE = 1;

    const NOT_ACTIVE = 0;

    const TYPE_SETTING = 'setting';

    const TYPE_HOME= 'home';

    const TYPE_BANNER = 'banner';

    const TYPE_COFFEE = 'coffee';

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
