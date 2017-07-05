<table id="example1" class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>#</th>
			<th>Moneda</th>
			<th>Abrev</th>
			<th>Imagen</th>
			<th>estado</th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>            
		<?Php      $i=1;          ?>
		@foreach($money as $mone)
		<tr>
			<th><?Php      echo $i;          ?></th>
			<th>
				<strong>
					{{ $mone->money }}
				</strong>
			</th>
			<th>
				<strong>
					{{ $mone->abreviatura }}
				</strong>
			</th>
			<th>
				<strong>
					{{ $mone->img }}
				</strong>
			</th>
			<th>
				<strong>
					{{ $mone->statu ==1 ? "Activado" : "Desactivado" }}
				</strong>
			</th>
			<th>
				<a href="{{ Route('money.show', $mone->id) }}" type="button" class="btn btn-block btn-primary btn-xs">Ver</a>
			</th>
			<th>
				<a href="{{ Route('money.edit', $mone->id) }}" type="button" class="btn btn-block btn-warning btn-xs">Editar</a>
			</th>
			<th>				
				{!! Form::open(['method'=>'DELETE', 'route'=>['money.destroy', $mone->id]]) !!}
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