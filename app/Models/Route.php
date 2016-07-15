<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $table = 'routes';
    protected $guarded = [];


     public function routeplan() {
    	return $this->belongsTo('App\Models\Plan');
    }

}
