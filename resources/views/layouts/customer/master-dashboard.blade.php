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

    <!-- Your custom styles (optional) -->
    <style>

    </style>
    @yield('customStyle')
</head>
<body class="fixed-sn white-skin">


<!--Main Navigation-->
<header>
    @include('layouts.customer.sidenav')
    @include('layouts.customer.topnav')
</header>
<!--Main Navigation-->

<!--Main layout-->
<main>
    @yield('content')
</main>
<!--/Main layout-->

@include('layouts.customer.footer')

<!-- JQuery -->


<!-- JQuery -->

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
