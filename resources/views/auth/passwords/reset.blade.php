@extends('layouts.app')

@section('content')
<body class="reset_password">
    <div class="content">
        <h2 class="bold text-center">Reset your password</h2><br>
        <form class="login-form" action="{{ route('password.request') }}" method="post">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            @if ($errors->has('email'))
                <div class="alert alert-danger">
                    {{ $errors->first('email') }}
                </div>
            @endif
            <div class="form-group form-md-line-input form-md-floating-label has-info">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email or old('email') }}">
                <label for="email">Email</label>
            </div>
            @if ($errors->has('password'))
                <div class="alert alert-danger">
                    {{ $errors->first('password') }}
                </div>
            @endif
            <div class="form-group form-md-line-input form-md-floating-label has-info">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">
                <label for="password">Password</label>
            </div>
            <div class="form-group form-md-line-input form-md-floating-label has-info">
                <input id="password-confirm" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password_confirmation">
                <label for="password-confirm">Password Confirm</label>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-primary btn-lg mt-ladda-btn ladda-button btn-circle btn-block">Reset Password</button>
            </div>
        </form>
        <div class="text-center register-link"><h4>Back to <a href="{{ route('login') }}" class="text-success"><strong>Login!</strong></a></h4></div>
    </div>
@endsection
