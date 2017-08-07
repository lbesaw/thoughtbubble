@extends ('layouts.master')

@section ('content') 

<h1>Serve up a comic</h1>
<form method="POST" enctype="multipart/form-data" action="/comic">

	{{ csrf_field() }}

	<div class="field">
	  <label class="label">Title</label>
	  <div class="control">
	    <input class="input" name="title" id="title" type="text" placeholder="Enter a title" required>
	  </div>
	</div>

	<div class="field">
	  <label class="label">Description</label>
	  <div class="control">
	    <textarea class="textarea" name="description" id="description" placeholder="Enter an optional description for your comic"></textarea>
	  </div>
	</div>

	<div class="field">
	  <label class="label">Image URL</label>
	  <div class="control">
	    <input class="input" type="file" id="imageurl" name="image_url" required>
	  </div>
	</div>
	@include('layouts.errors')

	<div class="field is-grouped">
	  <div class="control">
	    <button class="button is-primary">Submit</button>
	  </div>

	  <div class="control">
	    <button class="button is-link">Cancel</button>
	  </div>
	</div>
</form>
@endsection