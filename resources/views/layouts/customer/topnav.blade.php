<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav">
    <!-- SideNav slide-out button -->
    <div class="float-left">
        <a href="#" data-activates="slide-out" class="button-collapse black-text"><i class="fa fa-bars"></i></a>
    </div>
    <!-- Breadcrumb-->
    <div class="breadcrumb-dn mr-auto">
        <a href="/customer/home" class="pl-0 bg-0 ml-4"><img class="img-responsive"
                                                             src="{{asset('img/logo/ScarletLogoNew.jpg')}}"
                                                             height="20px"></a>
    </div>

    <!--Navbar links-->
    <ul class="nav navbar-nav nav-flex-icons ml-auto">

        {{--<!-- Dropdown -->--}}
        {{--<li class="nav-item dropdown notifications-nav">--}}
        {{--<a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown"--}}
        {{--aria-haspopup="true"--}}
        {{--aria-expanded="false">--}}
        {{--<span class="badge red">3</span> <i class="fa fa-bell"></i>--}}
        {{--<span class="d-none d-md-inline-block">Notifications</span>--}}
        {{--</a>--}}
        {{--<div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">--}}
        {{--<a class="dropdown-item" href="#">--}}
        {{--<i class="fa fa-money mr-2" aria-hidden="true"></i>--}}
        {{--<span>New order received</span>--}}
        {{--<span class="float-right"><i class="fa fa-clock-o" aria-hidden="true"></i> 13 min</span>--}}
        {{--</a>--}}
        {{--<a class="dropdown-item" href="#">--}}
        {{--<i class="fa fa-money mr-2" aria-hidden="true"></i>--}}
        {{--<span>New order received</span>--}}
        {{--<span class="float-right"><i class="fa fa-clock-o" aria-hidden="true"></i> 33 min</span>--}}
        {{--</a>--}}
        {{--<a class="dropdown-item" href="#">--}}
        {{--<i class="fa fa-line-chart mr-2" aria-hidden="true"></i>--}}
        {{--<span>Your campaign is about to end</span>--}}
        {{--<span class="float-right"><i class="fa fa-clock-o" aria-hidden="true"></i> 53 min</span>--}}
        {{--</a>--}}
        {{--</div>--}}
        {{--</li>--}}
        {{--<li class="nav-item">--}}
        {{--<a class="nav-link waves-effect"><i class="fa fa-envelope"></i> <span--}}
        {{--class="clearfix d-none d-sm-inline-block">Contact</span></a>--}}
        {{--</li>--}}
        {{--<li class="nav-item">--}}
        {{--<a class="nav-link waves-effect"><i class="fa fa-comments-o"></i> <span--}}
        {{--class="clearfix d-none d-sm-inline-block">Support</span></a>--}}
        {{--</li>--}}
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <img src="{{url(Auth::user()->avatar_url)}}" class="rounded-circle z-depth-1 m-auto img-responsive"
                     alt="no-img"
                     style="height: 25px !important;"> <span
                        class="clearfix d-none d-sm-inline-block">{{Auth::user()->name}}</span></a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{ url('/customer-logout') }}">Log Out</a>
                <a class="dropdown-item" href="{{url('/customerprofile')}}">Profile</a>
            </div>
        </li>

    </ul>
    <!--/Navbar links-->
</nav>
<!-- /.Navbar -->