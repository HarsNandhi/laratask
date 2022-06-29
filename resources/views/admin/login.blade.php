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
    <title>Dashboard | Bootstrap Simple Admin Template</title>
   
    <link href="{{ url('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('admin/css/auth.css') }}" rel="stylesheet">
    
</head>

<body>

    <div class="wrapper">
        <div class="auth-content">
            <div class="card">
                <div class="card-body text-center">
                    
                    <h6 class="mb-4 text-muted">Login to your account</h6>
                    <form action="{{ route('admin.login') }}" method="post">

                        {{ csrf_field() }}
                        <div class="mb-3 text-start">
                            <label for="email" class="form-label">Email adress</label>
                             <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="mb-3 text-start">
                            <label for="password" class="form-label">Password</label>
                             <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="mb-3 text-start">
                            <div class="form-check">
                              <input class="form-check-input" name="remember" type="checkbox" value="" id="check1">
                              <label class="form-check-label" for="check1">
                                Remember me on this device
                              </label>
                            </div>
                        </div>
                         <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                    </form>
                 <!--    <p class="mb-2 text-muted">Forgot password? <a href="forgot-password.html">Reset</a></p>
                    <p class="mb-0 text-muted">Don't have account yet? <a href="signup.html">Signup</a></p> -->
                </div>
            </div>
        </div>
    </div>





</body>
</html>