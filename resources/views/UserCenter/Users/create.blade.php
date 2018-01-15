@extends('layouts.admin')

@section('main-content')
<header class="header no-border" xmlns="http://www.w3.org/1999/html">
    <div class="header-info">
        <div class="left">
            <h2 class="header-title"><strong>Access Center</strong> Add User</h2>
        </div>
    </div>
</header>


<div class="main-content">
    <div class="row">

        <div class="col-12">
            <div class="card card-shadowed form-type-material">
                <header class="card-header">
                    <h4 class="card-title"><strong>Create</strong> User</h4>
                </header>

                <div class="card-body">
                    <form action="{{ route('UserCenter.Users.Store') }}" method="POST">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" name="name" value="{{ old('name') }}">
                                    <label>Name</label>
                                    @if ($errors->has('name'))
                                        <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group do-float">
                                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" value="{{ old('email') }}">
                                    <label>Email Address</label>
                                    @if ($errors->has('email'))
                                        <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password" value="{{ old('password') }}">
                                    <label>Password</label>
                                    @if ($errors->has('password'))
                                        <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}">
                                    <label>Confirm</label>
                                    @if ($errors->has('password_confirmation'))
                                        <div class="invalid-feedback">{{ $errors->first('password_confirmation') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary right">
                                </div>

                            </div>
                        </div>

                    </form>


                </div>
            </div>
        </div>




    </div>
</div>
@endsection