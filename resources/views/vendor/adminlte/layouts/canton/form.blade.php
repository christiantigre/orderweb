
<div class="form-group">
	{!! Form::label('provincia','Provincia',['class'=>'col-sm-2 control-label',]) !!}
	<div class="col-sm-10">		
		<select class="form-control m-bot15" name="id_province">
			@if ($provinces->count())
			@foreach($provinces as $province)
			<option value="{{ $province->id }}">{{ $province->province }} </option>    
			@endforeach
			@endif
		</select>
	</div>
</div>

<div class="form-group">
	{!! Form::label('canton','Canton',['class'=>'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::text('canton',null,['class'=>'form-control','autocomplete'=>'off','placeholder'=>'Nombre canton ...']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('postal','Postal',['class'=>'col-sm-2 control-label']) !!}

	<div class="col-sm-10">
		{!! Form::text('postal',null,['class'=>'form-control','autocomplete'=>'off','placeholder'=>'Cod. postal ...']) !!}
	</div>
</div>


