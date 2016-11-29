@extends('app')

@section('content')
<section id="articles">
	<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center">
		
		<h2>Write a New Article</h2>

		<hr class="star-primary">
		</div>
	</div>
	<div class="row">
	<div class="col-lg-8 col-lg-offset-2">

	{!! Form::open(['route' => 'articles.store']) !!}
		@include ('articles._form', ['submitbutton' => 'Add Article'])
	{!! Form::close() !!}
	</div>
	
</div>
</section>
@stop
