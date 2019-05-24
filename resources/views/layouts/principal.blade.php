<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>my house segurity</title>

        <!-- Vendor styles -->
        {!! Html::style('vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') !!}
        {!! Html::style('vendors/bower_components/animate.css/animate.min.css') !!}
        {!! Html::style('vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css') !!}
        {!! Html::style('vendors/bower_components/fullcalendar/dist/fullcalendar.min.css') !!}


        <!-- App styles -->
        {!! Html::style('css/app.min.css') !!}

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



    @yield('content')

        </main>
        {!! Html::script('vendors/bower_components/jquery/dist/jquery.min.js') !!}
        {!! Html::script('vendors/bower_components/popper.js/dist/umd/popper.min.js') !!}
        {!! Html::script('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') !!}
        {!! Html::script('vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js') !!}
        {!! Html::script('vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js') !!}

        {!! Html::script('vendors/bower_components/salvattore/dist/salvattore.min.js') !!}
        {!! Html::script('vendors/bower_components/flot/jquery.flot.js') !!}
        {!! Html::script('vendors/bower_components/flot/jquery.flot.resize.js') !!}
        {!! Html::script('vendors/bower_components/flot.curvedlines/curvedLines.js') !!}
        {!! Html::script('vendors/bower_components/jqvmap/dist/jquery.vmap.min.js') !!}
        {!! Html::script('vendors/bower_components/jqvmap/dist/maps/jquery.vmap.world.js') !!}
        {!! Html::script('vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js') !!}
        {!! Html::script('vendors/bower_components/peity/jquery.peity.min.js') !!}
        {!! Html::script('vendors/bower_components/moment/min/moment.min.js') !!}
        {!! Html::script('vendors/bower_components/fullcalendar/dist/fullcalendar.min.js') !!}


        {!! Html::script('demo/js/flot-charts/curved-line.js') !!}
        {!! Html::script('demo/js/flot-charts/line.js') !!}
        {!! Html::script('demo/js/flot-charts/dynamic.js') !!}
        {!! Html::script('demo/js/flot-charts/chart-tooltips.js') !!}
        {!! Html::script('demo/js/other-charts.js') !!}
        {!! Html::script('demo/js/jqvmap.js') !!}

        {!! Html::script('vendors/bower_components/datatables.net/js/jquery.dataTables.min.js') !!}
        {!! Html::script('vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') !!}
        {!! Html::script('vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js') !!}
        {!! Html::script('vendors/bower_components/jszip/dist/jszip.min.js') !!}
        {!! Html::script('vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js') !!}





        <!-- App functions and actions -->

        {!! Html::script('js/app.min.js') !!}

    </body>
</html>