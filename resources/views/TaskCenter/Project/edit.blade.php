@extends('layouts.admin')

@section('main-content')
    <header class="header no-border" xmlns="http://www.w3.org/1999/html">
        <div class="header-info">
            <div class="left">
                <h2 class="header-title"><strong>Task Center</strong> Edit Division</h2>
            </div>
        </div>
    </header>


    <div class="main-content">
        <div class="row">

            <div class="col-12">
                <div class="card card-shadowed form-type-material">
                    <header class="card-header">
                        <h4 class="card-title"><strong>Edit</strong> Division</h4>
                    </header>

                    <div class="card-body">
                        <form action="#" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}



                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" id="title" name="title" value="{{ old('name', $selected_division->name) }}">
                                        <label>Division Title</label>
                                        @if ($errors->has('title'))
                                            <div class="invalid-feedback">{{ $errors->first('title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" rows="6" name="description">{{ old('description') }}</textarea>
                                        <label>Notes</label>
                                        @if ($errors->has('description'))
                                            <div class="invalid-feedback">{{ $errors->first('description') }}</div>
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