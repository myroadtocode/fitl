<hr>

<h2>Delete this language: </h2>

{!! Form::open([
		'route' => [ 'languages.destroy', $language->id ],
		'method' => 'delete',
		'class' => 'delete-object'
	]) !!}
	
	<button class="btn btn-danger" type="submit">DELETE this language!</button>

{!! Form::close() !!}