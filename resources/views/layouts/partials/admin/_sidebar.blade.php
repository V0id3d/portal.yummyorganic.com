<aside class="sidebar sidebar-icons-right sidebar-icons-boxed sidebar-expand-lg">
    <header class="sidebar-header" style="background-color:#455160;">
        <a class="logo-icon" href="#"><img src="/assets/img/logo-icon-light2.png" alt="logo icon"></a>
        <span class="logo">
          <a href="../index.html"><img src="/assets/img/logo-light2.png" alt="logo"></a>
        </span>
        {{--<span class="sidebar-toggle-fold"></span>--}}
    </header>

    <!-- Navigation -->
    <nav class="sidebar-navigation">
        <ul class="menu">

            <!-- Navigation Header -->
            <li class="menu-category">Centers</li>
            <!-- END Naigation Header -->

            <!-- Single Navigation Item -->
            <li class="menu-item">
                <a class="menu-link" href="../dashboard/general.html">
                    <span class="icon fa fa-home"></span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <!-- End Single Navigation -->


            <!-- Multi Level Navigation Item [Product Center] -->
            {{--<li class="menu-item">--}}
                {{--<a class="menu-link" href="#">--}}
                    {{--<span class="icon fa fa-barcode"></span>--}}
                    {{--<span class="title">Product Center</span>--}}
                    {{--<span class="arrow"></span>--}}
                {{--</a>--}}

                {{--<ul class="menu-submenu">--}}
                    {{--<li class="menu-item">--}}
                        {{--<a class="menu-link" href="#">--}}
                            {{--<span class="dot"></span>--}}
                            {{--<span class="title">Brands</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}

                    {{--<li class="menu-item">--}}
                        {{--<a class="menu-link" href="#">--}}
                            {{--<span class="dot"></span>--}}
                            {{--<span class="title">Products</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            <!-- END Multi Level Navigation Item -->


            <!-- Multi Level Navigation Item [Customer Center] -->
            <li class="menu-item {{ setOpen('admin/customercenter') }}">
                <a class="menu-link" href="#">
                    <span class="icon fa fa-users"></span>
                    <span class="title">Customer Center</span>
                    <span class="arrow"></span>
                </a>

                <ul class="menu-submenu">
                    <li class="menu-item{{ setActive('admin/customercenter/company') }}">
                        <a class="menu-link" href="{{ route('CustomerCenter.Company.Index') }}">
                            <span class="dot"></span>
                            <span class="title">Companies</span>
                        </a>
                    </li>

                    <li class="menu-item{{ setActive('admin/customercenter/contact') }}">
                        <a class="menu-link" href="{{ route('CustomerCenter.Contact.Index') }}">
                            <span class="dot"></span>
                            <span class="title">Clients</span>
                        </a>
                    </li>

                    <li class="menu-item{{ setActive('admin/customercenter/lead') }}">
                        <a class="menu-link" href="{{ route('CustomerCenter.Lead.Index') }}">
                            <span class="dot"></span>
                            <span class="title">Leads</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- END Multi Level Navigation Item -->

            <!-- Multi Level Navigation Item [Task Center] -->
            <li class="menu-item">
                <a class="menu-link" href="#">
                    <span class="icon fa fa-tasks"></span>
                    <span class="title">Task Center</span>
                    <span class="arrow"></span>
                </a>

                <ul class="menu-submenu">

                    <li class="menu-item">
                        <a class="menu-link" href="#">
                            <span class="dot"></span>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>

                    <li class="menu-category">Divisions</li>

                    @foreach(App\TaskCenter\Division::all() as $division)

                        <li class="menu-item">
                            <a class="menu-link" href="{{ route('TaskCenter.Division.Show', $division) }}">
                                <span class="dot"></span>
                                <span class="title">{{ $division->title }}</span>
                            </a>
                        </li>

                    @endforeach

                    <li class="menu-item">
                        <a class="menu-link" href="{{ route('TaskCenter.Division.Create') }}">
                            <span class="dot"></span>
                            <span class="title">Add Division</span>
                        </a>
                    </li>

                </ul>
            </li>
            <!-- END Multi Level Navigation Item -->

            <!-- Navigation Header -->
            <li class="menu-category">Settings</li>
            <!-- END Naigation Header -->

            <!-- Single Navigation Item [General]-->
            {{--<li class="menu-item">--}}
                {{--<a class="menu-link" href="#">--}}
                    {{--<span class="icon fa fa-gears"></span>--}}
                    {{--<span class="title">General</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            <!-- End Single Navigation -->

            <!-- Single Navigation Item [Product Center]-->
            {{--<li class="menu-item">--}}
                {{--<a class="menu-link" href="#">--}}
                    {{--<span class="icon fa fa-barcode"></span>--}}
                    {{--<span class="title">Product Center</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            <!-- End Single Navigation -->

            <!-- Single Navigation Item [Customer Center]-->
            <li class="menu-item">
                <a class="menu-link" href="#">
                    <span class="icon fa fa-users"></span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <!-- End Single Navigation -->

            <!-- Multi Level Navigation Item [Access Center] -->
            <li class="menu-item">
                <a class="menu-link" href="#">
                    <span class="icon fa fa-lock"></span>
                    <span class="title">Access Center</span>
                    <span class="arrow"></span>
                </a>

                <ul class="menu-submenu">
                    <li class="menu-item">
                        <a class="menu-link" href="{{ route('UserCenter.Users.Index') }}">
                            <span class="dot"></span>
                            <span class="title">Users</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class="menu-link" href="{{ route('UserCenter.Roles.Index') }}">
                            <span class="dot"></span>
                            <span class="title">Roles</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class="menu-link" href="{{ route('UserCenter.Permissions.Index') }}">
                            <span class="dot"></span>
                            <span class="title">Permissions</span>
                        </a>
                    </li>

                </ul>
            </li>
            <!-- END Multi Level Navigation Item -->


        </ul>
    </nav>

</aside>