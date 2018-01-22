@extends('layouts.admin')

@section('main-content')
    <header class="header no-border" style="margin-bottom: 0;">
        <div class="header-info">
            <div class="left">
                <h2 class="header-title"><strong>Task Center</strong>| {{ $selected_division->title }}</h2>
            </div>

            <div class="right gap-items-2">
                <a class="btn btn-secondary btn-square btn-round" href="{{ route('TaskCenter.Project.Create', $selected_division) }}" data-provide="tooltip" title="" data-original-title="Add Project"><i class="fa fa-plus"></i></a>
                <span class="divider-line mx-1"></span>
                <a class="btn btn-secondary btn-square btn-round" href="{{ route('TaskCenter.Division.Edit', $selected_division) }}" data-provide="tooltip" title="" data-original-title="Edit Division"><i class="fa fa-pencil"></i></a>
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
                                        Total
                                    </span>
                                    <span class="text-primary fs-40">{{ (is_null($selected_division->projects)) ? '0' : $selected_division->projects->count() }}</span>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-lg-3">
                            <div class="card-body br-1 border-light">
                                <div class="flexbox mb-1">
                                    <span>
                                        <i class="fa fa-minus-square-o fa-2x"></i><br>
                                        In Progress
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
                                        Completed
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
                                        Late
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
            @if(!is_null($selected_division->projects))
                @foreach($selected_division->projects as $project)
                    <div class="col-6">
                        <div class="card card-hover-shadow">
                            <h4 class="card-title">
                                <strong>{{ $project->title }}</strong>
                                <small class="subtitle">Due: {{ (is_null($project->project_due)) ? 'Not Set' : $project->project_due }}</small>

                            </h4>

                            <div class="card-body">
                                <p>{{ $project->description }}</p>
                                <table class="table" data-provide="selectall">
                                    <thead>
                                    <tr>
                                        <th class="w-40px">

                                        </th>
                                        <th>Task</th>
                                        <th>Status</th>
                                        <th>Assigned</th>
                                        <th>Due</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($project->tasks->isEmpty())
                                        <tr>
                                            <td colspan="100%" class="text-center">No Tasks given</td>
                                        </tr>
                                    @else
                                        <tr>
                                            <td colspan="100%">>{{ $project->tasks }}</td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>

                                    {{--<tbody>--}}
                                    {{--<tr>--}}
                                        {{--<td>--}}
                                            {{--<div class="custom-control custom-checkbox">--}}
                                                {{--<input type="checkbox" class="custom-control-input">--}}
                                                {{--<label class="custom-control-label"></label>--}}
                                            {{--</div>--}}
                                        {{--</td>--}}
                                        {{--<td>Mark</td>--}}
                                        {{--<td>Otto</td>--}}
                                        {{--<td>@mdo</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<td>--}}
                                            {{--<div class="custom-control custom-checkbox">--}}
                                                {{--<input type="checkbox" class="custom-control-input">--}}
                                                {{--<label class="custom-control-label"></label>--}}
                                            {{--</div>--}}
                                        {{--</td>--}}
                                        {{--<td>Jacob</td>--}}
                                        {{--<td>Thornton</td>--}}
                                        {{--<td>@fat</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<td>--}}
                                            {{--<div class="custom-control custom-checkbox">--}}
                                                {{--<input type="checkbox" class="custom-control-input">--}}
                                                {{--<label class="custom-control-label"></label>--}}
                                            {{--</div>--}}
                                        {{--</td>--}}
                                        {{--<td>Larry</td>--}}
                                        {{--<td>the Bird</td>--}}
                                        {{--<td>@twitter</td>--}}
                                    {{--</tr>--}}
                                    {{--</tbody>--}}
                                {{--</table>--}}
                            </div>
                            <footer class="card-footer text-right p-0">
                                <button class="btn btn-square btn-primary no-radius"><i class="fa fa-plus"></i></button>
                            </footer>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

@endsection