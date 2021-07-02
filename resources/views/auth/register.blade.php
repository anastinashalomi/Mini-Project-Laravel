@extends('layouts.app')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link rel="stylesheet" href="/css/login.css">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card1">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label label control-label">{{ __('Name') }}</label>

                            <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user mx-2 "></i></span>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label label control-label">{{ __('E-Mail Address') }}</label>

                            <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope mx-2"></i></span>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="sid" class="col-md-4 col-form-label label control-label">{{ __('Student of Staff ID') }}</label>

                            <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-id-card mx-2" aria-hidden="true"></i></i></span>
                                <input id="sid" type="sid" class="form-control @error('sid') is-invalid @enderror" name="sid" value="{{ old('sid') }}" required autocomplete="sid">

                                @error('sid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label label control-label">{{ __('Password') }}</label>

                            <div class="input-group">
                            <span class="input-group-addon"><i class="fas fa-key mx-2 "></i></span>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label label control-label">{{ __('Confirm Password') }}</label>

                            <div class="input-group">
                            <span class="input-group-addon"> <i class="fa fa-check mx-2" aria-hidden="true"></i></span>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
