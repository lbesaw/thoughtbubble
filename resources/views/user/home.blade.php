@extends ('layouts.master')

@section ('content')
	<h1>user home</h1>
	<div class="container">
		@foreach(\App\Comic::where('user_id', '=', auth()->id())->get() as $comic)
			<article class="message is-dark" style="max-width:300px;max-height:300px;height:300px;width:300px;margin:15px;float:left;">
				
					<div class="message-header">{{ $comic->title }}
					<form method="POST" action="/comic/{{$comic->id}}/delete">
					{{ csrf_field() }}
					<button class="delete button is-danger" aria-label="delete" type="submit" onclick="return confirm('Are you sure you want to delete this comic?');"></button>
					</form></div>

					<div class="message-body">
					    <a href="/comic/{{ $comic->id }}">
						<img src="{{ $comic->image_url }}" style="max-width:250px; max-height:250px;">
						</a>
					</div>
				
			</article>
		@endforeach	
	</div>
@endsection