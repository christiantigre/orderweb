<div class="form-group">
	{!! Form::label('description','Categoria',['class'=>'col-sm-2 control-label',]) !!}

	<div class="col-sm-10">

		{!! Form::select('category_id', $categories, null,['class'=>'form-control','autofocus'=>'autofocus'])    !!}

	</div>
</div>
<div class="form-group">
	{!! Form::label('name','Nombre',['class'=>'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Sub - Categoria','autofocus'=>'autofocus',
		'autocomplete'=>'off']) !!}
	</div>
</div>
<div class="form-group">
	{!! Form::label('estado','Estado',['class'=>'col-sm-2 control-label']) !!}

	<div class="col-sm-10">
		{!! Form::select('status', ['0' => 'Inactivo', '1' => 'Activo'], '1',['class'=>'form-control'])    !!}
	</div>
</div>
<div class="form-group">
	{!! Form::label('description','Descripción',['class'=>'col-sm-2 control-label']) !!}

	<div class="col-sm-10">
		{!! Form::textarea('description',null,['class'=>'form-control','placeholder'=>'Enter ...','autofocus'=>'autofocus']) !!}
	</div>
</div>

