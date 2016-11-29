@extends('app')

@section('content')
<section id="articles">
	<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center">
		
		<h2>Edit Article :  {{ $article->title }}</h2>
		<hr class="star-primary">
		</div>
	</div>
	<div class="row">
	<div class="col-lg-8 col-lg-offset-2">

	{!! Form::model($article, ['method'=>'PATCH', 'route'=>['articles.update', $article->id]]) !!}
		@include ('articles._form', ['submitbutton' => 'Edit Article'])
	{!! Form::close() !!}
	</div>
</div>
</section>
@stop
