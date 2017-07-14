<div class="form-group">
	{!! Form::label('Titulo','Titulo - 1',['class'=>'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::text('tittle1',null,['class'=>'form-control','autocomplete'=>'off','autofocus'=>'autofocus','placeholder'=>'Titulo presentacion ...']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('Titulo','Titulo - 2',['class'=>'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::text('tittle2',null,['class'=>'form-control','autocomplete'=>'off','autofocus'=>'autofocus','placeholder'=>'Titulo 2 presentacion ...']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('subtittle','Subtitulo',['class'=>'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::text('subtittle',null,['class'=>'form-control','autofocus'=>'autofocus','autocomplete'=>'off','placeholder'=>'Sub - Titulo presentacion ...']) !!}

	</div>
</div>

<div class="form-group">
	{!! Form::label('cliente','Cliente',['class'=>'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::text('client',null,['class'=>'form-control','autofocus'=>'autofocus','autocomplete'=>'off','placeholder'=>'Cliente ...']) !!}

	</div>
</div>

<div class="form-group">
	{!! Form::label('fecha','Fecha',['class'=>'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::text('date',null,['class'=>'form-control','autofocus'=>'autofocus','autocomplete'=>'off','placeholder'=>'Fecha de publicación ...']) !!}

	</div>
</div>

<div class="form-group">
	{!! Form::label('link','Link',['class'=>'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::text('link',null,['class'=>'form-control','autofocus'=>'autofocus','autocomplete'=>'off','placeholder'=>'link de pagina ...']) !!}

	</div>
</div>

<div class="form-group">
	{!! Form::label('descripcion','Descripción',['class'=>'col-sm-2 control-label']) !!}
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
	{!! Form::label('tag','Etiqueta',['class'=>'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::select('tag', $categories, null,['class'=>'form-control','autofocus'=>'autofocus'])    !!}

<!--		{!! Form::text('tag',null,['class'=>'form-control','autofocus'=>'autofocus','autocomplete'=>'off','placeholder'=>'Etiqueta de presentación ...']) !!}-->

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