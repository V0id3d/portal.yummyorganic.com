@extends('layouts.auth')

@section('content')
    <h4>Login</h4>
    <p><small>Sign into your account</small></p>
    <br>

    <form class="form-type-material" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" value="{{ old('email') }}" autofocus>
            <label for="email">
                Email
            </label>
            @if ($errors->has('email'))
                <div class="invalid-feedback">{{ $errors->first('email') }}</div>
            @endif
        </div>

        <div class="form-group">
            <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password" value="{{ old('password') }}">
            <label for="password">
                Password
            </label>
            @if ($errors->has('password'))
                <div class="invalid-feedback">{{ $errors->first('password') }}</div>
            @endif

        </div>

        <div class="form-group flexbox">
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Remember me</span>
            </label>

            <a class="text-muted hover-primary fs-13" href="{{ route('password.request') }}">Forgot password?</a>
        </div>

        <div class="form-group">
            <button class="btn btn-bold btn-block btn-primary" type="submit">Login</button>
        </div>
    </form>

    <hr class="w-30px">

    <p class="text-center text-muted fs-13 mt-20">Don't have an account? <a class="text-primary fw-500" href="{{ route('register') }}">Sign up</a></p>
@endsection
