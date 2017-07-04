
<div class="form-group">
	{!! Form::label('pais','Pais',['class'=>'col-sm-2 control-label',]) !!}
	<div class="col-sm-10">		
		<select class="form-control m-bot15" name="id_country">
			@if ($countries->count())
			@foreach($countries as $country)
			<option value="{{ $country->id }}">{{ $country->country }} -/- {{ $country->iso }}</option>    
			@endforeach
			@endif
		</select>
	</div>
</div>

<div class="form-group">
	{!! Form::label('provincia','Provincia',['class'=>'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::text('province',null,['class'=>'form-control','autocomplete'=>'off','placeholder'=>'Nombre provincia ...']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('postal','Postal',['class'=>'col-sm-2 control-label']) !!}

	<div class="col-sm-10">
		{!! Form::text('postal',null,['class'=>'form-control','autocomplete'=>'off','placeholder'=>'Cod. postal ...']) !!}
	</div>
</div>


