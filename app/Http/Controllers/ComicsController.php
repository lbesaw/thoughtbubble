<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;
class ComicsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index() {
    	$comic = Comic::inRandomOrder()->first();
        $comic->increment('view_count', 1);
    	return view('comic.comic', compact('comic'));
    }
    public function show(Comic $comic) {
        $comic->increment('view_count', 1);
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

        auth()->user()->publish(
            $comic = new Comic([
                    'title' => request('title'),
                    'description' => request('description'),
                    'image_url' => '/images/' . $imageName
                    ]));
    
    	return redirect('/comic/'. $comic->id);
    }
    public function newest()
    {
        $comic = Comic::latest()->first();
        $comic->increment('view_count', 1);
        return view('comic.comic', compact('comic'));
    }

    public function top10()
    {
        $comics = Comic::orderBy('view_count', 'desc')->limit(10)->get();
        return view('comic.top10', compact('comics'));
    }
}
