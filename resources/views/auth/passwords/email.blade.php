@extends('layouts.auth')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form class="form-type-material" method="POST" action="{{ route('password.email') }}">
        {{ csrf_field() }}

        <div class="form-group">
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
            <label for="email">
                E-Mail Address
                @if ($errors->has('email'))
                    <span class="help-block has-error text-danger">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </label>
        </div>

        <button class="btn btn-bold btn-block btn-primary" type="submit">Send Password Reset Link</button>

    </form>
@endsection
