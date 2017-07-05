<div class="form-group">
	{!! Form::label('tamaño','Tamaño',['class'=>'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::text('size',null,['class'=>'form-control','autocomplete'=>'off','autofocus'=>'autofocus','placeholder'=>'Nombre del tamaño ...']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('abreviatura','Abreviatura',['class'=>'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::text('abreviatura',null,['class'=>'form-control','autofocus'=>'autofocus','autocomplete'=>'off']) !!}

	</div>
</div>

<div class="form-group">
	{!! Form::label('medida','Medida',['class'=>'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::text('medida',null,['class'=>'form-control','autofocus'=>'autofocus','autocomplete'=>'off']) !!}

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



