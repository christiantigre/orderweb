<div class="form-group">
	{!! Form::label('moneda','Moneda',['class'=>'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::text('money',null,['class'=>'form-control','autocomplete'=>'off','autofocus'=>'autofocus','placeholder'=>'Nombre del la moneda ...']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('abreviatura','Abreviatura',['class'=>'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::text('abreviatura',null,['class'=>'form-control','autofocus'=>'autofocus','autocomplete'=>'off']) !!}

	</div>
</div>

<div class="form-group">
	{!! Form::label('img','Imagen',['class'=>'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::text('img',null,['class'=>'form-control','autofocus'=>'autofocus','autocomplete'=>'off']) !!}

	</div>
</div>

<div class="form-group">
	{!! Form::label('estado','Estado',['class'=>'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		<select name="statu" class="form-control">
			<option value="1">Activado</option>
			<option value="0">Desactivado</option>
		</select>
	</div>
	
</div>



