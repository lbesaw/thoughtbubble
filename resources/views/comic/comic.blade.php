@extends('layouts.master')

@section('content')
<div id="root">
            <navbar>
                <template slot="loginlogout">
                @if(Auth::check())
                    <a class="navbar-item" href="/logout">logout</a>
                @else
                    <a class="navbar-item" href="/login">login</a>
                @endif
                </template>
                <template slot="register">
                    @if(Auth::check())
                       <a class="navbar-item" href="#"> {{ Auth::user()->name }} </a>
                    @else
                        <a class="navbar-item" href="/register">register</a>
                    @endif
                </template>
            </navbar>
            <div class="container text-center" id="main-container">
                <div class="box">
                    <div class="columns">
                        <div class="column has-text-left"> 
                            {{$comic->user->name}}</div>
                        <div class="column has-text-right"> 
                            {{$comic->created_at->toFormattedDateString() }}
                        </div>
                    </div>
                    <img  id="comic-image" src="{{$comic->image_url}}">
                </div>
                <div class="reponses">
                	@foreach ($comic->responses as $response) 
                		<article class="message">
                			<div class="message-header">
                				<p>
                					{{ App\Comic::find($response->response_comic)->title }}
                				</p>	{{$response->created_at->diffForHumans()}}
                			</div>
                			<div class="message-body">
                			<img src= "{{ App\Comic::find($response->response_comic)->image_url }}">
                			</div>
                		</article>
                	@endforeach
                	<hr>
                	<div class="box">
	                	<form method="POST" action="/comic/{{ $comic->id }}/responses">
	                	{{ csrf_field() }}
	                		<div class="field">
							    <label class="label">Title</label>
							    <div class="control">
							      <input class="input" name="responseid" id="responseid" type="text" placeholder="Enter a comic ID" required>
							    </div>
							    //ideally have a modal pop up and select an image associated with a user, for now we will just refer to a comic id
							</div>
							<button type="submit" class="button is-primary" id="add-comment">Add comment</button>
							</form>
                            @include('layouts.errors')
                	</div>
            </div>
            <bottomnav></bottomnav>
        </div>
@endsection