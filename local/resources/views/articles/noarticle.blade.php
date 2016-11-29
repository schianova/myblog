@extends('app')

@section('content')
<section id="articles">
	<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center">
		
		<h2>You Don't Have Any Article Yet....</h2>
		
		<hr class="star-primary">
		</div>
	</div>
	<div class="row">
	<div class="col-lg-8 col-lg-offset-2">
	<button onclick="window.location='{{ url("create") }}'" class="btn btn-success center-block">Hit Me To Create One!!</button>

	

@stop
