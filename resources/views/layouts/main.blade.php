<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('assets/plugins/io-icons.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('assets/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('assets/css/skins/_all-skins.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('assets/plugins/iCheck/flat/blue.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/sweetAlert/sweetalert.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/editable_bootstrap/css/bootstrap-editable.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
{{--    <link rel="stylesheet" href="{{asset('assets/plugins/morris/morris.css')}}">--}}
<!-- jvectormap -->
    {{--  <link rel="stylesheet" href="{{asset('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
      <!-- Date Picker -->
      <link rel="stylesheet" href="{{asset('assets/plugins/datepicker/datepicker3.css')}}">
      <!-- Daterange picker -->
      <link rel="stylesheet" href="{{asset('assets/plugins/daterangepicker/daterangepicker.css')}}">
      <!-- bootstrap wysihtml5 - text editor -->
      <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">--}}

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    @yield('header')
    <!-- start left sidebar -->
    @yield('sidebar')
    {{--close sidebar--}}
    <div class="content-wrapper">
        @yield('content')
    </div>

    @yield('footer')

</div>
<!-- ./wrapper -->
<!-- jQuery 2.2.3 -->
<script src="{{asset('assets/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('assets/plugins/jQuery/jqueryUi.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
{{--<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>--}}
<!-- Bootstrap 3.3.6 -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/plugins/editable_bootstrap/js/bootstrap-editable.min.js')}}"></script>
<script src="{{asset('assets/plugins/sweetAlert/sweetalert.min.js')}}"></script>
@include('sweet::alert')
{{--<script src="{{asset('assets/plugins/others/moment.min.js')}}"></script>
<script src="{{asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('assets/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script src="{{asset('assets/plugins/knob/jquery.knob.js')}}"></script>
<script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('assets/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('assets/plugins/morris/morris.min.js')}}"></script>--}}
<!-- AdminLTE App -->
<script src="{{asset('assets/js/app.min.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{--<script src="{{asset('assets/js/pages/dashboard.js')}}"></script>--}}
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets/js/demo.js')}}"></script>
</body>
</html>
