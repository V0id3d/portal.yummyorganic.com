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
                        <h4 class="card-title"><strong>Edit</strong> Status Message</h4>
                    </header>

                    <div class="card-body">
                        <form action="{{ route('TaskCenter.Status.Update', $selected_status) }}" method="POST" id="status">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="title" value="{{ old('title', $selected_status->title) }}">
                                        <label>Status Message</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="color-selector center-h">
                                        <label>
                                            <input type="radio" name="color" value="primary" {{ ($selected_status->color == 'primary') ? 'checked' : '' }}>
                                            <span class="bg-primary"></span>
                                        </label>

                                        <label>
                                            <input type="radio" name="color" value="success" {{ ($selected_status->color == 'success') ? 'checked' : '' }}>
                                            <span class="bg-success"></span>
                                        </label>

                                        <label>
                                            <input type="radio" name="color" value="info" {{ ($selected_status->color == 'info') ? 'checked' : '' }}>
                                            <span class="bg-info"></span>
                                        </label>

                                        <label>
                                            <input type="radio" name="color" value="warning" {{ ($selected_status->color == 'warning') ? 'checked' : '' }}>
                                            <span class="bg-warning"></span>
                                        </label>

                                        <label>
                                            <input type="radio" name="color" value="danger" {{ ($selected_status->color == 'danger') ? 'checked' : '' }}>
                                            <span class="bg-danger"></span>
                                        </label>
                                        <label>
                                            <input type="radio" name="color" value="purple" {{ ($selected_status->color == 'purple') ? 'checked' : '' }}>
                                            <span class="bg-purple"></span>
                                        </label>

                                        <label>
                                            <input type="radio" name="color" value="pink" {{ ($selected_status->color == 'pink') ? 'checked' : '' }}>
                                            <span class="bg-pink"></span>
                                        </label>

                                        <label>
                                            <input type="radio" name="color" value="cyan" {{ ($selected_status->color == 'cyan') ? 'checked' : '' }}>
                                            <span class="bg-cyan"></span>
                                        </label>

                                        <label>
                                            <input type="radio" name="color" value="yellow" {{ ($selected_status->color == 'yellow') ? 'checked' : '' }}>
                                            <span class="bg-yellow"></span>
                                        </label>

                                        <label>
                                            <input type="radio" name="color" value="dark" {{ ($selected_status->color == 'dark') ? 'checked' : '' }}>
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