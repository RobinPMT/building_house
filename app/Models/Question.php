<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Question extends Base
{
    protected $table   = 'questions';

//    protected $guarded =  ['*'];

    protected $fillable = [
        'title', 'active', 'author_id','created_at',
        'updated_at', 'content',
    ];

    const ACTIVE = 1;

    const NOT_ACTIVE = 0;

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

    public function getStatus()
    {
        return Arr::get($this->_active, $this->active, '[N\A]');
    }

    public function creator()
    {
        return $this->belongsTo(Admin::class, 'author_id');
    }
}
