<div class="form-group">
	{!! Form::label('departamento','Departamento',['class'=>'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::text('department',null,['class'=>'form-control','autocomplete'=>'off','autofocus'=>'autofocus','placeholder'=>'Nombre departamento ...']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('estado','Estado',['class'=>'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		<select name="status" class="form-control">
			<option value="1">Activado</option>
			<option value="0">Desactivado</option>
		</select>
	</div>	
</div>