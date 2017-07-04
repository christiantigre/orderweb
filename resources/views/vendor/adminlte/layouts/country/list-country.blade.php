<table id="example1" class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Pais</th>
      <th>Iso</th>
      <th></th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>            
    <?Php      $i=1;          ?>
    @foreach($countries as $country)
    <tr>
      <th><?Php      echo $i;          ?></th>
      <th>
        <strong>
          {{ $country->country }}
        </strong>
      </th>

      <th>
        <strong>
          {{ $country->iso }}
        </strong>
      </th>

      <th>
        <a href="{{ Route('countries.show', $country->id) }}" type="button" class="btn btn-block btn-primary btn-xs">Ver</a>
      </th>
      <th>
        <a href="{{ Route('countries.edit', $country->id) }}" type="button" class="btn btn-block btn-warning btn-xs">Editar</a>
      </th>
      <th>
        {!! Form::open(['method'=>'DELETE', 'route'=>['countries.destroy', $country->id]]) !!}
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" onclick="return confirm('Esta seguro que desea eliminar el registro?')" class="btn btn-block btn-danger btn-xs">Eliminar</button>

      </a>
      {!! Form::close() !!}
    </th>
  </tr>
  <?Php      $i++;          ?>
  @endforeach
</tbody>
<tfoot>
  <tr>
    <th>Pais</th>
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