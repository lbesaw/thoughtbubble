@extends ('layouts.master')

@section ('content')
	<h1>user home</h1>
	@foreach(\App\Comic::where('user_id', '=', auth()->id())->get() as $comic)
		<a href="/comic/{{ $comic->id }}">
			<img src="{{ $comic->image_url }}">
		</a>

	@endforeach
@endsection