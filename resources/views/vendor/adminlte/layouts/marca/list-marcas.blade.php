<table id="example1" class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>#</th>
			<th>Marca</th>
			<th>Estado</th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>            
		<?Php      $i=1;          ?>
		@foreach($marcas as $marca)
		<tr>
			<th><?Php      echo $i;          ?></th>
			<th>
				<strong>
					{{ $marca->marca }}
				</strong>
			</th>
			<th>
				<strong>
					{{ $marca->statu ==1 ? "Activado" : "Desactivado" }}
				</strong>
			</th>
			<th>
				<a href="{{ Route('marcas.show', $marca->id) }}" type="button" class="btn btn-block btn-primary btn-xs">Ver</a>
			</th>
			<th>
				<a href="{{ Route('marcas.edit', $marca->id) }}" type="button" class="btn btn-block btn-warning btn-xs">Editar</a>
			</th>
			<th>				
				{!! Form::open(['method'=>'DELETE', 'route'=>['marcas.destroy', $marca->id]]) !!}
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
			<th>Marca</th>
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