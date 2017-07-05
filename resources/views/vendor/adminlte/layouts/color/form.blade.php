<div class="form-group">
	{!! Form::label('color','Color',['class'=>'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::text('color',null,['class'=>'form-control','autocomplete'=>'off','placeholder'=>'Nombre del color ...']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('demo','Demo',['class'=>'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::text('codigo',null,['class'=>'form-control my-colorpicker1','autocomplete'=>'off']) !!}

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



