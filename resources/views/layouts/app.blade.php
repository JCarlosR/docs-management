<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">

    <!-- App Favicon -->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">

    <!-- form Uploads -->
    <link href="{{ asset('plugins/fileuploads/css/dropify.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App title -->
    <title>{{ config('app.name', 'C.I.D') }}</title>

    <!-- Custom box css -->
    <link href="{{ asset('plugins/custombox/dist/custombox.min.css') }}" rel="stylesheet">

    <!-- calendar-->
    <link href="{{ asset('plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">

    {{--search select--}}
    <link href="{{ asset('plugins/select2/dist/css/select2.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins/select2/dist/css/select2-bootstrap.css') }}" rel="stylesheet" type="text/css">{{ asset('') }}

    <!-- App css -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/core.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/components.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/pages.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css" />

    @yield('styles')

    <script src="{{ asset('js/modernizr.min.js') }}"></script>

</head>

<body class="fixed-left">
<!-- Begin page -->
<div id="wrapper">
    <!-- Top Bar Start -->
    <div class="topbar">
        <!-- LOGO -->
        <div class="topbar-left">
            <a href="home" class="logo"><span>C. <span>I. </span>D. </span><i class="zmdi zmdi-layers"></i></a>
        </div>
        <!-- Button mobile view to collapse sidebar menu -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">
                <!-- Page title -->
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <button class="button-menu-mobile open-left">
                            <i class="zmdi zmdi-menu"></i>
                        </button>
                    </li>
                    <li>
                        <h6 class="page-title">
                            @yield('page-title', 'Bienvenido')
                        </h6>
                    </li>
                </ul>
                @yield('search')
            </div><!-- end container -->
        </div><!-- end navbar -->
    </div>

    <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">
            <!-- User -->
            <div class="user-box">
                <div class="wrap">
                    <div class="user-img">
                        <img src="{{ asset('images/users/0.jpg') }}" alt="user-img" id="avatarImage" title="{{ auth()->user()->name }}" class="img-circle img-thumbnail img-responsive">
                    </div>
                </div>
                <h5><a href="">{{ auth()->user()->name }}</a></h5>
                <h6>{{ auth()->user()->role_name }}</h6>
                <ul class="list-inline">
                    <li>
                        <a href="/" title="Perfil">
                            <i class="zmdi zmdi-settings"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/logout') }}"
                           onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" title="Cerrar sesión">
                            <i class="zmdi zmdi-power"></i>
                        </a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </div>
            <!-- End User -->

            <!--- Sidemenu -->

        @include('includes.menu')
        <!-- Sidebar -->
            <div class="clearfix"></div>

        </div>
    </div>

    @yield('content')

    <footer class="footer">
        © 2018 – Control Interno Documentario.
    </footer>

</div>

<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/detect.js') }}"></script>
<script src="{{ asset('js/fastclick.js') }}"></script>
<script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('js/jquery.blockUI.js') }}"></script>
<script src="{{ asset('js/waves.js') }}"></script>
<script src="{{ asset('js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('js/jquery.scrollTo.min.js') }}"></script>

<!-- Plugins Js -->
<script src="{{ asset('plugins/bootstrap-inputmask/bootstrap-inputmask.min.js') }}" type="text/javascript"></script>


<script src="{{ asset('plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}" type="text/javascript"></script>

<!-- file uploads js -->
<script src="{{ asset('plugins/fileuploads/js/dropify.min.js') }}"></script>

<script src="{{ asset('plugins/jquery-knob/jquery.knob.js') }}"></script>


<!-- App js -->
<script src="{{ asset('js/jquery.core.js') }}"></script>
<script src="{{ asset('js/jquery.app.js') }}"></script>


@yield('scripts')
</body>
</html>