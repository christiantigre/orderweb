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
              <h3 class="box-title">Listado de Sub Categorias</h3>
              <div class="row">
                <div class="col-xs-12">
                  <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">
                        <a href="{{ Route('subcategories.create') }}" type="button" class="btn btn-block btn-success btn-xs">Nuevo</a>            
                        <br>
                      </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      @include('adminlte::errors.info')
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Sub Categoria</th>
                            <th>Descripción</th>
                            <th>Categoria</th>
                            <th>Estado</th>
                            <th></th>
                            <th></th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>            
                          <?Php      $i=1;          ?>
                          @foreach($subcategories as $category)
                          <tr>
                            <th><?Php      echo $i;          ?></th>
                            <th>
                              <strong>
                                {{ $category->name }}
                              </strong>
                            </th>
                            
                            <th>
                              <strong>
                                {{ str_limit($category->description,30) }}
                              </strong>
                            </th>
                            <th>{{ $category->categorie->name }}</th>
                            <th>
                            @if(($category->status)=='1')
                              Activado
                            @else
                              Desactivado
                            @endif
                            </th>
                            <th>
                              <a href="{{ Route('subcategories.show', $category->id) }}" type="button" class="btn btn-block btn-primary btn-xs">Ver</a>
                            </th>
                            <th>
                              <a href="{{ Route('subcategories.edit', $category->id) }}" type="button" class="btn btn-block btn-warning btn-xs">Editar</a>
                            </th>
                            <th>
                              <!--<form action="{{ route('Categories.destroy',$category->id) }}" method="POST">-->
                              {!! Form::open(['method'=>'DELETE', 'route'=>['subcategories.destroy', $category->id]]) !!}
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" onclick="return confirm('Esta seguro que desea eliminar el registro?')" class="btn btn-block btn-danger btn-xs">Eliminar</button>
                                <!--<a href="{{ Route('Categories.show', $category->id) }}" type="button" class="btn btn-block btn-danger btn-xs">Eliminar-->
                              </a>
                            {!! Form::close() !!}
                          </th>
                        </tr>
                        <?Php      $i++;          ?>
                        @endforeach
                      </tbody>
                      <tfoot>
                        <tr>
                        <th>Sub Categoria</th>
                          <th></th>
                          <th></th>
                        </tr>
                      </tfoot>
                    </table>
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
  @endsection
