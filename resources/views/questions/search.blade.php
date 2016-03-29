@extends('layouts.master')

@section('title','Search results for "'.$q.'"' )
@section('content')

<div class="row">
	<div class="col-sm-9">
		<div class="page-header>">
			<a  href="{{ url('questions/create') }}" class="btn btn-success pull-right">+ Question</a>
			<h1>Search results for {{ $q }} </h1>
		</div>
		<div class="list-group">
        @include('questions.partials.questions')
		</div>
	</div>
	@include('shared.questions_sidebar')
</div>
@endsection