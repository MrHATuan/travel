<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    protected $table = 'follows';
    protected $guarded = [];


    public function user() {
    	return $this->belongsTo('App\Models\User');
    }

    public function plan() {
    	return $this->belongsTo('App\Models\Plan');
    }

}
