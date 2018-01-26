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
                        <form action="{{ route('TaskCenter.Project.Update', [$selected_division, $selected_project]) }}" method="POST" id="project">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}



                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" id="title" name="title" value="{{ old('title', $selected_project->title) }}">
                                        <label>Division Title</label>
                                        @if ($errors->has('title'))
                                            <div class="invalid-feedback">{{ $errors->first('title') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" data-provide="datepicker"  class="form-control{{ $errors->has('project_due') ? ' is-invalid' : '' }}" id="project_due" name="project_due" value="{{ old('project_due', $selected_project->project_due) }}">
                                        <label>Project Due</label>
                                        @if ($errors->has('project_due'))
                                            <div class="invalid-feedback">{{ $errors->first('project_due') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" rows="6" name="description">{{ old('description', $selected_project->description) }}</textarea>
                                        <label>Notes</label>
                                        @if ($errors->has('description'))
                                            <div class="invalid-feedback">{{ $errors->first('description') }}</div>
                                        @endif
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
                            <button class="btn btn-square btn-primary no-radius" type="submit" form="project"><i class="fa fa-save"></i></button>
                        </div>
                    </footer>
                </div>
            </div>




        </div>
    </div>
@endsection