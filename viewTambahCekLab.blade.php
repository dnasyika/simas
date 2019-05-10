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
                            <li><a href="/lab/home"><i class="fa fa-laptop"></i> Home </a></li>
                            <li class="active"><a href="/lab/daftarCekLab"><i class="fa fa-table"></i> Cek Laboratorium</a>
                            </li>
                            <li><a href="/lab/daftarPasien"><i class="fa fa-table"></i> Daftar Pasien</a>
                            </li>
                            <li><a href="/lab/daftarFasilitas"><i class="fa fa-table"></i> Daftar Fasilitas </a></li>
                        </ul>
                    </div>
                </div>
                <!-- /sidebar menu -->
            </div>
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
                            <img src={{asset("images/img.jpg")}} alt="">Laboratorium
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

    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Form Validation</h3>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <form method="post" action="{{ url('/lab/tambahCekLab/add') }}"
                                  class="form-horizontal form-label-left">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">ID
                                        Kunjungan <span
                                                class="required">*</span>
                                    </label>

                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="name" class="form-control col-md-7 col-xs-12"
                                               data-validate-length-range="6" data-validate-words="2" name="idKunjungan"
                                               required="required"
                                               type="text">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Pasien<span
                                                class="required">*</span>
                                    </label>

                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="nama_pasien" class="form-control col-md-7 col-xs-12"
                                               required="required"
                                               type="text" value="{{ $pasien->Nama }}" readonly>
                                        <input type="hidden" name="idPasien" value="{{ $pasien->ID_pasien }}">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Pegawai <span
                                                class="required">*</span>
                                    </label>

                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select type="text" required="required"
                                                class="form-control col-md-7 col-xs-12" name="idPegawai">
                                            @foreach($pegawai as $peg)
                                                <option value="{{$peg->ID}}">{{$peg->namaPegawai}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Jenis
                                        Cek<span class="required">*</span>
                                    </label>

                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select id="jenis" required="required"
                                                class="form-control col-md-7 col-xs-12" name="jenisCek" id="cek"
                                                onclick="changetextbox">
                                            @foreach($jenisCek as $cek)
                                                <option value="{{$cek->id_jenis}}">{{$cek->nama_jenis}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Test Lab<span
                                                class="required">*</span>
                                    </label>

                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select id="testlab" name="idTest" class="form-control col-md-7 col-xs-12"
                                                disabled required="required">
                                            <option value="">Pilih Test</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Hasil Pemeriksaan
                                        <span class="required">*</span>
                                    </label>

                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" required="required"
                                               class="form-control col-md-7 col-xs-12" name="hasilPemeriksaan">
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <button type="submit" class="btn btn-primary">Batal</button>
                                        <button id="send" type="submit" class="btn btn-success">Simpan</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
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
<script>
    $(document).ready(function () {
        $('#jenis').change(function () {
            var id = $(this).val();
            $.ajax({
                url: "getTestLab/" + id,
                type: "GET",
                success: function (html) {
                    data = JSON.parse(html);
                    var n = '';
                    for (val in data) {
                        n += "<option value='" + data[val]['id_test'] + "'>" + data[val]['nama_test'] + "</option>";
                    }
                    $('#testlab').html('<option>Pilih Test</option>' + n);
                    $('#testlab').removeAttr('disabled');
                }
            });
        });
    });
</script>

</body>
</html>
