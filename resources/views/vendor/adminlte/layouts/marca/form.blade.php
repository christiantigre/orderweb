<div class="form-group">
	{!! Form::label('marca','Marca',['class'=>'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::text('marca',null,['class'=>'form-control','autocomplete'=>'off','placeholder'=>'Nombre de la marca ...']) !!}
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

