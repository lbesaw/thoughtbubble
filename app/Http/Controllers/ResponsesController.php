<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;
use App\ComicResponse;
class ResponsesController extends Controller
{
    //
    public function store(Comic $comic) {
    	$this->validate(request(), ['responseid' => 'required']);

    	$comic->addResponse(request('responseid'));
    	return back();
    }
}
