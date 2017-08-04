<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
	protected $fillable = ['title', 'description', 'image_url', 'user_id'];


}
