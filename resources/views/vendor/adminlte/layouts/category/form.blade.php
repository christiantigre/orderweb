<div class="form-group">
	{!! Form::label('name','Nombre',['class'=>'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Categoria']) !!}
	</div>
</div>
<div class="form-group">
	{!! Form::label('des','Descripción',['class'=>'col-sm-2 control-label']) !!}

	<div class="col-sm-10">
		{!! Form::text('des',null,['class'=>'form-control','placeholder'=>'Enter ...']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('visible','Visible Galeria',['class'=>'col-sm-2 control-label']) !!}

	<div class="col-sm-10">
		Visible {{ Form::radio('thumb', '1' , true) }}
		No visible {{ Form::radio('thumb', '0' , false) }}
	</div>
</div>


