<div class="form-group">
	{!! Form::label('Titulo','Titulo',['class'=>'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::text('tittle',null,['class'=>'form-control','autocomplete'=>'off','autofocus'=>'autofocus','placeholder'=>'Titulo presentacion ...']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('descripcion','Descripción',['class'=>'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::text('paragraph',null,['class'=>'form-control','autofocus'=>'autofocus','autocomplete'=>'off','placeholder'=>'Descripción ... max 150 ctres']) !!}

	</div>
</div>