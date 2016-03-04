<hr>

<h2>Delete this question: </h2>

{!! Form::open([
		'action' => [ 'QuestionController@destroy', $question->id ],
		'method' => 'delete',
		'class' => 'delete-object'
	]) !!}
	
	<button class="btn btn-danger" type="submit">DELETE this question!</button>

{!! Form::close() !!}