<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
	protected $fillable = [
        'name', 'description', 'stock', 'price', 'img', 'category_id', 'subsidiary_id'
    ];

    public function scopeSearch($query, $name){

    	return $query->where('name', 'LIKE', "%$name%");
    }

    public function category(){
    	return $this->belongsTo('App\categories');
    }

    public function subsidiary(){
    	return $this->belongsTo('App\subsidiaries');
    }
}
