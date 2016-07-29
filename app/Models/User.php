<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $fillable = [
        'id', 'name', 'email', 'password', 'avatar', 'cover', 'created_at', 'updated_at',
    ];


    public function plans() {
        return $this->hasMany('App\Models\Plan');
    }

    public function joins() {
        return $this->hasMany('App\Models\Join');
    }

    public function follows() {
        return $this->hasMany('App\Models\Follow');
    }
   
   public function comments() {
        return $this->hasMany('App\Models\Comment');
    }


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
