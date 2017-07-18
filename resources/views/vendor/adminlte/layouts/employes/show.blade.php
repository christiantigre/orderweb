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
            <!--titulo ventana-->Ver Empleado
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
              <div class="box">
                <div class="box-body">
                  <div class="box-body">                      
                    <h4>Nombre: <strong>
                      {{ $employ->name }} {{ $employ->lastname }}
                    </strong></h4>
                  </div>
                  <div class="box-body">                      
                    <h4>CI: <strong>
                      {{ $employ->ci }}
                    </strong></h4>
                  </div>
                  <div class="box-body">                      
                    <h4>Dirección : <strong>
                      {{ $employ->address }}
                    </strong></h4>
                  </div>
                  <div class="box-body">                      
                    <h4>Telefonos : <strong>
                      {{ $employ->cel }}- / -{{ $employ->phone }}
                    </strong></h4>
                  </div>
                  <div class="box-body">                      
                    <h4>Email : <strong>
                      {{ $employ->email }}
                    </strong></h4>
                  </div>
                  <div class="box-body">                      
                    <h4>Fecha de nacimiento : <strong>
                      {{ $employ->date_nac }}({{ $final }})
                    </strong></h4>
                  </div>
                  <div class="box-body">                      
                    <h4>Profesión : <strong>
                      {{ $employ->profetion }}
                    </strong></h4>
                  </div>
                  <div class="box-body">                      
                    <h4>Profesión : <strong>
                      {{ $employ->description }}
                    </strong></h4>
                  </div>
                  <div class="box-body">                      
                    <h4>Facebook : <strong><a href="{{ $employ->fb }}">{{ $employ->fb }}</a></strong></h4>
                    <h4>Twiter : <strong><a href="{{ $employ->twi }}">{{ $employ->twi }}</a></strong></h4>
                    <h4>LikeIn : <strong><a href="{{ $employ->in }}">{{ $employ->in }}</a></strong></h4>
                  </div>
                  <div class="box-body">                      
                  <h4>Estado : <strong>
                    @if(($employ->status)=='1')
                    Activado
                    @else
                    Desactivado
                    @endif
                  </strong></h4>
                </div>
                <div class="box-body">                      
                  <h4>Imagen : <strong>
                    <img src="{{ asset($employ->perfil.'') }}" width="320" alt="image02">     
                  </strong></h4>
                </div>
                <div class="box-footer">
                  <div class="col-sm-offset-2 col-sm-10">
                  <a href="{{ Route('employees.index') }}" type="button" class="btn btn-default pull-right">Cancelar</a>
                  <a href="{{ Route('employees.edit', $employ->id) }}" type="button" class="btn btn-primary pull-right">Editar</a>
                  </div>
                </div>
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
            <!-- /.col -->
            <!-- /.row -->
          </section>
          <!-- /.content -->
        </div>
        <!-- /.box -->
      </div>
    </div>
  </div>
  @endsection
