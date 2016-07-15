<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $guarded = [];


    public function commentuser() {
    	return $this->belongsTo('App\Models\User');
    }

    public function commentplan() {
    	return $this->belongsTo('App\Models\Plan');
    }

}
