@extends('layouts.master')

@section('title', $object->title)

@section('content')
	<div class="page-header">
		<a href="{{ action('QuestionController@edit', $object->id ) }}" 
			class="btn btn-info pull-right">Edit</a>
		<h1>{{ $object->title }}</h1>
	</div>
	<p>{{ $object->description }}</p>
	<pre>
	    {{ $object->code }}
	</pre>
	<p>Question date: {{ $object->created_at }} </p>
	
	@include('questions.comments.partials.display')
@endsection