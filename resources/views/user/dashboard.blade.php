<html>
<head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
</head>
<body>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Welcome to {{ $user->name }}</h2>
            <hr>
            <p><a href="{{ url('user/logout') }}">Logout Here</a></p> 
          </div>  
    </div>
</div>
@include('layouts.footer')
