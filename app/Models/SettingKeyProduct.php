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

    const TYPE_INPUT = 'input';

    const TYPE_CHECKBOX = 'checkbox';

    const TYPE_TEXTAREA = 'textarea';

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

//    public function products()
//    {
//        return $this->morphedByMany(Product::class, 'setting_key_able');
//    }
    public function products()
    {
        return $this->belongsToMany(Product::class, 'setting_products', 'setting_key_product_id', 'product_id')->withPivot('value');
    }
}
