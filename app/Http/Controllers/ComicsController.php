<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;
class ComicsController extends Controller
{
    //
    public function index() {
    	$comics = Comic::first();
    	return view('comic.comic', compact('comics'));
    }
    public function show(Comic $comic) {
		return view('comic.comic', compact('comic'));
    }
    public function create() {
    	return view('comic.create');
    }
    public function store() {
    	$this->validate(request(), [
    		'title' => 'required',
    		'image_url' => 'required|image'
    		]);

    	$imageName = 'unique'. time() .'.'.request()->file('image_url')->getClientOriginalExtension();

    	request()->file('image_url')->move(
    		base_path() . '/public/images/', $imageName);

    	$comic = Comic::create([
    		'title' => request('title'),
    		'description' => request('description'),
    		'image_url' => '/images/' . $imageName,
    		'user_id' => 0
    		]);

    	return redirect('/comic/'. $comic->id);
    }
}
