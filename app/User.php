<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function comics() 
    {
        return $this->hasMany(Comic::class);
    }
    public function publish(Comic $comic) 
    {
        $this->comics()->save($comic);
        // $comic = Comic::create([
        //     'title' => request('title'),
        //     'description' => request('description'),
        //     'image_url' => '/images/' . $imageName,
        //     'user_id' => auth()->id()
        //     ]);
    }

}
