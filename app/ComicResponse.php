<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComicResponse extends Model
{
    //
    protected $fillable = ['comic_id', 'response_comic', 'user_id'];
    public function comic() {
    	return $this->belongsTo(Comic::class);
    }
    public function responseComics() {
    	return $this->hasMany(Comic::class);
    }
    public function user() {
    	return $this->belongsTo(User::class);
    }
}
