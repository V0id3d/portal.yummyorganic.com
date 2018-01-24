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

        <div class="masonry-grid masonry-cols-2 gap-1">
            @if(!is_null($selected_division->projects))
                @foreach($selected_division->projects as $project)
                    <div class="masonry-item">
                        <div class="card card-hover-shadow">
                            <h4 class="card-title">
                                <strong>{{ $project->title }}</strong>
                                <small class="subtitle">Due: {{ ($project->project_due == '') ? 'Not Set' : $project->project_due }}</small>

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
                                        @foreach($project->tasks as $task)
                                            {{--{{ dd($task) }}--}}
                                            <tr>
                                                <td><i class="fa {{ ($task->project_complete == '') ? 'fa-square-o' : 'fa-check' }}"></i></td>
                                                <td><a href="{{ route('TaskCenter.Task.Show', [$selected_division, $project, $task]) }}">{{ $task->title }}</a></td>
                                                <td><span class="badge badge-{{ (is_null($task->status) ? 'default' : $task->status->color) }}">{{ (is_null($task->status) ? 'Unknown' : $task->status->title) }}</span></td>
                                                <td>{{ (is_null($task->user) || $task->user == 0) ? 'Not Assigned' : $task->user->name) }}</td>
                                                <td>{{ ($task->project_due == '') ? 'Not Set' : $task->project_due }}</td>
                                            </tr>
                                        @endforeach
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
                                <div class="btn-group">
                                    <a class="btn btn-square btn-primary no-radius" href="{{ route('TaskCenter.Task.Create', [$selected_division, $project]) }}"><i class="fa fa-plus"></i></a>
                                    {{--<button class="btn btn-square btn-primary no-radius" onClick="{{ route('TaskCenter.Task.Create', [$selected_division, $project]) }}"><i class="fa fa-plus"></i></button>--}}
                                </div>
                                <div class="btn-group">
                                    @if($project->project_started == '')
                                        <a class="btn btn-square btn-success no-radius" href="{{ route('TaskCenter.Project.ToggleStart', [$selected_division, $project]) }}"><i class="fa fa-play"></i></a>
                                    @else
                                        <a class="btn btn-square btn-yellow no-radius" href="{{ route('TaskCenter.Project.ToggleStart', [$selected_division, $project]) }}"><i class="fa fa-pause"></i></a>
                                    @endif
                                    <a href="{{ route('TaskCenter.Project.Edit', [$selected_division, $project]) }}" class="btn btn-square btn-primary no-radius"><i class="fa fa-pencil"></i></a>
                                    {{--<button class="btn btn-square btn-primary no-radius"><i class="fa fa-pencil"></i></button>--}}
                                </div>
                            </footer>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

@endsection