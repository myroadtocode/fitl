{!! Form::open([
	'action' => 'QuestionController@search',
	'method' => 'get',
	'class' => 'navbar-form navbar-right'

	] ) !!}

	<div class="input-group">
		{!! FORM:: text('q', Request::input('q'), ['class' => 'form-control', 'placeholder' => 'Search for...']) !!}
	    <span class = "input-group-btn">
	    	<button class="btn btn-default" type="submit">Go!</button>
	    </span>
	</div>
{!! Form::close() !!}