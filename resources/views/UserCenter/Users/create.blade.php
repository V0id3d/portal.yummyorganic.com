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
                    <form action="#" method="POST">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name">
                                    <label>Full Name</label>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email">
                                    <label>Email Address</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-6">
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password">
                                    <label>Password</label>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password_confirmation">
                                    <label>Confirm</label>
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