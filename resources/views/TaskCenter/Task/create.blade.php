@extends('layouts.admin')

@section('main-content')
    <header class="header no-border" xmlns="http://www.w3.org/1999/html">
        <div class="header-info">
            <div class="left">
                <h2 class="header-title"><strong>Task Center</strong> Add Task</h2>
            </div>
        </div>
    </header>


    <div class="main-content">
        <div class="row">

            <div class="col-12">
                <div class="card card-shadowed form-type-material">
                    <header class="card-header">
                        <h4 class="card-title"><strong>Create</strong> Task</h4>
                    </header>

                    <div class="card-body">
                        <form action="{{ route('TaskCenter.Task.Store', [$selected_division, $selected_project]) }}" method="POST">
                            {{ csrf_field() }}



                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" id="title" name="title" value="{{ old('title') }}">
                                        <label>Task Title</label>
                                        @if ($errors->has('title'))
                                            <div class="invalid-feedback">{{ $errors->first('title') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group">
                                        <input type="text" data-provide="datepicker" class="form-control{{ $errors->has('project_due') ? ' is-invalid' : '' }}" id="project_due" name="project_due" value="{{ old('project_due') }}">
                                        <label>Due Date</label>
                                        @if ($errors->has('project_due'))
                                            <div class="invalid-feedback">{{ $errors->first('project_due') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group">
                                        <select class="form-control" data-provide="selectpicker" tabindex="-98" data-live-search="true" name="user_id">
                                            @if(!is_null($userList))
                                                <option selected style="display: none;" value=""></option>
                                                @foreach ($userList as $user)
                                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        @if ($errors->has('user'))
                                            <div class="invalid-feedback">{{ $errors->first('user') }}</div>
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