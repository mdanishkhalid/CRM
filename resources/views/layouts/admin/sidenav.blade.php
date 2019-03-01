<!-- Sidebar navigation -->
<div id="slide-out" class="side-nav sn-bg-4 fixed">
    <ul class="custom-scrollbar">
        <!-- Logo -->
        <li class="logo-sn waves-effect">
            <div class="text-center">
                <a href="#" class="pl-0"><img src="{{asset('img/logo/mdb-transaprent-noshadows.png')}}"
                                              class=""></a>
            </div>
        </li>
        <!--/. Logo -->

        <!--Search Form-->
        <li>
            <form class="search-form" role="search">
                <div class="form-group md-form mt-0 pt-1 waves-light">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
            </form>
        </li>
        <!--/.Search Form-->
        <!-- Side navigation links -->
        <li>
            <ul class="collapsible collapsible-accordion">
                <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-tachometer"></i> Setup<i
                                class="fa fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="{{url('custcatg')}}" class="waves-effect">Customer Category</a>
                            </li>
                            <li><a href="{{url('custstatus')}}" class="waves-effect">Customer Status</a>
                            </li>
                            <li><a href="{{url('custtype')}}" class="waves-effect">Customer Types</a>
                            </li>
                            <li><a href="{{url('department')}}" class="waves-effect">Department</a>
                            </li>
                            <li><a href="{{url('designation')}}" class="waves-effect">Designations</a>
                            </li>
                            <li><a href="{{url('empsts')}}" class="waves-effect">Employee Status</a>
                            </li>
                            <li><a href="{{url('reqstatus')}}" class="waves-effect">Request Status</a></li>
                            <li><a href="{{url('custprofile')}}" class="waves-effect">Customer Profile</a>
                            <li><a href="{{url('empprofile')}}" class="waves-effect">Employee Profile</a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </li>
        <!--/. Side navigation links -->
    </ul>
    <div class="sidenav-bg mask-strong"></div>
</div>
<!--/. Sidebar navigation -->