<div class="form-group">
	{!! Form::label('metodo','Metodo',['class'=>'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::text('method',null,['class'=>'form-control','autocomplete'=>'off','autofocus'=>'autofocus','placeholder'=>'Nombre del metodo ...']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('banco','Banco',['class'=>'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::text('banco',null,['class'=>'form-control','autofocus'=>'autofocus','autocomplete'=>'off']) !!}

	</div>
</div>

<div class="form-group">
	{!! Form::label('cta','Cuenta',['class'=>'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::text('cuenta',null,['class'=>'form-control','autofocus'=>'autofocus','autocomplete'=>'off']) !!}

	</div>
</div>

<div class="form-group">
	{!! Form::label('titular','Titular',['class'=>'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::text('titular',null,['class'=>'form-control','autofocus'=>'autofocus','autocomplete'=>'off']) !!}

	</div>
</div>

<div class="form-group">
	{!! Form::label('numtarjeta','Num. Tarjeta',['class'=>'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::text('num_tarjeta',null,['class'=>'form-control','autofocus'=>'autofocus','autocomplete'=>'off']) !!}

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



