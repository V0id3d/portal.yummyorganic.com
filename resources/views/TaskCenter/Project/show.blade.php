@extends('layouts.admin')

@section('main-content')
    <header class="header no-border" style="margin-bottom: 0;">
        <div class="header-info">
            <div class="left">
                <h2 class="header-title"><strong>Task Center</strong>| {{ $selected_division->title }}</h2>
            </div>

            <div class="right gap-items-2">
                <a class="btn btn-secondary btn-square btn-round" href="#" data-provide="tooltip" title="" data-original-title="Add Task"><i class="fa fa-plus"></i></a>
                <span class="divider-line mx-1"></span>
                <a class="btn btn-secondary btn-square btn-round" href="#" data-provide="tooltip" title="" data-original-title="Edit Project"><i class="fa fa-pencil"></i></a>
                <a class="btn btn-secondary btn-square btn-round" href="#" data-provide="tooltip" title="" data-original-title="Settings"><i class="fa fa-gear"></i></a>
            </div>
        </div>
    </header>

    <div class="main-content" style="padding-top: 0;">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="row no-gutters py-2">


                        <div class="col-sm-6 col-lg-3">
                            <div class="card-body br-1 border-light">
                                <div class="flexbox mb-1">
                                    <span>
                                        <i class="fa fa-square-o fa-2x"></i><br>
                                        Total Projects Projects
                                    </span>
                                    <span class="text-primary fs-40">{{ (is_null($selected_project->tasks)) ? '0' : $selected_project->count() }}</span>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-lg-3">
                            <div class="card-body br-1 border-light">
                                <div class="flexbox mb-1">
                                    <span>
                                        <i class="fa fa-minus-square-o fa-2x"></i><br>
                                        Current Projects
                                    </span>
                                    <span class="text-primary fs-40">0</span>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-lg-3">
                            <div class="card-body br-1 border-light">
                                <div class="flexbox mb-1">
                                    <span>
                                        <i class="fa fa-check-square-o fa-2x"></i><br>
                                        Completed Projects
                                    </span>
                                    <span class="text-primary fs-40">0</span>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-lg-3">
                            <div class="card-body br-1 border-light">
                                <div class="flexbox mb-1">
                                    <span>
                                        <i class="fa fa-clock-o fa-2x"></i><br>
                                        Late Projects
                                    </span>
                                    <span class="text-primary fs-40">0</span>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>

        <div class="row">

        </div>
    </div>

@endsection