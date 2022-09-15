<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table   = 'admins';

    protected $guarded =  ['*'];

//    protected $fillable = [
//        'username', 'password', 'name', 'email', 'google_id'
//    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
