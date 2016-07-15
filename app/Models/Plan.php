<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table = 'plans';
    protected $guarded = [];

     public function planuser() {
    	return $this->belongsTo('App\Models\User');
    }

    public function planroute() {
    	return $this->hasMany('App\Models\Route');
    }

    public function planjoin() {
    	return $this->hasMany('App\Models\Join');
    }

    public function planfollow() {
    	return $this->hasMany('App\Models\Follow');
    }

    public function plancomment() {
    	return $this->hasMany('App\Models\Comment');
    }

}
