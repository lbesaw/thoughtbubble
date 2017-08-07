@extends ('layouts.master')

@section ('content')

<h1>register</h1>

<form method="POST" action="/register">
	{{ csrf_field() }}
	<div class="box">
	<div class="field">
	  <label class="label">Name</label>
	  <div class="control">
	    <input class="input" name="name" id="name" type="text" placeholder="Enter a name" required>
	  </div>
	</div>

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

	<div class="field">
	  <label class="label">Confirm password:</label>
	  <div class="control">
	    <input class="input" name="password_confirmation" id="password_confirmation" type="password" placeholder="Retype password" required>
	  </div>
	</div>
	<button class="button is-primary" type="submit">Submit</button>

</div>

</form>
@include ('layouts.errors')
@endsection