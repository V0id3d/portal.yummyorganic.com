@extends('layouts.admin')

@section('main-content')
    <header class="header no-border" xmlns="http://www.w3.org/1999/html">
        <div class="header-info">
            <div class="left">
                <h2 class="header-title"><strong>Task Center</strong> Edit Task</h2>
            </div>
        </div>
    </header>


    <div class="main-content">
        <div class="row">

            <div class="col-12">
                <div class="card card-shadowed form-type-material">
                    <header class="card-header">
                        <h4 class="card-title"><strong>Edit</strong> Task <span class="badge badge-{{ (is_null($selected_task->status) ? 'default' : $selected_task->status->color) }}">{{ (is_null($selected_task->status) ? 'Unknown' : $selected_task->status->title) }}</span></h4>
                    </header>

                    <div class="card-body">
                        <form action="{{ route('TaskCenter.Task.Update', [$selected_division, $selected_project, $selected_task]) }}" method="post" id="task">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}



                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" id="title" name="title" value="{{ old('title', $selected_task->title) }}">
                                        <label>Task Title</label>
                                        @if ($errors->has('title'))
                                            <div class="invalid-feedback">{{ $errors->first('title') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group">
                                        <input type="text" data-provide="datepicker" class="form-control{{ $errors->has('project_due') ? ' is-invalid' : '' }}" id="project_due" name="project_due" value="{{ old('project_due', $selected_task->project_due) }}">
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
                                                    <option value="{{ $user->id }}"@if(!is_null($selected_task->user)){{ ($selected_task->user->id == $user->id ) ? ' selected' : '' }}@endif>{{ $user->name }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        <label class="label-floated">Assigned User</label>
                                        @if ($errors->has('user'))
                                            <div class="invalid-feedback">{{ $errors->first('user') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" rows="6" name="description">{{ old('description', $selected_task->description) }}</textarea>
                                        <label>Notes</label>
                                        @if ($errors->has('description'))
                                            <div class="invalid-feedback">{{ $errors->first('description') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <select class="form-control" data-provide="selectpicker" tabindex="-98" data-live-search="true" name="status_id">
                                            @if(!is_null($statusList))
                                                <option selected style="display: none;" value=""></option>
                                                @foreach ($statusList as $status)
                                                    <option value="{{ $status->id }}"@if(!is_null($selected_task->status)){{ ($selected_task->status->id == $status->id ) ? ' selected' : '' }}@endif>{{ $status->title }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        <label class="label-floated">Status</label>
                                        @if ($errors->has('user'))
                                            <div class="invalid-feedback">{{ $errors->first('user') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </form>


                    </div>
                    <footer class="card-footer text-right p-0">
                        <div class="btn-group">
                            @if($selected_task->project_started == '')
                                <a class="btn btn-square btn-success no-radius" href="{{ route('TaskCenter.Task.ToggleStart', [$selected_division, $selected_project, $selected_task]) }}"><i class="fa fa-play"></i></a>
                            @else
                                <a class="btn btn-square btn-yellow no-radius" href="{{ route('TaskCenter.Task.ToggleStart', [$selected_division, $selected_project, $selected_task]) }}"><i class="fa fa-pause"></i></a>
                            @endif
                            <button class="btn btn-square btn-primary no-radius" type="submit" form="task"><i class="fa fa-save"></i></button>
                        </div>
                    </footer>
                </div>
            </div>




        </div>
    </div>
@endsection