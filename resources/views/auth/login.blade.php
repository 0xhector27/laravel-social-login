@extends('layouts.app')

@section('content')
<body class="login">
    <div class="logo">
        <img src="{{ asset('img/logo.png')}}" style="width: 150px; height:150px" alt="logo" /><br>
        <h1 class="bold">GLOBIZE</h1>
    </div> 
    <div class="content">
        <h2 class="bold text-center">Sign In</h2><br>
        <h2 class="bold text-left">With</h2>
        <div class="row social-login">
            <div class="col-md-4 text-center">
                <a href="{{ url('login/facebook') }}" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-blue bg-hover-grey-salsa font-white bg-hover-white socicon-facebook tooltips" data-original-title="Facebook"></a>
            </div>
            <div class="col-md-4 text-center">
                <a href="{{ url('login/linkedin') }}" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-green bg-hover-grey-salsa font-white bg-hover-white socicon-linkedin tooltips" data-original-title="Linkedin"></a>
            </div>
            <div class="col-md-4 text-center">
                <a href="{{ url('login/google') }}" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-red bg-hover-grey-salsa font-white bg-hover-white socicon-google tooltips" data-original-title="Google"></a>
            </div>
        </div>
        <form class="login-form" action="{{ route('login') }}" method="post">
            @csrf
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            @if ($message = Session::get('warning'))
                <div class="alert alert-warning">
                    <p>{{ $message }}</p>
                </div>
            @endif
            @if ($errors->has('email'))
                <div class="alert alert-danger">
                    {{ $errors->first('email') }}
                </div>
            @endif
            <div class="form-group form-md-line-input form-md-floating-label has-info">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}">
                <label for="email">Email</label>
            </div>
            @if ($errors->has('password'))
                <div class="alert alert-danger">
                    {{ $errors->first('password') }}
                </div>
            @endif
            <div class="form-group form-md-line-input form-md-floating-label has-info">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}">
                <label for="password">Password</label>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn green btn-block">Login</button>
            </div>
            <div class="form-actions">
                <div class="pull-left">
                    <label class="rememberme mt-checkbox mt-checkbox-outline">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} /> Remember me
                        <span></span>
                    </label>
                </div>
                <div class="pull-right forget-password-block">
                    <a href="{{ route('password.request') }}" id="forget-password" class="forget-password">Forgot Password?</a>
                </div>
            </div>
        </form>
        <div class="text-center register-link"><h4>Don't have an account? <a href="{{ route('register') }}" class="text-success"><strong>Register Now!</strong></a></h4></div>
    </div>
@endsection
