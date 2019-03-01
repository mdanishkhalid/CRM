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
                            <li><a href="{{url('pendreq')}}" class="waves-effect">Pending Requests</a>
                            </li>
                            <li><a href="{{url('Reqhistory')}}" class="waves-effect">Requests History</a>
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