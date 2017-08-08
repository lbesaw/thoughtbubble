<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
	protected $fillable = ['title', 'description', 'image_url', 'user_id'];

	public function responses() 
	{
		return $this->hasMany(ComicResponse::class);
	}
	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function addResponse($response_id) {
    	$this->responses()->create( [
    			'comic_id' => $this->id,
    			'response_comic' => $response_id,
    			'user_id' => auth()->id()
    		]);
    	}
}
