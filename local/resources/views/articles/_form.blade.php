<!--Temporary -->
{{ Form::hidden('user_id', 1) }}


<div class="row control-group">
		{{ Form::label('title', 'Title') }}

	<div class="form-group col-xs-12 form-group controls">
		{{ Form::text('title', null, ['class' => 'form-control']) }}
		<p class="help-block text-danger"></p>
	</div>
</div>
	<div class="row control-group">
		{{ Form::label('body', 'Body Content') }}
		<div class="form-group col-xs-12 form-group controls">
			{{ Form::textarea('body', null, ['class' => 'form-control']) }}
			<p class="help-block text-danger"></p>
		</div>
	</div>

	<div class="row control-group">

		{{ Form::label('created_at', 'Published At') }}
		<div class="form-group col-xs-12 form-group controls">
			{{ Form::input('date','published_at',date('Y-m-d'), ['class' => 'form-control']) }}	
			<p class="help-block text-danger"></p>
		</div>
	</div>
	<br>
	<div id="success"></div>
		<div class="row">
			<div class="form-group col-xs-12">
				{{ Form::submit($submitbutton, ['class' => 'btn btn-success btn-lg']) }}
			</div>
		@include ('errors.list')
		</div>
