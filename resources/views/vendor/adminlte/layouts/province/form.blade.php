
<div class="form-group">
	{!! Form::label('pais','Pais',['class'=>'col-sm-2 control-label',]) !!}
	<div class="col-sm-10">
		{!! Form::text('id_country',null,['class'=>'form-control','list'=>'countries','placeholder'=>'Nombre Pais ...','autocomplete'=>'off','autofocus'=>'autofocus']) !!}

		<!--<input type="text" list="countries" class="form-control" autocomplete="off" placeholder="Pais" autofocus="autofocus">-->
		<datalist id="countries">
			@foreach($countries as $country)
			<option value="{{ $country->country }}">{{ $country->country }} -/- {{ $country->iso }}</option>
			@endforeach
		</datalist>
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


