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
            <!--titulo ventana-->Ver Color
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
                    <h4>Color : <strong>
                      {{ $color->color }}
                    </strong></h4>
                  </div>

                  <div class="box-body"> 
                    <h4>Color : <strong>
                      
                      <DIV STYLE="position:absolute; width:auto; height:auto; background: {{ $color->codigo }} url(sfondo.jpg) repeat-y fixed right bottom">{{ $color->codigo }}
                      </DIV>
                      <!-- /.box -->



                    </strong></h4>
                  </div>
                  <div class="box-body">                      
                    <h4>Estado : <strong>
                      {{ $color->statu ==1 ? "Activado" : "Desactivado" }}
                    </strong></h4>
                  </div>
                  <div class="box-footer">
                    <div class="col-sm-offset-2 col-sm-10">
                      <a href="{{ Route('colores.index') }}" type="button" class="btn btn-default pull-right">Cancelar</a>
                      <a href="{{ Route('colores.edit', $color->id) }}" type="button" class="btn btn-primary pull-right">Editar</a>
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
