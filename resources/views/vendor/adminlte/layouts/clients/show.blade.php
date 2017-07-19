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
            <!--titulo ventana-->Ver Cliente
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
                      {{ $cliente->nom_cli }} {{ $cliente->app_cli }}
                    </strong></h4>
                  </div>
                  <div class="box-body">                      
                    <h4>Local: <strong>
                      {{ $cliente->name_local }}
                    </strong></h4>
                  </div>
                  <div class="box-body">                      
                    <h4>CI: <strong>
                      {{ $cliente->ci }}
                    </strong></h4>
                  </div>
                  <div class="box-body">                      
                    <h4>RUC: <strong>
                      {{ $cliente->ruc_local }}
                    </strong></h4>
                  </div>
                  <div class="box-body">                      
                    <h4>Dirección : <strong>
                      {{ $cliente->dir_local }}
                    </strong></h4>
                  </div>
                  <div class="box-body">                      
                    <h4>Telefonos : <strong>
                      {{ $cliente->phone_local }}- / -{{ $cliente->cel_local }}
                    </strong></h4>
                  </div>
                  <div class="box-body">                      
                    <h4>Email : <strong>
                      {{ $cliente->mail_local }}
                    </strong></h4>
                  </div>
                  <div class="box-body">                      
                    <h4>Fecha de nacimiento : <strong>
                      {{ $cliente->date_nac }}
                      @if(($final)=='')
                      @else                      
                      ({{ $final }})
                      @endif
                    </strong></h4>
                  </div>
                  <div class="box-body">                      
                    <h4>Profesión : <strong>
                      {{ $cliente->area_local }}
                    </strong></h4>
                  </div>
                  <div class="box-body">                      
                    <h4>Descripción : <strong>
                      {{ $cliente->description }}
                    </strong></h4>
                  </div>
                  <div class="box-body">                      
                    <h4>Web : <strong>
                      {{ $cliente->link_web }}({{ $cliente->web }})
                    </strong></h4>
                  </div>
                  <div class="box-body">                      
                    <h4>Visible web : <strong>
                      @if(($cliente->web_visible)=='1')
                      Visible
                      @else
                      Oculto
                      @endif
                    </strong></h4>
                  </div>
                  <div class="box-body">                      
                    <h4>Estado : <strong>
                      @if(($cliente->status)=='1')
                      Activado
                      @else
                      Desactivado
                      @endif
                    </strong></h4>
                  </div>
                  <div class="box-body">                      
                    <h4>Logo : <strong>
                      <img src="{{ asset($cliente->logo.'') }}" width="320" alt="image02">     
                    </strong></h4>
                  </div>
                  <div class="box-body">                      
                    <h4>Tarjeta : <strong>
                      <img src="{{ asset($cliente->tarjeta.'') }}" width="320" alt="image02">     
                    </strong></h4>
                  </div>
                  <div class="box-footer">
                    <div class="col-sm-offset-2 col-sm-10">
                      <a href="{{ Route('clients.index') }}" type="button" class="btn btn-default pull-right">Cancelar</a>
                      <a href="{{ Route('clients.edit', $cliente->id) }}" type="button" class="btn btn-primary pull-right">Editar</a>
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
