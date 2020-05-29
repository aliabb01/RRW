@extends('layouts.app')

@section('content')
<div class="container">
    <style>
        body {
            background-color:var(--body-background);
        }

        .card-header{
            font-style: bold;
        }

        .card-body{
            background-color:white;
        }

        .card-transparent {
            margin-top: 15%;
            padding-bottom:20%; 
        }       
    </style>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-transparent animated zoomIn">
                <div class="card-header text-center text-light bg-dark lead">{{ __('msg.register') }}</div>
                <div class="card-body text-dark bg-reg">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('msg.username') }}  :</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('msg.email') }}  :</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('msg.password') }}  :</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <small id="passwordHelpInline" class="text-muted">
                                    Must be 8-20 characters long.
                                  </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-right">{{ __('msg.confirm-password') }}  :</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('msg.phone') }}  :</label>
                    
                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autofocus>
                    
                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    
                        <div class="form-group row">
                            <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('msg.country') }}  :</label>
                    
                            <div class="col-md-6">
                                <input id="country" type="text" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ old('country') }}" required autofocus>
                    
                                @if ($errors->has('country'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                              <label class="form-check-label" for="invalidCheck">
                                Agree to terms and conditions
                              </label>
                              <div class="invalid-feedback">
                                You must agree before submitting.
                              </div>
                            </div>
                          </div>

                        <div class="form-group row mb-0 reg">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success btn-reg">
                                    {{ __('msg.register') }}
                                </button>
                                <p class="float-right mt-2"> Already have an account?  <a href="{{ url('login')}}" class="text-success"> Login </a> </p>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection