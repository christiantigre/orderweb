@extends('adminlte::layouts.app')


@section('htmlheader_title')
{{ trans('adminlte_lang::message.$perfil') }}
@endsection

@section('main-content')
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
        <h3 class="box-title">Listado de Clientes</h3>
        <p id="mensaje">

        </p>
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                @include('adminlte::errors.errors')
                @include('adminlte::errors.info')
                
                
                
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="row">
                  <div class="col-xs-12">
                  </div>
                  <div class="col-xs-12">
                    <div id="list-client">
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
    
    <script>
      $(document).ready(function(){
        listclient();
      });      

      var listclient = function()
      {
        $.ajax({
          type:'get',
          url:'{{ url("admin/listclient") }}',
          success: function(data){
            $('#list-client').empty().html(data);
          }
        });
      }
      
    </script>

    @endsection
