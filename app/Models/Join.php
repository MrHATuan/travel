<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Join extends Model
{
    protected $table = 'joins';
    protected $guarded = [];


    public function joinuser() {
    	return $this->belongsTo('App\Models\User');
    }

    public function joinplan() {
    	return $this->belongsTo('App\Models\Plan');
    }

}
