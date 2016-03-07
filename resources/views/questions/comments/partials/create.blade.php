<h1>Add a Comment</h1>
{!! Form::open(['route' => ['questions.comments.store', $object->id]] ) !!}
	
	<div class='form-group'>
		{!! Form::label('comment', 'Comment') !!}
		{!! Form::textarea('comment', null, ['class' => 'form-control']) !!}

	</div>

	<button type="submit" class="btn btn-success">Add your comment!</button>

{!! Form::close() !!}