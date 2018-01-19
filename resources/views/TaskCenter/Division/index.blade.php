@extends('layouts.admin')

@section('main-content')
    <header class="header no-border" style="margin-bottom: 0;">
        <div class="header-info">
            <div class="left">
                <h2 class="header-title"><strong>Task Center</strong> Division List</h2>
            </div>

            <div class="right gap-items-2">
                <a class="btn btn-secondary btn-square btn-round" href="#" data-provide="tooltip" title="" data-original-title="Add a Division"><i class="fa fa-plus"></i></a>
                <a class="btn btn-secondary btn-square btn-round" href="#" data-provide="tooltip" title="" data-original-title="Settings"><i class="fa fa-gear"></i></a>
            </div>
        </div>
    </header>

    <div class="main-content">
        <div class="media-list media-list-divided media-list-hover" data-provide="selectall">

            <header class="flexbox align-items-center media-list-header bg-transparent b-0 py-16 pl-20">
                <div class="flexbox align-items-center">
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input">
                        <span class="custom-control-indicator"></span>
                    </label>

                    <span class="divider-line mx-1"></span>

                </div>

                <div>
                    <div class="lookup lookup-circle lookup-right">
                        <input type="text" data-provide="media-search">
                    </div>
                </div>
            </header>


            <div class="media-list-body bg-white b-1">

                @foreach($divisionList as $division)
                    <div class="media align-items-center">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                        </label>

                        <label class="toggler ml-20 fs-16">
                            {{--<input type="checkbox">--}}
                            {{--<i class="fa fa-star"></i>--}}
                        </label>

                        {{--<span class="badge badge-dot badge-danger"></span>--}}

                        <a class="flexbox flex-grow gap-items text-truncate" href="#">
                            <i class="fa fa-th-large fa-3x"></i>

                            <div class="media-body text-truncate">
                                <h6>{{ $division->name }}</h6>
                                <small>
                                    <span># Of Projects</span>
                                </small>
                            </div>
                        </a>

                        <div class="dropdown">
                            <a class="text-lighter" href="#" data-toggle="dropdown" aria-expanded="true"><i class="ti-more-alt rotate-90"></i></a>
                            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; top: 19px; left: -147px; will-change: top, left;">
                                <a class="dropdown-item" href="#"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="fa fa-fw fa-trash"></i> Delete</a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>


            <footer class="flexbox align-items-center py-20">
            </footer>

        </div>
    </div>

@endsection