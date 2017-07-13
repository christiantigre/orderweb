<div class="form-group">
	{!! Form::label('Titulo','Titulo',['class'=>'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::text('tittle',null,['class'=>'form-control','autocomplete'=>'off','autofocus'=>'autofocus','placeholder'=>'Titulo presentacion ...']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('medida','Descripción',['class'=>'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::textarea('paragraph',null,['class'=>'form-control', 'rows' => 2, 'cols' => 40,'autofocus'=>'autofocus','autocomplete'=>'off']) !!}

	</div>
</div>

<div class="form-group">
	{!! form::label('image','Imagen',['class'=>'col-sm-2 control-label'])!!}
	<div class="col-sm-10">
		<input type="file" name="img" id="img" accept="image/*"  class="form-control"/>
	</div>
</div>

<div class="form-group">
	{!! Form::label('Link','Link',['class'=>'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::text('link',null,['class'=>'form-control','autofocus'=>'autofocus','autocomplete'=>'off','placeholder'=>'Link contenido ...']) !!}

	</div>
</div>