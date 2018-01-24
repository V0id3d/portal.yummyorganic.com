@extends('layouts.admin')

@section('main-content')
    <header class="header no-border">
        <div class="header-info">
            <div class="left">
                <h2 class="header-title"><strong>Task Center</strong> Dashboard</h2>
            </div>

            <div class="right gap-items-2">
                {{--<a class="btn btn-secondary btn-square btn-round" href="{{ route('TaskCenter.Division.Create') }}" data-provide="tooltip" title="" data-original-title="Add Project"><i class="fa fa-sticky-note-o"></i></a>--}}
                {{--<a class="btn btn-secondary btn-square btn-round" href="#" data-provide="tooltip" title="" data-original-title="Settings"><i class="fa fa-gear"></i></a>--}}
            </div>
        </div>
    </header>


    <div class="main-content" style="padding-top: 0;">
        <div class="row">
            <div class="col-6">
                <div class="card card-hover-shadow">
                    <h4 class="card-title">
                        <strong>Status Messages</strong>
                    </h4>

                    <div class="card-body">
                        <table class="table" data-provide="selectall">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Color</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($statusList->isEmpty())
                                <tr>
                                    <td colspan="100%" class="text-center">No Status Messages</td>
                                </tr>
                            @else
                                @foreach($statusList as $status)
                                    <tr>
                                        <td><a href="{{ route('TaskCenter.Status.Edit', $status) }}">{{ $status->title }}</a></td>
                                        <td><span class="badge badge-dot badge-{{$status->color}}"></span></td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>

                    </div>
                    <footer class="card-footer text-right p-0">
                        <div class="btn-group">
                            <a class="btn btn-square btn-primary no-radius" href="{{ route('TaskCenter.Status.Create') }}"><i class="fa fa-plus"></i></a>
                        </div>
                    </footer>
                </div>
            </div>
            <div class="col-6">
                <div class="card card-hover-shadow">
                    <h4 class="card-title">
                        <strong>Divisions</strong>
                    </h4>

                    <div class="card-body">
                        <table class="table" data-provide="selectall">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($divisionList->isEmpty())
                                <tr>
                                    <td colspan="100%" class="text-center">No Divisions</td>
                                </tr>
                            @else
                                @foreach($divisionList as $division)
                                    <tr>
                                        <td><a href="{{ route('TaskCenter.Division.Show', $division) }}">{{ $division->title }}</a></td>
                                        <td>{{ (is_null($division->description) || $division->description == '') ? 'Not Set' : $division->description }}</td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>

                    </div>
                    <footer class="card-footer text-right p-0">
                        <div class="btn-group">
                            <a class="btn btn-square btn-primary no-radius" href="{{ route('TaskCenter.Division.Create') }}"><i class="fa fa-plus"></i></a>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </div>

@endsection

