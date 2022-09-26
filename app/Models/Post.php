<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Arr;

class Post extends Base
{
    use Sluggable;

    protected $table   = 'posts';

//    protected $guarded =  ['*'];

    protected $fillable = [
        'title', 'slug', 'description', 'content', 'active', 'hot',
        'author_id', 'description_seo', 'title_seo', 'avatar', 'view','created_at',
        'updated_at'
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
