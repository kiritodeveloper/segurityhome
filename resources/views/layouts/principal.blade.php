<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>house segurity</title>

        <!-- Vendor styles -->
        <link rel="stylesheet" href="{{asset('vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/bower_components/animate.css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/bower_components/fullcalendar/dist/fullcalendar.min.css')}}">

        <!-- App styles -->
        <link rel="stylesheet" href="{{asset('css/app.min.css')}}">
    </head>

    <body data-sa-theme="1">
        <main class="main">
            <div class="page-loader">
                <div class="page-loader__spinner">
                    <svg viewBox="25 25 50 50">
                        <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                    </svg>
                </div>
            </div>

@include('layouts.menu')
@include('layouts.nav')

<div class="themes">
    <div class="scrollbar-inner">
        <a href="" class="themes__item active" data-sa-value="1"><img src="{{asset('img/bg/1.jpg')}}" alt=""></a>
        <a href="" class="themes__item" data-sa-value="2"><img src="{{asset('img/bg/2.jpg'}})" alt=""></a>
        <a href="" class="themes__item" data-sa-value="3"><img src="{{asset('img/bg/3.jpg'}})" alt=""></a>
        <a href="" class="themes__item" data-sa-value="4"><img src="{{asset('img/bg/4.jpg')}}" alt=""></a>
        <a href="" class="themes__item" data-sa-value="5"><img src="{{asset('img/bg/5.jpg')}}" alt=""></a>
        <a href="" class="themes__item" data-sa-value="6"><img src="{{asset('img/bg/6.jpg')}}" alt=""></a>
        <a href="" class="themes__item" data-sa-value="7"><img src="{{asset('img/bg/7.jpg')}}" alt=""></a>
        <a href="" class="themes__item" data-sa-value="8"><img src="{{asset('img/bg/8.jpg')}}" alt=""></a>
        <a href="" class="themes__item" data-sa-value="9"><img src="{{asset('img/bg/9.jpg')}}" alt=""></a>
        <a href="" class="themes__item" data-sa-value="10"><img src="{{asset('img/bg/10.jpg')}}" alt=""></a>
    </div>
</div>

    @yield('content')
            <section class="content">
                <header class="content__title">
                    <h1>Dashboard</h1>
                    <small>Welcome to the unique SuperAdmin web app experience!</small>

                    <div class="actions">
                            <a href="" class="actions__item zmdi zmdi-trending-up"></a>
                            <a href="" class="actions__item zmdi zmdi-check-all"></a>

                            <div class="dropdown actions__item">
                                <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="" class="dropdown-item">Refresh</a>
                                    <a href="" class="dropdown-item">Manage Widgets</a>
                                    <a href="" class="dropdown-item">Settings</a>
                                </div>
                            </div>
                        </div>
                </header>




                <footer class="footer hidden-xs-down">
                    <p>© Super Admin Responsive. All rights reserved.</p>

                    <ul class="nav footer__nav">
                        <a class="nav-link" href="">Homepage</a>

                        <a class="nav-link" href="">Company</a>

                        <a class="nav-link" href="">Support</a>

                        <a class="nav-link" href="">News</a>

                        <a class="nav-link" href="">Contacts</a>
                    </ul>
                </footer>
            </section>
        </main>

        <script src="{{asset('vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{asset('vendors/bower_components/popper.js/dist/umd/popper.min.js')}}"></script>
        <script src="{{asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
        <script src="{{asset('vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js}}')"></script>

        <script src="{{asset('vendors/bower_components/salvattore/dist/salvattore.min.js')}}"></script>
        <script src="{{asset('vendors/bower_components/flot/jquery.flot.js')}}"></script>
        <script src="{{asset('vendors/bower_components/flot/jquery.flot.resize.js')}}"></script>
        <script src="{{asset('vendors/bower_components/flot.curvedlines/curvedLines.js')}}"></script>
        <script src="{{asset('vendors/bower_components/jqvmap/dist/jquery.vmap.min.js')}}"></script>
        <script src="{{asset('vendors/bower_components/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
        <script src="{{asset('vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js')}}"></script>
        <script src="{{asset('vendors/bower_components/peity/jquery.peity.min.js')}}"></script>
        <script src="{{asset('vendors/bower_components/moment/min/moment.min.js')}}"></script>
        <script src="{{asset('vendors/bower_components/fullcalendar/dist/fullcalendar.min.js')}}"></script>

        <!-- Charts and maps-->
        <script src="{{asset('demo/js/flot-charts/curved-line.js')}}"></script>
        <script src="{{asset('demo/js/flot-charts/line.js')}}"></script>
        <script src="{{asset('demo/js/flot-charts/dynamic.js')}}"></script>
        <script src="{{asset('demo/js/flot-charts/chart-tooltips.js')}}"></script>
        <script src="{{asset('demo/js/other-charts.js')}}"></script>
        <script src="{{asset('demo/js/jqvmap.js')}}"></script>

        <!-- App functions and actions -->
        <script src="{{asset('js/app.min.js')}}"></script>
    </body>
</html>