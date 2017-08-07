@if (count($errors))
	<div class="has-text-danger">
		<ul>
			@foreach ($errors->all() as $error) 
				<li> {{ $error }} </li> 
			@endforeach
		</ul>
	</div>
@endif