<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comic extends Model
{
	use SoftDeletes;
	protected $fillable = ['title', 'description', 'image_url', 'user_id'];
	protected $dates = ['deleted_at'];
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
