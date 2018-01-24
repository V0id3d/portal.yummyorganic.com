@extends('layouts.admin')

@section('main-content')
    <header class="header no-border">
        <div class="header-info">
            <div class="left">
                <h2 class="header-title"><strong>Task Center</strong>| {{ $selected_project->title }}</h2>
            </div>

            <div class="right gap-items-2">
                <a class="btn btn-secondary btn-square btn-round" href="{{ route('TaskCenter.Task.Create', [$selected_division, $selected_project]) }}" data-provide="tooltip" title="" data-original-title="Add Task"><i class="fa fa-plus"></i></a>
                <span class="divider-line mx-1"></span>
                <a class="btn btn-secondary btn-square btn-round" href="{{ route('TaskCenter.Project.Edit', [$selected_division, $selected_project]) }}" data-provide="tooltip" title="" data-original-title="Edit Project"><i class="fa fa-pencil"></i></a>
                <a class="btn btn-secondary btn-square btn-round" href="#" data-provide="tooltip" title="" data-original-title="Settings"><i class="fa fa-gear"></i></a>
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

                    <footer class="card-footer text-right p-0">
                        <div class="btn-group">
                            @if($selected_project->project_started == '')
                                <a class="btn btn-square btn-success no-radius" href="{{ route('TaskCenter.Project.ToggleStart', [$selected_division, $selected_project]) }}"><i class="fa fa-play"></i></a>
                            @else
                                <a class="btn btn-square btn-yellow no-radius" href="{{ route('TaskCenter.Project.ToggleStart', [$selected_division, $selected_project]) }}"><i class="fa fa-pause"></i></a>
                            @endif
                            <a href="{{ route('TaskCenter.Project.Edit', [$selected_division, $selected_project]) }}" class="btn btn-square btn-primary no-radius"><i class="fa fa-pencil"></i></a>
                        </div>
                    </footer>
                </div>
            </div>




        </div>
    </div>

@endsection