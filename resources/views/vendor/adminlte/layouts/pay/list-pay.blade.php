<table id="example1" class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>#</th>
			<th>Metodo</th>
			<th>Banco</th>
			<th>Cuenta</th>
			<th>Titular</th>
			<th>Tarjeta</th>
			<th>Estado</th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>            
		<?Php      $i=1;          ?>
		@foreach($paypethod as $pay)
		<tr>
			<th><?Php      echo $i;          ?></th>
			<th>
				<strong>
					{{ $pay->method }}
				</strong>
			</th>
			<th>
				<strong>
					{{ $pay->banco }}
				</strong>
			</th>
			<th>
				<strong>
					{{ $pay->cuenta }}
				</strong>
			</th>
			<th>
				<strong>
					{{ $pay->titular }}
				</strong>
			</th>
			<th>
				<strong>
					{{ $pay->num_tarjeta }}
				</strong>
			</th>
			<th>
				<strong>
					{{ $pay->statu ==1 ? "Activado" : "Desactivado" }}
				</strong>
			</th>
			<th>
				<a href="{{ Route('pay.show', $pay->id) }}" type="button" class="btn btn-block btn-primary btn-xs">Ver</a>
			</th>
			<th>
				<a href="{{ Route('pay.edit', $pay->id) }}" type="button" class="btn btn-block btn-warning btn-xs">Editar</a>
			</th>
			<th>				
				{!! Form::open(['method'=>'DELETE', 'route'=>['pay.destroy', $pay->id]]) !!}
				{{ csrf_field() }}
				<input type="hidden" name="_method" value="DELETE">
				<button type="submit" onclick="return confirm('Esta seguro que desea eliminar el registro?')" class="btn btn-block btn-danger btn-xs">Eliminar</button>				
				{!! Form::close() !!}
			</th>
		</tr>
		<?Php      $i++;          ?>
		@endforeach
	</tbody>
	<tfoot>
		<tr>
			<th>Metodo</th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
	</tfoot>
</table>

<script>
	$(function () {
		$("#example1").DataTable();
		$('#example2').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": false,
			"ordering": true,
			"info": true,
			"autoWidth": false
		});
	});
</script>