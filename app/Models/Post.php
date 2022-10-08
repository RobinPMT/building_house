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
        'updated_at', 'type', 'keyword_seo'
    ];

    const TYPE_EVENT = 'tin-tuc-su-kien';

    const TYPE_PROMOTION = 'tin-khuyen-mai';

    const TYPE_FINANCE = 'tin-tai-chinh';

    const TYPE_NEW = 'tin-tuc';

    const ACTIVE = 1;

    const NOT_ACTIVE = 0;

    const HOT = 1;

    const NOT_HOT = 0;

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
        return $this->belongsTo(Admin::class, 'author_id')->select('id', 'name');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tags', 'post_id', 'tag_id')->withPivot('post_id', 'tag_id');
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
