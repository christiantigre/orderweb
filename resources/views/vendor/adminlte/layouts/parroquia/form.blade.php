
<div class="form-group">
	{!! Form::label('canton','Canton',['class'=>'col-sm-2 control-label',]) !!}
	<div class="col-sm-10">		
		<select class="form-control m-bot15" name="id_canton">
			@if ($cantones->count())
			@foreach($cantones as $canton)
			<option value="{{ $canton->id }}"  @if($parroquia->id_canton == $canton->id) selected @endif>{{ $canton->canton }} </option>    
			@endforeach
			@endif
		</select>
	</div>
</div>

<div class="form-group">
	{!! Form::label('parroquia','Parroquia',['class'=>'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::text('parroquia',null,['class'=>'form-control','autocomplete'=>'off','placeholder'=>'Nombre parroquia ...']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('postal','Postal',['class'=>'col-sm-2 control-label']) !!}

	<div class="col-sm-10">
		{!! Form::text('postal',null,['class'=>'form-control','autocomplete'=>'off','placeholder'=>'Cod. postal ...']) !!}
	</div>
</div>


