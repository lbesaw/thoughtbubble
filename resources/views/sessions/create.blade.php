@extends ('layouts.master')

@section('content')

	<h1>login</h1>
	<form method="POST" action="/login">
		{{ csrf_field() }}
		<div class="box">
			<div class="field">
	 		    <label class="label">Email</label>
	  			<div class="control">
	    			<input class="input" name="email" id="email" type="email" placeholder="Enter a email" required>
	  			</div>
			</div>

			<div class="field">
	  			<label class="label">Password:</label>
	  			<div class="control">
	    			<input class="input" name="password" id="password" type="password" placeholder="Enter a password" required>
	  			</div>
			</div>
			<button class="button is-primary" type="submit">Login</button>
		</div>
	</form>
	@include ('layouts.errors')

@endsection