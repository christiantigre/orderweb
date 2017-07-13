<table id="example1" class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>#</th>
			<th>Titulo</th>
			<th>Detalles</th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>            
		<?Php      $i=1;          ?>
		@foreach($tittles as $tittle)
		<tr>
			<th><?Php      echo $i;          ?></th>
			<th>
				<strong>
					{{ $tittle->tittle }}
				</strong>
			</th>
			<th>
				<strong>
					{{ str_limit($tittle->paragraph,15) }}
				</strong>
			</th>
			<th>
				<a href="{{ Route('tittles.show', $tittle->id) }}" type="button" class="btn btn-block btn-primary btn-xs">Ver</a>
			</th>
			<th>
				<a href="{{ Route('tittles.edit', $tittle->id) }}" type="button" class="btn btn-block btn-warning btn-xs">Editar</a>
			</th>
		</tr>
		<?Php      $i++;          ?>
		@endforeach
	</tbody>
	<tfoot>
		<tr>
			<th>Titulo</th>
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