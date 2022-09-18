<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Arr;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table   = 'admins';

    protected $guarded =  ['*'];

    protected $fillable = [
        'phone', 'password', 'name', 'email', 'active'
    ];

    protected $hidden = [
        'password', 'remember_token',
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

    public function setPasswordAttribute($value)
    {
        if ($value != "") {
            $this->attributes['password'] = bcrypt($value);
        }
    }

    public function getStatus()
    {
        return Arr::get($this->_active, $this->active, '[N\A]');
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'author_id');
    }
}
