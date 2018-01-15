@extends('layouts.admin')

@section('main-content')
    {{--<header class="header">--}}
        {{--<div class="header-info">--}}
            {{--<h1 class="header-title">--}}
                {{--<strong>Default</strong> Layout--}}
                {{--<small>Create the skeleton of your app with popular pre-designed layouts.</small>--}}
            {{--</h1>--}}
        {{--</div>--}}
    {{--</header><!--/.header -->--}}
    <div class="col-12" style="padding-left:0; padding-right: 0;">
        <div class="card card-inverse bg-img" style="background-image: url(/assets/img/auth2.jpg); padding-top: 275px">
            <div class="flexbox align-items-center px-20" data-overlay="4">
                <div class="flexbox align-items-center mr-auto">
                    <a href="#">
                        <img class="avatar avatar-xl avatar-bordered" src="/assets/img/avatar/default.png">
                    </a>
                    <div class="pl-12 d-none d-md-block">
                        <h5 class="mb-0"><a class="hover-primary text-white" href="#">{{ auth()->user()->name }}</a></h5>
                        {{--<span>Web Designer</span>--}}
                    </div>
                </div>

                <ul class="flexbox flex-justified text-center py-20">
                    <li class="px-10">
                        <span class="opacity-60">Tasks</span><br>
                        <span class="fs-22">10</span>
                    </li>
                    {{--<li class="px-10">--}}
                        {{--<span class="opacity-60">Following</span><br>--}}
                        {{--<span class="fs-22">426</span>--}}
                    {{--</li>--}}
                    {{--<li class="pl-10">--}}
                        {{--<span class="opacity-60">Tweets</span><br>--}}
                        {{--<span class="fs-22">165</span>--}}
                    {{--</li>--}}
                </ul>
            </div>

        </div>
    </div>


    <div class="main-content">
        <div class="row">


            <div class="col-md-6 col-xl-3">
                <div class="card card-body">
                    <h6>
                        <span class="text-uppercase">Total Products</span>
                        <span class="float-right"><a class="btn btn-xs btn-dark" href="#">View</a></span>
                    </h6>
                    <br>
                    <p class="fs-28 fw-100">0</p>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 0%; height: 4px;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="text-gray fs-12">100% Till Goal</div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card card-body">
                    <h6>
                        <span class="text-uppercase">Orders</span>
                        <span class="float-right"><a class="btn btn-xs btn-dark" href="#">View</a></span>
                    </h6>
                    <br>
                    <p class="fs-28 fw-100">0</p>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 0%; height: 4px;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="text-gray fs-12">100% Till Goal</div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card card-body">
                    <h6>
                        <span class="text-uppercase">New Customers</span>
                        <span class="float-right"><a class="btn btn-xs btn-primary" href="#">View</a></span>
                    </h6>
                    <br>
                    <p class="fs-28 fw-100">0</p>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 0%; height: 4px;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="text-gray fs-12">100% Till Goal</div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card card-body">
                    <h6>
                        <span class="text-uppercase">Task List</span>
                        <span class="float-right"><a class="btn btn-xs btn-dark" href="#">View</a></span>
                    </h6>
                    <br>
                    <p class="fs-28 fw-100">0</p>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 0%; height: 4px;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="text-gray fs-12">100% Complete</div>
                </div>
            </div>
        </div>





    </div><!--/.main-content -->
@endsection
