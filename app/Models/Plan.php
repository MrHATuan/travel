<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table = 'plans';
    protected $guarded = [];

     public function user() {
    	return $this->belongsTo('App\Models\User');
    }

    public function routes() {
    	return $this->hasMany('App\Models\Route');
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

}
