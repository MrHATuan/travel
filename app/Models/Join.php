<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Join extends Model
{
    protected $table = 'joins';
    protected $guarded = [];


    public function user() {
    	return $this->belongsTo('App\Models\User');
    }

    public function plan() {
    	return $this->belongsTo('App\Models\Plan');
    }

}
