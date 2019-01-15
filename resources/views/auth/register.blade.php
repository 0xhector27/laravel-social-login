@extends('layouts.app')

@section('content')
<body class="register">
    <div class="logo">
        <img src="{{ asset('img/logo.png')}}" style="width: 150px; height:150px" alt="logo" /><br>
        <h1 class="bold">GLOBIZE</h1>
    </div> 
    <div class="content">
        <h2 class="bold text-center">Register</h2><br>
        <form class="register-form" action="{{ route('register') }}" method="post">
            @csrf
            @if ($errors->has('name'))
                <div class="alert alert-danger">
                    {{ $errors->first('name') }}
                </div>
            @endif
            <div class="form-group form-md-line-input form-md-floating-label has-info">
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}">
                <label for="name">Name</label>
            </div>
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
            <div class="form-group form-md-line-input form-md-floating-label has-info">
                <input id="password-confirm" type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation">
                <label for="password-confirm">Password Confirm</label>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-primary btn-lg mt-ladda-btn ladda-button btn-circle btn-block">Register</button>
            </div>
        </form>
        <div class="text-center register-link"><h4>Already have an account? <a href="{{ route('login') }}" class="text-success"><strong>Login!</strong></a></h4></div>
    </div>
@endsection
