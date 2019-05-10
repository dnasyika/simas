<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SI | PUSKESMAS</title>

    <!-- Bootstrap -->
    <link href={{asset("vendors/bootstrap/dist/css/bootstrap.min.css")}} rel="stylesheet">
    <!-- Font Awesome -->
    <link href={{asset("vendors/font-awesome/css/font-awesome.min.css")}} rel="stylesheet">
    <!-- NProgress -->
    <link href={{asset("vendors/nprogress/nprogress.css")}} rel="stylesheet">
    <!-- iCheck -->
    <link href={{asset("vendors/iCheck/skins/flat/green.css")}} rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href={{asset("vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css")}} rel="stylesheet">
    <!-- JQVMap -->
    <link href={{asset("vendors/jqvmap/dist/jqvmap.min.css")}} rel="stylesheet"/>

    <!-- Custom Theme Style -->
    <link href={{asset("css/custom.min.css")}} rel="stylesheet">

    {!! Html::style('css/jquery.dataTables.css') !!}
    {!! Html::style('css/dataTables.bootstrap.css') !!}
    {!! Html::script('js/jquery.js') !!}
    {!! Html::script('js/jquery.dataTables.min.js') !!}
    {!! Html::script('js/dataTables.bootstrap.min.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}


</head>
<!-- jQuery -->
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.html" class="site_title">
                        <span>SI Puskesmas</span></a>
                </div>

                <div class="clearfix"></div>

                <br/>

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>MENU</h3>
                        <ul class="nav side-menu">
                            <li><a href="/dokter/home"><i class="fa fa-laptop"></i> Home </a></li>
                            <li class="active"><a href="/dokter/daftarPasien"><i class="fa fa-table"></i> Daftar Pasien </a></li>
                            <li><a href="/dokter/rujukan"><i class="fa fa-table"></i> Rujukan </a></li>
                        </ul>
                    </div>
                </div>
                <!-- /sidebar menu -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                               aria-expanded="true">
                                <img src={{asset("images/img.jpg")}} alt="">Dokter
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="javascript:;"> Profile</a></li>
                                <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="container">
                <h2>Daftar Pasien</h2>
                <hr>
                {!! $html->table(['class'=>'table table-striped table-bordered']) !!}
                {!! $html->scripts() !!}
            </div>
        </div>
        <footer>

        </footer>

    </div>
</div>
<script src={{asset("vendors/jquery/dist/jquery.min.js")}}></script>
<!-- Bootstrap -->
<script src={{asset("vendors/bootstrap/dist/js/bootstrap.min.js")}}></script>
<!-- FastClick -->
<script src={{asset("vendors/fastclick/lib/fastclick.js")}}></script>
<!-- NProgress -->
<script src={{asset("vendors/nprogress/nprogress.js")}}></script>
<!-- Chart.js -->
<script src={{asset("vendors/Chart.js/dist/Chart.min.js")}}></script>
<!-- gauge.js -->
<script src={{asset("vendors/gauge.js/dist/gauge.min.js")}}></script>
<!-- bootstrap-progressbar -->
<script src={{asset("vendors/bootstrap-progressbar/bootstrap-progressbar.min.js")}}></script>
<!-- iCheck -->
<script src={{asset("vendors/iCheck/icheck.min.js")}}></script>
<!-- Skycons -->
<script src={{asset("vendors/skycons/skycons.js")}}></script>
<!-- Flot -->
<script src={{asset("vendors/Flot/jquery.flot.js")}}></script>
<script src={{asset("vendors/Flot/jquery.flot.pie.js")}}></script>
<script src={{asset("vendors/Flot/jquery.flot.time.js")}}></script>
<script src={{asset("vendors/Flot/jquery.flot.stack.js")}}></script>
<script src={{asset("vendors/Flot/jquery.flot.resize.js")}}></script>
<!-- Flot plugins -->
<script src={{asset("vendors/flot.orderbars/js/jquery.flot.orderBars.js")}}></script>
<script src={{asset("vendors/flot-spline/js/jquery.flot.spline.min.js")}}></script>
<script src={{asset("vendors/flot.curvedlines/curvedLines.js")}}></script>
<!-- DateJS -->
<script src={{asset("vendors/DateJS/build/date.js")}}></script>
<!-- JQVMap -->
<script src={{asset("vendors/jqvmap/dist/jquery.vmap.js")}}></script>
<script src={{asset("vendors/jqvmap/dist/maps/jquery.vmap.world.js")}}></script>
<script src={{asset("vendors/jqvmap/examples/js/jquery.vmap.sampledata.js")}}></script>
<!-- bootstrap-daterangepicker -->
<script src={{asset("vendors/js/moment/moment.min.js")}}></script>
<script src={{asset("vendors/js/datepicker/daterangepicker.js")}}></script>
<!-- Custom Theme Scripts -->
<script src={{asset("vendors/js/custom.min.js")}}></script>
</body>
</html>
