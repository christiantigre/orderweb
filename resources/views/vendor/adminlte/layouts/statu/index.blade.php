
@extends('adminlte::layouts.app')


@section('htmlheader_title')
{{ trans('adminlte_lang::message.$perfil') }}
@endsection

@section('main-content')
<div class="container-fluid spark-screen">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<!-- Default box -->
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">
						<!--titulo ventana-->
					</h3>

					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
							<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
							</div>
						</div>
						<!-- Main content -->
						<section class="content">
							<h3 class="box-title">Listado de Estado de pedidos</h3>

							<div class="row">
								<div class="col-xs-12">
									<div class="box">
<!--<div class="box-header">
<h3 class="box-title">
<a href="{{ Route('status.create') }}" type="button" class="btn btn-block btn-success btn-xs">Nuevo</a>            
<br>
</h3>
</div>-->
<!-- /.box-header -->
<div class="box-body">
	@include('adminlte::errors.info')
	<!--table-->
	<div class="row">
		<div class="col-xs-12">

			{!! Form::open(['id'=>'form']) !!}
			<div class="form-group row add">
				<div class="col-md-8">
					{{ csrf_field() }}
<!--<input type="text" class="form-control" id="name" name="name"
	placeholder="Nuevo estado..." required>-->
	{!! Form::text('statu',null,['id'=>'statu','class'=>'form-control','placeholder'=>'Nuevo estado...','autofocus'=>'autofocus',
	'autocomplete'=>'off']) !!}
	<p class="error text-center alert alert-danger hidden"></p>
</div>
<div class="col-md-4">
<!--<button class="btn btn-success" type="submit" id="addstatus">
<span class="glyphicon glyphicon-plus"></span> Agregar
</button>-->
<!--<button type="submit" class="btn btn-success" name="submit" id="submit">ADD</button>-->
<!--<a href="#" id="submit" name="submit" class="btn btn-success">Add</a> -->
{!!link_to('#','Grabar', ['id'=>'Grabar','class'=>'btn btn-success'])!!}

</div>
</div>
{!! Form::close() !!}



</div>
</div>
<div id="list-status">

</div>
</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->
</div>
<!-- /.box -->
</div>
</div>
</div>

<script>

	$(document).ready(function(){
		liststatus();
	});
	$(document).on("click",".pagination li a",function(e) {
		e.preventDefault();
		var url = $(this).attr("href");
		$.ajax({
			type:'get',
			url:url,
			success: function(data){
				$('#list-status').empty().html(data);
			}
		});
	});
	var liststatus = function()
	{
		$.ajax({
			type:'get',
			url:'{{ url("admin/listallstatus") }}',
			success: function(data){
				$('#list-status').empty().html(data);
			}
		});
	}

	$(document).ready(function() {
		$.ajaxSetup({
			headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
		});
	});

	/*$("#submit").click(function (e) {
		e.preventDefault();
		var nombre = $('#statu').val();
		$.ajax({
			type: "get",
			url: '{{ url("admin/addstatus") }}',
			data: {
				nombre: nombre
			}, success: function (msg) {
				alert("Se ha realizado el POST con exito "+msg);
			}
		});
	});*/
	$(document).ready(function() {

		$("#Grabar").click(function(event)
		{
			var statu = $("#statu").val();
			var token = $("input[name=_token]").val();
			var route = '{{ url("admin/addstatus") }}';
			var dataSting = "statu="+statu;
			$.ajax({
				url:route,
				headers:{'X-CSRF-TOKEN':token},
				type:'post',
				datatype: 'json',
				data:dataSting,
				success:function(data)
				{
					console.log(data);
					liststatus();
					if (data.success=='true') {
					console.log('Guardado');
					}
				},
				error:function(data)
				{
					console.log('Error al guardar');

				}  
			})

		});
	});


</script>

@endsection
