
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
								<p id="mensaje">
									
								</p>
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
	{!! Form::text('statunew',null,['id'=>'statunew','class'=>'form-control','placeholder'=>'Nuevo estado...','autofocus'=>'autofocus',
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
	var Mostrar = function(id){
		var route = "{{url('admin/updatestatus')}}/"+id;
		$.get(route, function(data){ 
			$("#statu").val(data.statu);
			$("#id").val(data.id);
			console.log(data.statu);
			console.log(data.id);
		});
	}
	$(document).ready(function() {
		$.ajaxSetup({
			headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
		});
	});
	$(document).ready(function() {
		$("#actualizar").click(function()
		{
			var statumod = $("#statu").val();
			var idmod = $("#id").val();
			var route = "{{url('admin/upstatus/')}}"+idmod+"";
			var token = $("#token").val();
			var dataString = "statu="+statumod;
			$.ajax({
				url: route,
				headers: {'X-CSRF-TOKEN': token},
				type: 'post',
				dataType: 'json',
				data: dataString,
				success: function(data){
					if (data.success == 'true')
					{
						console.log(data);
						console.log('true');
						liststatus();
					//$("#myModal").modal('toggle');
					//$("#message-update").fadeIn();
				}
			},
			error:function(data)
			{
				console.log(data);
				console.log('false');
				//$("#error").html(data.responseJSON.name);
				//$("#message-error").fadeIn();
				if (data.status == 422) {
					console.clear();
				}
			}  
		});
		});
	});

	$(document).ready(function() {
		$("#Grabar").click(function(event)
		{
			var statu = $("#statunew").val();
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
					$("#statunew").val("");
					if (data.success=='true') {
						console.log('Guardado');
						var historial = $('#mensaje').html();
						$('#mensaje').html(historial + "<p><div class='alert alert-success alert-block'><button type='button' class='close' data-dismiss='alert'>×</button><strong>Guardado exitosamente</strong></div></p>"); 
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
