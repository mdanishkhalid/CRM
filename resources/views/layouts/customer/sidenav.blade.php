<!-- Sidebar navigation -->
<div id="slide-out" class="side-nav sn-bg-4 fixed">
    <ul class="custom-scrollbar">
        <!-- Logo -->
        <li class="logo-sn waves-effect">

            <!--Card-->
            <div class="card testimonial-card mt-0 mx-auto" style="max-height: 100%">
                <!--Background color-->
                <div class="card-up info-color"></div>
                <!--Avatar-->
                <div class="avatar mx-auto white">
                    <img src="{{url(Auth::user()->avatar_url)}}" height="10px" class="rounded-circle img-fluid">
                </div>
                <div class="card-body">
                    <!--Name-->
                    <h4 class="font-weight-bold text-dark mb-4">{{Auth::user()->name}}</h4>
                    <hr>
                    <!--Quotation-->
                    <ul class="striped striped-sm mb-0 text-left text-dark">
                        <li>
                            <p><strong>Menu</strong></p>
                        </li>
                        <li>
                            <a href="{{url('crequest')}}">New Request</a>
                        </li>
                        <li>
                            <a href="{{url('customerprofile')}}">Profile</a>
                        </li>
                    </ul>
                    <ul class="mt-5"></ul>
                    <br>
                    <ul class="mt-5"></ul>
                    <br>

                </div>
            </div>
            <!--Card-->

            <!-- Grid row -->


            <!-- Section: Testimonials v.1 -->
        </li>
        <!--/.Search Form-->
    </ul>
    <div class="sidenav-bg mask-strong"></div>
</div>
<!--/. Sidebar navigation -->