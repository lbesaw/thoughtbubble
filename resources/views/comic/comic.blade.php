@extends('layouts.master', ['title' => 'thoughtbubble.cc - '. $comic->title])

@section('content')
            <meta property="og:url"                content="http://thoughtbubble.cc/comics/{{ $comic->id }}" />
            <meta property="og:type"               content="article" />
            <meta property="og:title"              content="{{ $comic->title }}" />
            <meta property="og:description"        content="Check out this comic on thoughtbubble.cc! {{ $comic->description }}" />
            <meta property="og:image"              content="{{ $comic->image_url }}" />

            
            <div class="container text-center" id="main-container">
            <social>
                <template slot="twitter">
                    <a href="https://twitter.com/intent/tweet?text=Check%20out%20%27{{$comic->title}}%27%20at%20http%3A%2F%2Fthoughtbubble.cc%2Fcomic%2F{{$comic->id}}">
                        <img src="/images/twitter.png">
                    </a>
                </template>
                <template slot="facebook">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=http://thoughtbubble.cc/comics/{{$comic->id}}">
                        <img src="/images/facebook.png">
                    </a>
                </template>
            </social>
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
                <hr>
                @if($comic->responses->count() > 0) 
                    <h3 class="has-text-left">Responses</h3>
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
                @endif
                	
                    @if(Auth::check())
                    <div class="box">
                    <modal>
                        <template slot="comics">
                            @foreach(App\User::find(auth()->id())->comics as $possibleResponse) 
                                <div class="box" style="max-width:300px;">
                                <form method="POST" action="/comic/{{ $comic->id }}/responses">
                                {{ csrf_field() }}
                                <input name="responseid" type="image" value="{{ $possibleResponse->id }}" src="{{ $possibleResponse->image_url }}" style="max-width:250px;">
                                </form>
                                </div>
                            @endforeach
                        </template>
                    </modal>
                    </div>
                    @endif
                    @include('layouts.errors')
                	</div>
                </div>
            </div>

@endsection