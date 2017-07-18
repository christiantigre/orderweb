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
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> -->
<!-- jQuery 2.2.3 
  <script src="{{ url ('/plugins/jquery-2.2.3.min.js') }}"></script>-->
  <!-- Select2 -->
  <script src="{{ url ('/plugins/select2.full.min.js') }}"></script>
  <!-- InputMask -->
  <script src="{{ url ('/plugins/jquery.inputmask.js') }}"></script>
  <script src="{{ url ('/plugins/jquery.inputmask.date.extensions.js') }}"></script>
  <script src="{{ url ('/plugins/jquery.inputmask.extensions.js') }}"></script>
  <!-- date-range-picker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
  <script src="{{ url ('/plugins/daterangepicker.js') }}"></script>
  <!-- bootstrap datepicker -->
  <script src="{{ url ('/plugins/bootstrap-datepicker.js') }}"></script>
  <!-- bootstrap color picker -->
  <script src="{{ url ('/plugins/bootstrap-colorpicker.min.js') }}"></script>
  <!-- bootstrap time picker -->
  <script src="{{ url ('/plugins/bootstrap-timepicker.min.js') }}"></script>
  <!-- SlimScroll 1.3.0 -->
  <script src="{{ url ('/plugins/jquery.slimscroll.min.js') }}"></script>
  <!-- iCheck 1.0.1 -->
  <script src="{{ url ('/plugins/icheck.min.js') }}"></script>
  <!-- FastClick -->
  <script src="{{ url ('/plugins/fastclick.js') }}"></script>
  <!-- Page script -->
  <script src="http://eternicode.github.io/bootstrap-datepicker/bootstrap-datepicker/js/locales/bootstrap-datepicker.es.js"></script>  


  <script>
    $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
    {
      ranges: {
        'Today': [moment(), moment()],
        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month': [moment().startOf('month'), moment().endOf('month')],
        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      },
      startDate: moment().subtract(29, 'days'),
      endDate: moment()
    },
    function (start, end) {
      $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }
    );

    //Date picker
  $('#datepicker').datepicker({
    autoclose: true,
    language: 'es',
    dateFormat: 'dd-mm-yyyy',
    format: 'dd-mm-yyyy'
  });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>

