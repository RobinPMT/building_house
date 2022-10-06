<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Arr;

class Product extends Base
{
    use Sluggable;

    protected $table   = 'products';

//    protected $guarded =  ['*'];

    protected $fillable = [
        'title', 'slug', 'active', 'hot', 'author_id', 'arr_image', 'price', 'avatar_design', 'description',
        'longs', 'width', 'height', 'area', 'room_number', 'room_description', 'created_at',
        'updated_at', 'category_id', 'image_back_ground_design'
    ];

    const ACTIVE = 1;

    const NOT_ACTIVE = 0;

    const HOT = 1;

    const NOT_HOT = 1;

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

    protected $_hot = [
        1 => [
            'name' => 'Nổi bật',
            'class' => 'badge-light-danger'
        ],
        0 => [
            'name' => 'Không',
            'class' => 'badge-light-secondary'
        ],
    ];

    public function getStatus()
    {
        return Arr::get($this->_active, $this->active, '[N\A]');
    }

    public function getHot()
    {
        return Arr::get($this->_hot, $this->hot, '[N\A]');
    }

    public function creator()
    {
        return $this->belongsTo(Admin::class, 'author_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

//    public function keys()
//    {
//        return $this->morphToMany(SettingKeyProduct::class, 'setting_key_able');
//    }
    public function keys()
    {
        return $this->belongsToMany(SettingKeyProduct::class, 'setting_products', 'product_id', 'setting_key_product_id')->withPivot('setting_key_product_id', 'product_id', 'value')
            ->select('value', 'key', 'name', 'tag_type');
    }

    /**
     * @inheritDoc
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
