<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portal Keamanan | Menambahkan BUJP</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../assets/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../assets/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../assets/plugins/summernote/summernote-bs4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="../assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="../assets/dist/img/Logo Summarecon.png" alt="SummareconLogo" height="60"
                width="154">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
            </ul>

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-5">
            <!-- Brand Logo -->
            <div class="image">
                <a href="{{ url('dashboard') }}" class="brand-link">
                    <img src="../assets/dist/img/Logo Summarecon.png" alt="Summarecon Logo" class="brand-link"
                        width="50%" style="opacity: .8">

                </a>
            </div>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="{{ url('dashboard') }}" class="nav-link active">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Outsourcing Keamanan
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('rekrutmen') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Rekrutmen</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('bujp') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data BUJP</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('stakeholder') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Stakeholder wilayah</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('penilaian-tahunan') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Penilaian Tahunan</p>
                                    </a>
                                </li>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('form-kontrol') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Form Kontrol Operasional</p>
                            </a>
                        </li>
                    </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Pedoman Keamanan
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ url('aanwijzing') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Pedoman Aanwijzing</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('standarisasi-kompetensi') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Standarisasi Kompetensi Anggota & Jabatan</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('standarisasi-promosi') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Standarisasi Promosi</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('standarisasi-rekrutmen') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Standarisasi Rekrutmen</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('standarisasi-proses-tagihan') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Standarisasi Proses Tagihan</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('form-jabatan-security') }}" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>Form Jabatan Security</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('form-promosi-jabatan') }}" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>Form Promosi Jabatan</p>
                        </a>
                    </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"></h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->


            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Kontrak <strong>{{$filter_bujp[$ID_BUJP]->NAMA_BUJP}}</strong></h3>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <form method="GET" action="/store-kontrak">
                        <input type="hidden" value="{{$filter_bujp[$ID_BUJP]->ID_BUJP}}" name="ID_BUJP">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Awal Kontrak</label>
                                    <input type="date" class="form-control" name="AWAL_KONTRAK">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Akhir Kontrak</label>
                                    <input type="date" class="form-control" name="AKHIR_KONTRAK">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Tahun Kontrak ke</label>
                                    <input type="number" class="form-control" name="TAHUN_KONTRAK">
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Kontrak ke</label>
                                    <input type="number" class="form-control" name="KONTRAK_KE">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>No. SPK</label>
                                    <input type="text" class="form-control" placeholder="No. SPK" name="NO_SPK">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Upload SPK</label>
                                    <input type="file" class="form-control" name="UPLOAD_SPK">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Adendum</label>
                                    <select class="custom-select" name="ADENDUM">
                                        <option>Adendum</option>
                                        <option>Tidak Adendum</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Keterangan Adendum</label>
                                    <input type="text" class="form-control" placeholder="Kosongkan jika tidak ada"
                                        name="KETERANGAN_ADENDUM">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                </div>

                </form>
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Awal Kontrak</th>
                                <th>Akhir Kontrak</th>
                                <th>Tahun Kontrak</th>
                                <th>Kontrak ke</th>
                                <th>Adendum</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($filter_kontrak as $kontrak)
                            <tr>
                                <td>{{$kontrak->AWAL_KONTRAK}}</td>
                                <td>{{$kontrak->AKHIR_KONTRAK}}</td>
                                <td>{{$kontrak->TAHUN_KONTRAK}}</td>
                                <td>{{$kontrak->KONTRAK_KE}}</td>
                                <td>{{$kontrak->ADENDUM}}</td>

                            </tr>

                            @empty
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>

                            </tr>
                            @endforelse

                    </table>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.2.0
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)

    </script>
    <!-- Bootstrap 4 -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="../assets/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="../assets/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="../assets/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="../assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../assets/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../assets/plugins/moment/moment.min.js"></script>
    <script src="../assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="../assets/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../assets/dist/js/adminlte.js"></script>
    <!-- Select2 -->
    <script src="../assets/plugins/select2/js/select2.full.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../assets/plugins/jszip/jszip.min.js"></script>
    <script src="../assets/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../assets/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "responsive": true,
            });


        })

    </script>
    <script type="text/javascript">

    </script>
</body>

</html>
