@extends('layouts.app')

@section('content')
<body class="reset_password">
    <div class="content">
        <h2 class="bold text-center">Reset your password</h2><br>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <form class="login-form" action="{{ route('password.email') }}" method="post">
            @csrf
            @if ($errors->has('email'))
                <div class="alert alert-danger">
                    {{ $errors->first('email') }}
                </div>
            @endif
            <div class="form-group form-md-line-input form-md-floating-label has-info">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}">
                <label for="email">Email</label>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-primary btn-block">Reset password</button>
            </div>
        </form>
        <div class="text-center register-link"><h4>Back to <a href="{{ route('login') }}" class="text-success"><strong>Login!</strong></a></h4></div>
    </div>
@endsection
