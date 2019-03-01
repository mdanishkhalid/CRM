<!DOCTYPE html>
<html lang="{{app()->getLocale()}} " class="responsive-height">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
@yield('title')
<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href={{asset('img/favicon.png')}}>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href={{asset('css/font-awesome.min.css')}} rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href={{asset('css/bootstrap.min.css')}} rel="stylesheet">
    {{--<link href={{asset('css/admin-mdb.min.css')}} rel="stylesheet">--}}
    <link href={{asset('css/animate.css')}} rel="stylesheet">
    <link href={{asset('css/compiled.min.css')}} rel="stylesheet">
    <link href={{asset('css/css-loader.css')}} rel="stylesheet">
    <link href={{asset('css/mdb.min.css')}} rel="stylesheet">
    <link href={{asset('css/fullcalendar.min.css')}} rel="stylesheet">
    <link href={{asset('css/jquery-jvectormap-2.0.3.css')}} rel="stylesheet">

    <link href={{asset('css/style.css')}} rel="stylesheet">
    <!-- MDBootstrap Datatables  -->
    <link href={{asset('css/datatables/dataTables.bootstrap4.min.css')}} rel="stylesheet">

    <style>

    </style>
    @yield('customStyle')
</head>

<body>

<!--Main Navigation-->
<header>
    <!--Intro Section-->
    <section class="view intro-2">
        <div class="mask rgba-stylish-strong h-100 d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-5">

                        <!--Form with header-->
                        <div class="card wow fadeIn" data-wow-delay="0.3s">
                            <div class="card-body">

                                <!--Header-->
                                <div class="form-header blue-gradient">
                                    <h3><i class="fa fa-user mt-2 mb-2"></i> Welcome to Scarlet CRM</h3>
                                </div>
                                <form method="POST" action="{{ route('customer.login') }}">
                                    @csrf
                                    <!--Body-->
                                    <div class="md-form">
                                        <i class="fa fa-user-o prefix white-text"></i>
                                        <input type="text" id="userid"
                                               class="form-control {{ $errors->has('userid') ? ' is-invalid' : '' }}"
                                               name="userid" value="{{ old('userid') }}" required autofocus>
                                        <label for="userid">User ID</label>
                                        @if ($errors->has('userid'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('userid') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="md-form">
                                        <i class="fa fa-lock prefix white-text"></i>
                                        <input type="password" id="password"
                                               class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                               name="password" required>
                                        <label for="password">Your password</label>
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="text-center">
                                        <button class="btn blue-gradient btn-lg">Log In</button>
                                        <hr>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--/Form with header-->

                    </div>
                </div>
            </div>
        </div>
    </section>

</header>
<!--Main Navigation-->


<script type="text/javascript" src={{asset('js/jquery-3.3.1.min.js')}}></script>
<script type="text/javascript" src={{asset('js/mdb.min.js')}}></script>
{{--<script type="text/javascript" src={{asset('js/app.js')}}></script>--}}
<script type="text/javascript" src={{asset('js/popper.min.js')}}></script>
<script type="text/javascript" src={{asset('js/bootstrap.js')}}></script>
<!-- MDBootstrap Calenders  -->
<script type="text/javascript" src={{asset('js/fullcalendar-3.4.0/fullcalendar.min.js')}}></script>
<script type="text/javascript" src={{asset('js/fullcalendar-3.4.0/lib/moment.min.js')}}></script>
<!-- MDBootstrap Google Maps  -->
<script type="text/javascript" src={{asset('js/google-maps/jquery-jvectormap-2.0.3.min.js')}}></script>
<script type="text/javascript" src={{asset('js/google-maps/jquery-jvectormap-world-mill.js')}}></script>
<!-- MDBootstrap Profile  -->
<script type="text/javascript" src={{asset('js/tinymce/tinymce.min.js')}}></script>
<!-- MDBootstrap Datatables  -->
<script type="text/javascript" src={{asset('js/datatables/dataTables.bootstrap4.min.js')}}></script>
<script type="text/javascript" src={{asset('js/datatables/jquery.dataTables.min.js')}}></script>
@yield('javaScript')
<!--Custom scripts-->
<script>
    // SideNav Initialization
    $(".button-collapse").sideNav();

    var container = document.querySelector('.custom-scrollbar');
    Ps.initialize(container, {
        wheelSpeed: 2,
        wheelPropagation: true,
        minScrollbarLength: 20
    });
</script>
</body>
</html>
