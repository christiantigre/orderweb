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
              <h3 class="box-title">Listado de Paises</h3>
              <p id="mensaje">

              </p>
              <div class="row">
                <div class="col-xs-12">
                  <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">
                        <br>
                      </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <div class="row">
                        <div class="col-xs-12">
                          @include('adminlte::errors.info')

                          {!! Form::open(['id'=>'form']) !!}
                          <div class="form-group row add">
                            <div class="col-md-4">
                              {{ csrf_field() }}
                              {!! Form::text('pais',null,['id'=>'pais','class'=>'form-control','placeholder'=>'Pais','autofocus'=>'autofocus',
                              'autocomplete'=>'off']) !!}
                              <p class="error text-center alert alert-danger hidden"></p>
                            </div>
                            <div class="col-md-4">
                              {!! Form::text('iso',null,['id'=>'iso','class'=>'form-control','placeholder'=>'Iso','autofocus'=>'autofocus',
                              'autocomplete'=>'off']) !!}
                              <p class="error text-center alert alert-danger hidden"></p>
                            </div>
                            <div class="col-md-4">

                              {!!link_to('#','Grabar', ['id'=>'Grabar','class'=>'btn btn-success'])!!}

                            </div>
                          </div>
                          {!! Form::close() !!}
                        </div>
                        <div class="col-xs-12">


                          <div id="list-country">

                            <!--@include('adminlte::layouts.country.list-country')-->

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
        </div>
      </div>
    </div>
    <script>
      $(document).ready(function(){
        listcountry();
      });
      $(document).ready(function() {
        $("#Grabar").click(function(event)
        {
          var pais = $("#pais").val();
          var iso = $("#iso").val();
          var token = $("input[name=_token]").val();
          var route = '{{ url("admin/addcountry") }}';
          var parametros = {
            "country" :pais,
            "iso" :iso
          }
          var dataSting = "country="+pais+"iso="+iso;
          $.ajax({
            url:route,
            headers:{'X-CSRF-TOKEN':token},
            type:'post',
            datatype: 'json',
            data:parametros,
            success:function(data)
            {
              console.log(data);
              $("#pais").val("");
              $("#iso").val("");
              if (data.success=='true') {
                listcountry();
                mensaje("Guardado exitosamente","success");
                console.log('Guardado');
              }
            },
            error:function(data)
            {
              mensaje("Error!!! al guardar peticion","warning");
              console.log('Error al guardar');
            }  
          })

        });

      });  

      function mensaje(mensaje, tipo){
        var historial = $('#mensaje').html();
        $('#mensaje').html(historial + "<p><div class='alert alert-"+tipo+" alert-block'><button type='button' class='close' data-dismiss='alert'>×</button><strong>"+mensaje+"</strong></div></p>");
        $('#mensaje').fadeDelay(4000);
        console.clear();
      }

      var listcountry = function()
      {
        $.ajax({
          type:'get',
          url:'{{ url("admin/listcountry") }}',
          success: function(data){
            $('#list-country').empty().html(data);
          }
        });
      }

      $(document).ready(function(){

        $.fn.fadeDelay = function(delay) {

          var that = $(this);
          delay = delay || 3000;

          return that.each(function() {

            $(that).queue(function() {

              setTimeout(function() {

                $(that).dequeue();

              }, delay);
            });

            $(that).fadeOut('slow');
          });
        };

      });


      
    </script>

    @endsection
