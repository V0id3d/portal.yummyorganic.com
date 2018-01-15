<header class="topbar">
    <div class="topbar-left">

        <!-- Hamburger -->
        <span class="topbar-btn sidebar-toggler"><i>&#9776;</i></span>
        <!-- Hamburger -->

        <!-- Fullscreen Toggle -->
        <a class="topbar-btn d-none d-md-block" href="#" data-provide="fullscreen tooltip" title="Fullscreen">
            <i class="material-icons fullscreen-default">fullscreen</i>
            <i class="material-icons fullscreen-active">fullscreen_exit</i>
        </a>
        <!-- END Fullscreen Toggle -->


        <!-- Grid Dropdown -->
        <div class="dropdown d-none d-md-block">
            <span class="topbar-btn" data-toggle="dropdown"><i class="ti-layout-grid3-alt"></i></span>
            <div class="dropdown-menu dropdown-grid">
                <a class="dropdown-item" href="#">
                    <span class="fa fa-home fa-2x"></span>
                    <span class="title">Dashboard</span>
                </a>

                <a class="dropdown-item" href="#">
                    <span class="fa fa-barcode fa-2x"></span>
                    <span class="title">Products</span>
                </a>

                <a class="dropdown-item" href="#">
                    <span class="fa fa-users fa-2x"></span>
                    <span class="title">Customers</span>
                </a>

                <a class="dropdown-item" href="#">
                    <span class="fa fa-tasks fa-2x"></span>
                    <span class="title">Tasks</span>
                </a>
            </div>


        </div>
        <!-- END Grid Dropdown -->

        <div class="topbar-divider d-none d-md-block"></div>

        <!-- Search Bar -->
    {{--<div class="lookup d-none d-md-block topbar-search" id="theadmin-search">--}}
    {{--<input class="form-control w-300px" type="text">--}}
    {{--<div class="lookup-placeholder">--}}
    {{--<i class="ti-search"></i>--}}
    {{--<span><strong>Try</strong> button, slider, modal, etc.</span>--}}
    {{--</div>--}}
    {{--</div>--}}
    <!-- END Search Bar -->
    </div>

    <div class="topbar-right">
        <!-- Right Sidebar Toggle -->
    {{--<a class="topbar-btn" href="#qv-global" data-toggle="quickview"><i class="ti-align-right"></i></a>--}}
    <!-- END Right Sidebar Toggle -->

        <!-- Divider -->
        <div class="topbar-divider"></div>
        <!-- END Divider -->


        <ul class="topbar-btns">

            <!-- User Bar -->
            <li class="dropdown">
                <span class="topbar-btn" data-toggle="dropdown"><img class="avatar" src="/assets/img/avatar/default.png" alt="..."></span>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#"><i class="ti-user"></i> Profile</a>
                    <a class="dropdown-item" href="#">
                        <div class="flexbox">
                            <i class="ti-email"></i>
                            <span class="flex-grow">Inbox</span>
                            <span class="badge badge-pill badge-info">5</span>
                        </div>
                    </a>
                    <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i class="ti-lock"></i> Lock</a>
                    <a class="dropdown-item" href="#"><i class="ti-power-off"></i> Logout</a>
                </div>
            </li>
            <!-- End User Bar -->

            {{--<!-- Notifications -->--}}
            {{--<li class="dropdown d-none d-md-block">--}}
                {{--<span class="topbar-btn has-new" data-toggle="dropdown"><i class="ti-bell"></i></span>--}}
                {{--<div class="dropdown-menu dropdown-menu-right">--}}

                    {{--<div class="media-list media-list-hover media-list-divided media-list-xs">--}}
                        {{--<a class="media media-new" href="#">--}}
                            {{--<span class="avatar bg-success"><i class="ti-user"></i></span>--}}
                            {{--<div class="media-body">--}}
                                {{--<p>Example Notifications</p>--}}
                                {{--<time datetime="2017-07-14 20:00">Just now</time>--}}
                            {{--</div>--}}
                        {{--</a>--}}

                    {{--</div>--}}

                    {{--<div class="dropdown-footer">--}}
                        {{--<div class="left">--}}
                            {{--<a href="#">Read all notifications</a>--}}
                        {{--</div>--}}

                        {{--<div class="right">--}}
                            {{--<a href="#" data-provide="tooltip" title="Mark all as read"><i class="fa fa-circle-o"></i></a>--}}
                            {{--<a href="#" data-provide="tooltip" title="Update"><i class="fa fa-repeat"></i></a>--}}
                            {{--<a href="#" data-provide="tooltip" title="Settings"><i class="fa fa-gear"></i></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                {{--</div>--}}
            {{--</li>--}}
            {{--<!-- END Notifications -->--}}

            {{--<!-- Messages -->--}}
            {{--<li class="dropdown d-none d-md-block">--}}
                {{--<span class="topbar-btn" data-toggle="dropdown"><i class="ti-email"></i></span>--}}
                {{--<div class="dropdown-menu dropdown-menu-right">--}}

                    {{--<div class="media-list media-list-divided media-list-hover media-list-xs scrollable" style="height: 290px">--}}
                        {{--<a class="media media-new" href="../page-app/mailbox-single.html">--}}
                            {{--<span class="avatar status-success">--}}
                                {{--<img src="/assets/img/avatar/1.jpg" alt="...">--}}
                            {{--</span>--}}
                            {{--<div class="media-body">--}}
                                {{--<p><strong>Example User</strong> <time class="float-right" datetime="2017-07-14 20:00">23 min ago</time></p>--}}
                                {{--<p class="text-truncate">This is just an example of messages</p>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</div>--}}

                    {{--<div class="dropdown-footer">--}}
                        {{--<div class="left">--}}
                            {{--<a href="#">Read all messages</a>--}}
                        {{--</div>--}}

                        {{--<div class="right">--}}
                            {{--<a href="#" data-provide="tooltip" title="Mark all as read"><i class="fa fa-circle-o"></i></a>--}}
                            {{--<a href="#" data-provide="tooltip" title="Settings"><i class="fa fa-gear"></i></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                {{--</div>--}}
            {{--</li>--}}
            {{--<!-- END Messages -->--}}

        </ul>

    </div>
</header>