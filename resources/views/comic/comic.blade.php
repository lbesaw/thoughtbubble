@extends('layouts.master')

@section('content')

            <div class="container text-center" id="main-container">
                <div class="box">
                    <div class="columns">
                        <div class="column has-text-left"> 
                            {{ $comic->title}}</div>
                        <div class="column has-text-right"> 
                            {{$comic->user->name .' - '. $comic->created_at->toFormattedDateString() }}
                            @if (auth()->id() == $comic->user->id)
                                <form style="float:right;margin-left:10px;" method="POST" action="/comic/{{$comic->id}}/delete">
                                    {{ csrf_field() }}
                                    <button class="button delete is-danger" aria-label="delete" type="submit" onclick="return confirm('Are you sure you want to delete this comic?');"></button>
                                </form>
                            @endif
                        </div>
                    </div>
                    <img id="comic-image" src="{{$comic->image_url}}">
                </div>
                <div class="reponses">
                	@foreach ($comic->responses as $response) 
                		<article class="message">
                			<div class="message-header">
                				<p>
                					{{ App\Comic::find($response->response_comic)->title }}
                				</p>
                                <span>	{{ App\Comic::find($response->response_comic)->user->name . ' - ' . $response->created_at->diffForHumans()}} </span>
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
            </div>

@endsection