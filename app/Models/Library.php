<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Arr;

class Library extends Base
{
    use Sluggable;

    protected $table   = 'libraries';

//    protected $guarded =  ['*'];

    protected $fillable = [
        'title', 'avatar', 'arr_image', 'freedom', 'author_id', 'active', 'banner_home', 'banner_product','created_at',
        'updated_at', 'slug', 'hot', 'title_seo', 'description_seo', 'keyword_seo'
    ];

    const FREEDOM = 1;

    const NOT_FREEDOM = 0;

    const ACTIVE = 1;

    const BANNER_PUBLIC = 1;

    const BANNER_PRIVATE = 0;

    const HOT = 1;

    const NOT_HOT = 0;

    protected $_active = [
        1 => [
            'name' => 'Public',
            'class' => 'badge-light-success'
        ],
        0 => [
            'name' => 'Private',
            'class' => 'badge-light-warning'
        ],
    ];

    protected $_freedom = [
        1 => [
            'name' => 'Slide nổi bật',
            'class' => 'badge-light-success'
        ],
        0 => [
            'name' => 'Thư viện ảnh',
            'class' => 'badge-light-warning'
        ],
    ];

    protected $hot_banner_home = [
        1 => [
            'name' => 'Home: Hiện',
            'class' => 'badge-light-success'
        ],
        0 => [
            'name' => 'Home: Ẩn',
            'class' => 'badge-light-warning'
        ],
    ];

    protected $hot_banner_pro = [
        1 => [
            'name' => 'Sản phẩm: Hiện',
            'class' => 'badge-light-success'
        ],
        0 => [
            'name' => 'Sản phẩm: Ẩn',
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

    public function getFreedom()
    {
        return Arr::get($this->_freedom, $this->freedom, '[N\A]');
    }

    public function getStatus()
    {
        return Arr::get($this->_active, $this->active, '[N\A]');
    }

    public function getHot()
    {
        return Arr::get($this->_hot, $this->hot, '[N\A]');
    }

    public function getBannerHome()
    {
        return Arr::get($this->hot_banner_home, $this->banner_home, 'N\A');
    }

    public function getBannerProduct()
    {
        return Arr::get($this->hot_banner_pro, $this->banner_product, 'N\A');
    }

    public function creator()
    {
        return $this->belongsTo(Admin::class, 'author_id');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
