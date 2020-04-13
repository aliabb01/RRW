@extends('layouts.app')

@section('content')
<div class="container">
    <style>
        body {
            background-color: rgb(239, 240, 241);
            background-image: url("logo/background2.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }

        .bg-log {
            background: rgb(255, 255, 255, 0.92);
        }


        .card-transparent {
            margin-top: 15%;
            padding-bottom: 20%;
        }

        .btn-social {
            margin:auto;
            margin-top:1%;
            width: 45%;
        }

        .log-git {}



        .ico-git {}

        .btn-google {
            background-color: whitesmoke;
        }

        .btn-google:hover {
            background-color: #fefefc;
        }

        .fa-google {
            background: conic-gradient(from -45deg, #ea4335 110deg, #4285f4 90deg 180deg, #34a853 180deg 270deg, #fbbc05 270deg) 73% 55%/150% 150% no-repeat;
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            -webkit-text-fill-color: transparent;
        }
    </style>
    <div class="row justify-content-center log-cont">
        <div class="col-md-8">
            <div class="card-transparent border-primary mb-1 animated zoomIn">
                <div class="card-header text-light text-center bg-dark lead ">{{ __('LOGIN') }}</div>
                <div class="card-body bg-log text-dark">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}
                                :</label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="Enter your email address"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}
                                :</label>

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="Enter your password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

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
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

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
                                <span class="col-md-2"> or</span>
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
                    
                    <a href="{{ url('auth/google') }}" class="btn btn-social btn-google btn-lg log-face text-primary"><span
                        class="fab fa-google "></span>
                    <!--<i class="fab fa-github ico-git" style="font-size:36px"></i> --> google</a>
                    <a href="{{ url('auth/facebook') }}" class="btn btn-social btn-facebook btn-lg log-face"><span
                            class="fab fa-facebook"></span>
                        <!--<i class="fab fa-github ico-git" style="font-size:36px"></i> --> Facebook</a>
                        
                        <a href="{{ url('auth/twitter') }}" class="btn btn-social btn-twitter btn-lg log-twit"><span
                            class="fab fa-twitter"></span>
                        <!--<i class="fab fa-github ico-git" style="font-size:36px"></i> --> Twitter</a>

                    <a href="{{ url('/auth/github') }}" class="btn btn-social btn-github btn-lg log-git"><span
                            class="fab fa-github"></span>
                        <!--<i class="fab fa-github ico-git" style="font-size:36px"></i> --> Github</a>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection