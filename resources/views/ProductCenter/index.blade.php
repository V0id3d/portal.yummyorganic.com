@extends('layouts.admin')

@section('main-content')
    <header class="header no-border">
        <div class="header-info">
            <div class="left">
                <h2 class="header-title"><strong>Product Center</strong> Dashboard</h2>
            </div>

            <div class="right gap-items-2">
                {{--<a class="btn btn-secondary btn-square btn-round" href="{{ route('TaskCenter.Division.Create') }}" data-provide="tooltip" title="" data-original-title="Add Project"><i class="fa fa-sticky-note-o"></i></a>--}}
                {{--<a class="btn btn-secondary btn-square btn-round" href="#" data-provide="tooltip" title="" data-original-title="Settings"><i class="fa fa-gear"></i></a>--}}
            </div>
        </div>
    </header>


    <div class="main-content" style="padding-top: 0;">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-hover-shadow">
                    <h4 class="card-title">
                        <strong>Brands</strong>
                    </h4>

                    <div class="card-body">
                        <table class="table" data-provide="selectall">
                            <thead>
                            <tr>
                                <th>Slug</th>
                                <th>Name</th>
                                <th>Description</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($brandList->isEmpty())
                                <tr>
                                    <td colspan="100%" class="text-center">No Brands</td>
                                </tr>
                            @else
                                @foreach($brandList as $brand)
                                    <tr>
                                        <td>{{ $brand->slug }}</td>
                                        <td><a href="{{ route('ProductCenter.Brand.Edit', $brand) }}">{{ $brand->name }}</a></td>
                                        <td>{{ $brand->description }}</td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>

                    </div>
                    <footer class="card-footer text-right p-0">
                        <div class="btn-group">
                            <a class="btn btn-square btn-primary no-radius" href="{{ route('ProductCenter.Brand.Create') }}"><i class="fa fa-plus"></i></a>
                        </div>
                    </footer>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-hover-shadow">
                    <h4 class="card-title">
                        <strong>Types</strong>
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
                            @if($typeList->isEmpty())
                                <tr>
                                    <td colspan="100%" class="text-center">No Types</td>
                                </tr>
                            @else
                                @foreach($typeList as $type)
                                    <tr>
                                        <td><a href="{{ route('ProductCenter.Type.Edit', $type) }}">{{ $type->name }}</a></td>
                                        <td>{{ $type->description }}</td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>

                    </div>
                    <footer class="card-footer text-right p-0">
                        <div class="btn-group">
                            <a class="btn btn-square btn-primary no-radius" href="{{ route('ProductCenter.Type.Create') }}"><i class="fa fa-plus"></i></a>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </div>

@endsection

