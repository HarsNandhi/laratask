@include('layouts.app')

    <div class="wrapper">
        <div class="auth-content">
            <div class="card">
                <div class="card-body text-center">
                    
                    <h6 class="mb-4 text-muted">Login</h6>
                    <form action="{{ route('login') }}" method="post">

                        {{ csrf_field() }}
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
                   
                         <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                    </form>
                 <p class="mb-0 text-muted">Don't have account yet? <a href="{{ url('user/register') }}">Register</a></p>
                </div>
            </div>
        </div>
    </div>

@include('layouts.footer')



