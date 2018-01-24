@extends('layouts.admin')

@section('main-content')
    <header class="header no-border" xmlns="http://www.w3.org/1999/html">
        <div class="header-info">
            <div class="left">
                <h2 class="header-title"><strong>Task Center</strong> Status Messages</h2>
            </div>
        </div>
    </header>

    <div class="main-content">
        <div class="row">

            <div class="col-12">
                <div class="card card-shadowed form-type-material">
                    <header class="card-header">
                        <h4 class="card-title"><strong>Create</strong> Status Message</h4>
                    </header>

                    <div class="card-body">
                        <form action="{{ route('TaskCenter.Status.Store') }}" method="POST" id="status">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                                        <label>Status Message</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="color-selector center-h">
                                        <label>
                                            <input type="radio" name="color" value="primary" checked="yes">
                                            <span class="bg-primary"></span>
                                        </label>

                                        <label>
                                            <input type="radio" name="color" value="success">
                                            <span class="bg-success"></span>
                                        </label>

                                        <label>
                                            <input type="radio" name="color" value="info">
                                            <span class="bg-info"></span>
                                        </label>

                                        <label>
                                            <input type="radio" name="color" value="warning">
                                            <span class="bg-warning"></span>
                                        </label>

                                        <label>
                                            <input type="radio" name="color" value="danger">
                                            <span class="bg-danger"></span>
                                        </label>
                                        <label>
                                            <input type="radio" name="color" value="purple">
                                            <span class="bg-purple"></span>
                                        </label>

                                        <label>
                                            <input type="radio" name="color" value="pink">
                                            <span class="bg-pink"></span>
                                        </label>

                                        <label>
                                            <input type="radio" name="color" value="cyan">
                                            <span class="bg-cyan"></span>
                                        </label>

                                        <label>
                                            <input type="radio" name="color" value="yellow">
                                            <span class="bg-yellow"></span>
                                        </label>

                                        <label>
                                            <input type="radio" name="color" value="dark">
                                            <span class="bg-dark"></span>
                                        </label>

                                    </div>
                                </div>
                            </div>

                        </form>


                    </div>
                    <footer class="card-footer text-right p-0">
                        <div class="btn-group">
                            <button class="btn btn-square btn-primary no-radius" type="submit" form="status"><i class="fa fa-save"></i></button>
                        </div>
                    </footer>
                </div>
            </div>




        </div>
    </div>
@endsection