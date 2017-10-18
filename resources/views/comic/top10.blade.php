@extends ('layouts.master', ['title' => 'thoughtbubble.cc - top 10 comics'])

@section ('content')
<div class="container">
	@foreach($comics as $comic) 
		<article class="message">
			<div class="message-header">
				<p>{{ $comic->title }}</p>
				<span>{{ $comic->user->name }}</span>
			</div>
			<div class="message-body text-center">
				<img src="{{ $comic->image_url }}">
			</div>
		</article>
	@endforeach
	</div>
@endsection