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
            <!--titulo ventana-->Ver Slider
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
                    <h4>Titulo : <strong>
                      {{ $slider->tittle }}
                    </strong></h4>
                  </div>
                  <div class="box-body">                      
                    <h4>Sub - Titulo : <strong>
                      {{ $slider->subtittle }}
                    </strong></h4>
                  </div>
                  <div class="box-body">                      
                    <h4>Descripcion : <strong>
                      {{ $slider->paragraph }}
                    </strong></h4>
                  </div>
                  
                  <div class="box-body">                      
                    <h4>Imagen : <strong>
                      <img src="{{ asset($slider->img.'') }}" width="320" alt="image02">     
                    </strong></h4>
                  </div>

                  <div class="box-body">                      
                    <h4>Link : <strong>
                      {{ $slider->link }}
                    </strong></h4>
                  </div>

                  <div class="box-body">                      
                    <h4>Descripcion : <strong>
                      {{ $slider->tittle_link }}
                    </strong></h4>
                  </div>
                  <div class="box-footer">
                    <div class="col-sm-offset-2 col-sm-10">
                      <a href="{{ Route('slider.index') }}" type="button" class="btn btn-default pull-right">Cancelar</a>
                      <a href="{{ Route('slider.edit', $slider->id) }}" type="button" class="btn btn-primary pull-right">Editar</a>
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
