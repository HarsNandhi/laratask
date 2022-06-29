<!doctype html>
<!-- 
* Bootstrap Simple Admin Template
* Version: 2.1
* Author: Alexis Luna
* Website: https://github.com/alexis-luna/bootstrap-simple-admin-template
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard | Coaching</title>
    <link href="{{ url('admin/vendor/fontawesome/css/fontawesome.min.css') }}" rel="stylesheet">
    <link href="{{ url('admin/vendor/fontawesome/css/solid.min.css') }}" rel="stylesheet">
    <link href="{{ url('admin/vendor/fontawesome/css/brands.min.css') }}" rel="stylesheet">
    <link href="{{ url('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('admin/css/master.css?1') }}" rel="stylesheet">
    <link href="{{ url('admin/css/flag-icon.min.css') }}" rel="stylesheet">
    <link href="{{ url('admin/css/fontawesome.min.css') }}" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
</head>

<body>
   
            @yield('content')
       

    <script src="{{ url('admin/script/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{ url('admin/script/bootstrap.bundle.min.js') }}"></script>
   
    <script src="{{ url('admin/script/script.js') }}"></script>
    <script src="{{ url('admin/script/datatables.min.js') }}"></script>
    <script src="{{ url('admin/script/initiate-datatables.js') }}"></script>
@yield('script')
<script type="text/javascript">
      @if(Session::has('success'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true
  }
        toastr.success("{{ session('success') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true
  }
        toastr.error("{{ session('error') }}");
  @endif
</script>
</body>
</html>