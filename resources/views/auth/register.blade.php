@include('layouts.app')

    <div class="wrapper">
        <div class="auth-content">
            <div class="card">
                <div class="card-body text-center">
                    
                    <h6 class="mb-4 text-muted">{{ __('Register') }}</h6>
                    <form action="{{ route('register') }}" method="post">

                        {{ csrf_field() }}

                       <div class="mb-3 text-start">
                            <label for="name" class="form-label">{{ __('Name') }}</label>

                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="mb-3 text-start">
                            <label for="email" class="form-label">Email adress</label>
                             <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3 text-start">
                            <label for="password" class="form-label">Password</label>
                             <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>


                          <div class="mb-3 text-start">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                   
                         <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                    </form>
                    <!-- <p class="mb-2 text-muted">Forgot password? <a href="forgot-password.html">Reset</a></p> -->
                    <p class="mb-0 text-muted">Already have an account? <a href="{{ url('user/login') }}">Login</a></p>
                </div>
            </div>
        </div>
    </div>

@include('layouts.footer')



