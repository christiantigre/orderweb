@extends('adminlte::layouts.app')


@section('htmlheader_title')
{{ trans('adminlte_lang::message.$perfil') }}
@endsection

@section('main-content')
<!--<div class="container-fluid spark-screen">-->
  <!--<div class="row">-->
    <!--<div class="col-md-10 col-md-offset-2">-->
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
            <h3 class="box-title">Galeria</h3>
              <p id="mensaje">

              </p>
              <div class="row">
                <div class="col-xs-12">
                  <div class="box">
                    <div class="box-header">
                      @include('adminlte::errors.errors')
                      @include('adminlte::errors.info')
                      
                      <h3 class="box-title">
                        <h3 class="box-title">
                          <a href="{{ Route('galleries.create') }}" type="button" class="btn btn-block btn-success btn-xs">Nuevo</a>            

                          <br>
                        </h3>
                        <br>
                      </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <div class="row">
                        <div class="col-xs-12">
                        </div>
                        <div class="col-xs-12">
                          <div id="list-gallery">
                          </div>
                        </div>
                      </div>
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
        <!--</div>-->
      <!--</div>-->
    <!--</div>-->
    <script>
      $(document).ready(function(){
        listgallery();
      });      

      var listgallery = function()
      {
        $.ajax({
          type:'get',
          url:'{{ url("admin/listgallery") }}',
          success: function(data){
            $('#list-gallery').empty().html(data);
          }
        });
      }
      
    </script>

    @endsection
