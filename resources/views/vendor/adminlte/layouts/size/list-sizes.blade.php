<table id="example1" class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>#</th>
			<th>Tamaño</th>
			<th>Abrev</th>
			<th>medida</th>
			<th>estado</th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>            
		<?Php      $i=1;          ?>
		@foreach($sizes as $size)
		<tr>
			<th><?Php      echo $i;          ?></th>
			<th>
				<strong>
					{{ $size->size }}
				</strong>
			</th>
			<th>
				<strong>
					{{ $size->abreviatura }}
				</strong>
			</th>
			<th>
				<strong>
					{{ $size->medida }}
				</strong>
			</th>
			<th>
				<strong>
					{{ $size->statu ==1 ? "Activado" : "Desactivado" }}
				</strong>
			</th>
			<th>
				<a href="{{ Route('sizes.show', $size->id) }}" type="button" class="btn btn-block btn-primary btn-xs">Ver</a>
			</th>
			<th>
				<a href="{{ Route('sizes.edit', $size->id) }}" type="button" class="btn btn-block btn-warning btn-xs">Editar</a>
			</th>
			<th>				
				{!! Form::open(['method'=>'DELETE', 'route'=>['sizes.destroy', $size->id]]) !!}
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
			<th>Tamaño</th>
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