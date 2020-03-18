@extends('layouts.app')

@section('content')
<div class="container">
    <style>
        body {
                background-image: url("logo/background2.jpg");
                background-size: cover;
                background-repeat: no-repeat;                                                                      
            }
            .card-transparent{
                margin-top:15%;
            }
            .bg-primary{
                opacity: .85;
            }
    </style>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-transparent border-primary mb-1">
              <div class="card-header text-light text-center bg-dark lead ">{{ __('LOGIN') }}</div>
                <div class="card-body bg-primary text-light">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}  :</label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="Enter your email address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}  :</label>

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="Enter your password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Login') }}
                                </button>
                                <span class="col-md-2">or</span>
                                <a href="register"><button type="button" class="btn btn-danger">
                                    Sign Up!
                                </button></a>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link display-2 text-danger" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password') }}?
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                    <br>
                    <hr class="bg-dark">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
