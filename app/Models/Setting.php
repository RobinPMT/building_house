<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Setting extends Base
{
    protected $table   = 'settings';

//    protected $guarded =  ['*'];

    protected $fillable = [
        'name', 'key', 'value', 'active', 'icon','created_at',
        'updated_at', 'type', 'avatar', 'avatar_not_main'
    ];

    const ACTIVE = 1;

    const NOT_ACTIVE = 0;

    const TYPE_SETTING = 'setting';

    const TYPE_HOME= 'home';

    const TYPE_BANNER = 'banner';

    const TYPE_COFFEE = 'coffee';

    const TYPE_COFFEE_HOME = 'coffee_home';

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
