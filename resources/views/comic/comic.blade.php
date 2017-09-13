@extends('layouts.master')

@section('content')

            <div class="container text-center" id="main-container">
            <social> </social>
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
                <h1 class="has-text-left">Responses</h1>
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