
<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
         <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
        <!-- <link rel="stylesheet" href="{{ asset('css/master.css') }}"> -->

        <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va68vbdEjh4u" crossorigin="anonymous"> -->
        <!-- sweetalert-->
        <!-- <link rel="stylesheet" type="text/css" href="{{asset('sweetalert/sweetalert.css')}}"> -->
        <!-- datatables cdn-->
        <!-- <link href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet"> -->


        <!--start of scripts-->
        <!--jquery-->
        <!-- <script src="https://code.jquery.com/jquery-1.12.4.js" type="text/javascript"></script> -->
        <!-- datatables cdn-->
        <!-- <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js" type="text/javascript"></script> -->
        <!--bootstrap cdn-->

        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->

       <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/iCheck/flat/blue.css') }}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{ asset('plugins/morris/morris.css') }}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{ asset('plugins/datepicker/datepicker3.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker-bs3.css') }}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
  <!-- Google Font: Source Sans Pro -->

  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{ asset('plugins/iCheck/all.css') }}">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{ asset('plugins/colorpicker/bootstrap-colorpicker.min.css') }}">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="{{ asset('plugins/timepicker/bootstrap-timepicker.min.css') }}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('plugins/select2/select2.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">

  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('plugins/datatables/dataTables.bootstrap4.min.css') }}">

    

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">



  </head>
    <body>
      <nav class="navbar navbar-default navbar-fixed-top" align="text-center">
        <ul class="nav navbar-nav" align="center">
            
        </ul>
        
      </nav>
      <br><br><br><br>

      <div class="container">

        <form class="form" id="form" role="form" method="POST">
          {{ csrf_field() }}
            <div class="form-group row">
              <div class="col-md-3">

              </div>

              <div class="col-md-6">
                <h2 align="center"> Insert User information</h2>
                <br>
                <input type="text" class="form-control" id="name" name="name"
                  placeholder="Enter some name"><br>

                  <input type="email" class="form-control" id="email" name="email" 
                  placeholder="Enter Email" >
                  <span id="error_email"> </span><br>
                  

                  <input type="text" class="form-control" id="phone" name="phone"
                  placeholder="Enter Phone" ><br>
                <!-- <p class="error text-center alert alert-danger hidden"></p> -->
                <button class="btn btn-success btn-block" type="submit" id="add">
                  <span class="glyphicon glyphicon-plus"></span> Save
                </button>
              </div>
              
            
            </div>
        </form>
        <section class="content">
            <div class="container-fluid">
              <div class="row">  
         
                  <div class="col-md-12"">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">info</h3>
                      </div>
                      <div class="card-body">
                        <div class="table-responsive" >
                          
                          <table id="table" class="table table-hover table-striped text-center">
                            <thead>
                              <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Phone</th>
                                <th class="text-center">Action</th>

                              </tr>
                            </thead>
                            <tbody>
                              @foreach($data as $item)

                              <tr class="item{{$item->id}}">
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->phone}}</td>
                                <td><button class="edit-modal btn btn-warning" data-id="{{$item->id}}"
                                    data-name="{{$item->name}}" data-email="{{$item->email}}" data-phone="{{$item->phone}}">
                                    Edit
                                  </button>
                                  <button class="delete-modal btn btn-danger"
                                    data-id="{{$item->id}}" data-name="{{$item->name}}" data-email="{{$item->email}}" data-phone="{{$item->phone}}">
                                    </span> Delete
                                  </button></td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
          
                  </div>
              </div>
            </div>
        </section>
    
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <!-- <h4 class="modal-title"></h4> -->
          </div>
          <div class="modal-body">
            <form class="form-horizontal" role="form">
              {{ csrf_field() }}
              <div class="form-group">
                <label class="control-label col-sm-2" for="id">ID:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="fid" disabled>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="n">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="e" required=""><span id="error_e"> </span>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="name">Phone:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="p">
                </div>
              </div>
            </form>
            <div class="deleteContent">
              Are you Sure you want to delete <span class="dname"></span>?
              <span class="hidden did"></span>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn actionBtn" data-dismiss="modal">
                <span id="footer_action_button" class='glyphicon'> </span>
              </button>
              <button type="button" class="btn btn-warning" data-dismiss="modal">
                <span class='glyphicon glyphicon-remove'></span> Close
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
      <script src="{{ asset('js/app.js') }}"></script>
      <script src="{{ asset('js/script.js') }}"></script>
          <!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{ asset('plugins/morris/morris.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparkline/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/knob/jquery.knob.js') }}"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ asset('plugins/datepicker/bootstrap-datepicker.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ asset('plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('plugins/fastclick/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>

<script src="{{ asset('dist/js/pages/dashboard2.js') }}"></script>
<!-- iCheck 1.0.1 -->
<script src="{{ asset('plugins/iCheck/icheck.min.js') }}"></script>
<!-- bootstrap color picker -->
<script src="{{ asset('plugins/colorpicker/bootstrap-colorpicker.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('plugins/select2/select2.full.min.js') }}"></script>
<!-- InputMask -->
<script src="{{ asset('plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset('plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{ asset('plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>

<!-- DataTables -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>

<script>
  $(function () {
    $("#table").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });


$(document).ready(function(){

 $('#email').blur(function(){
  var error_email = '';
  var email = $('#email').val();
  var _token = $('input[name="_token"]').val();
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(!filter.test(email))
  {    
   $('#error_email').html('<label class="text-danger">Invalid Email</label>');
   $('#email').addClass('has-error');
   $('#add').attr('disabled', 'disabled');
  }
  else
  {
   $.ajax({
    url:"{{ route('email_available.check') }}",
    method:"POST",
    data:{email:email, _token:_token},
    success:function(result)
    {
     if(result == 'unique')
     {
      $('#error_email').html('<label class="text-success">Email Available</label>');
      $('#email').removeClass('has-error');
      $('#add').attr('disabled', false);
     }
     else
     {
      $('#error_email').html('<label class="text-danger">Email not Available</label>');
      $('#email').addClass('has-error');
      $('#add').attr('disabled', 'disabled');
     }
    }
   })
  }
 });
 



 $('#e').blur(function(){
  var error_e = '';
  var e = $('#e').val();
  var _token = $('input[name="_token"]').val();
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(!filter.test(e))
  {    
   $('#error_e').html('<label class="text-danger">Invalid Email</label>');
   $('#e').addClass('has-error');
   $('.actionBtn').attr('disabled', 'disabled');
  }
  else
  {
   $.ajax({
    url:"{{ route('email_available.modal_check') }}",
    method:"POST",
    data:{e:e, _token:_token},
    success:function(result)
    {
     if(result == 'unique')
     {
      $('#error_e').html('<label class="text-success">Email Available</label>');
      $('#e').removeClass('has-error');
      $('.actionBtn').attr('disabled', false);
     }
     else
     {
      $('#error_e').html('<label class="text-danger">Email not Available</label>');
      $('#e').addClass('has-error');
      $('.actionBtn').attr('disabled', 'disabled');
     }
    }
   })
  }
 });
 
});






</script>
  </body>
</html>
