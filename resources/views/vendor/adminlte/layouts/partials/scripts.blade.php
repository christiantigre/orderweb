<!-- REQUIRED JS SCRIPTS -->
<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
<script src="{{ url (mix('/js/app.js')) }}" type="text/javascript"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
      <!-- DataTables -->
      <script src="{{ url ('plugins/jquery.dataTables.min.js') }}"  type="text/javascript"></script>
      <script src="{{ url ('plugins/dataTables.bootstrap.min.js') }}"  type="text/javascript"></script>
      <script src="{{ url ('/js/script.js') }}"  type="text/javascript"></script>
      
      <!-- bootstrap color picker -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.3.3/css/bootstrap-colorpicker.min.css" rel="stylesheet">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.3.3/js/bootstrap-colorpicker.min.js"></script>
      <!-- page script -->
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
      <script>
  //Colorpicker
  $(".my-colorpicker1").colorpicker();
</script>

