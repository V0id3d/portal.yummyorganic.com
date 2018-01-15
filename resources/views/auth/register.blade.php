@extends('layouts.auth')

@section('content')
    <h4>Register an account</h4>
    <p><small>All fields are required.</small></p>
    <br>

    <form class="form-type-material" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required autofocus>
            <label for="email">
                Full Name
                @if ($errors->has('name'))
                    <span class="help-block has-error text-danger">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </label>
        </div>

        <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
            <label for="email">
                Email address
                @if ($errors->has('email'))
                    <span class="help-block has-error text-danger">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </label>
        </div>

        <div class="form-group">
            <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}" required>
            <label for="password">
                Password
                @if ($errors->has('password'))
                    <span class="help-block has-error text-danger">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </label>
        </div>

        <div class="form-group">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            <label for="password-confirm">
                Password (confirm)
                @if ($errors->has('password_confirmation'))
                    <span class="help-block has-error text-danger">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </label>
        </div>

        <div class="form-group">
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">I agree to all <a class="text-primary" href="#">terms</a></span>
            </label>
        </div>

        <br>
        <button class="btn btn-bold btn-block btn-primary" type="submit">Register</button>
    </form>

    <hr class="w-30px">

    <p class="text-center text-muted fs-13 mt-20">Already have an account? <a class="text-primary fw-500" href="{{ route('login') }}">Sign in</a></p>
@endsection
