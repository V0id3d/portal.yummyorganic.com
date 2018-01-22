@extends('layouts.admin')

@section('main-content')
    <header class="header no-border" xmlns="http://www.w3.org/1999/html">
        <div class="header-info">
            <div class="left">
                <h2 class="header-title"><strong>Task Center</strong> Dashboard</h2>
            </div>

            <div class="right gap-items-2">
                <a class="btn btn-secondary btn-square btn-round" href="#" data-provide="tooltip" title="" data-original-title="Add Project"><i class="fa fa-sticky-note-o"></i></a>
                <a class="btn btn-secondary btn-square btn-round" href="#" data-provide="tooltip" title="" data-original-title="Settings"><i class="fa fa-gear"></i></a>
            </div>
        </div>
    </header>


    <div class="main-content">
        <div class="row">

            <div class="col-12">
                <div class="card card-shadowed form-type-material">
                    <header class="card-header">
                        <h4 class="card-title"><strong>Create</strong> Project</h4>
                    </header>

                    <div class="card-body">
                        <form action="{{ route('TaskCenter.Project.Store') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="title">
                                        <label>Project Title</label>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="assign">
                                        <label>Assign</label>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="project_due">
                                        <label>Due By</label>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control" rows="6" name="description"></textarea>
                                        <label>Description</label>
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

