{!! Form::model($comment, 
	['route' => 
		['questions.comments.update', $object->id, $comment->id], 
	 'method' => 'put',
	 'class' => 'hide edit-object-form'
	]) !!}

	@include('questions.comments.partials.comment_form')

	<button type='submit' class='btn btn-info'>Update the comment!</buton>

{!! Form::close() !!}