<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portal Keamanan | Menambahkan StakeHolder Wilayah</title>

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
            <section class="content">
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">Edit Stakeholder Wilayah</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <h6>Isian yang bertanda (<span style="color: red">*</span>) wajib diisi</h6>

                        <form action="/store-edit-stakeholder" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="text" name="ID_STAKEHOLDER" value="{{$stakeholder->ID_STAKEHOLDER}}" hidden>
                            <div class="row">
                                <div class="col-sm-4">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>Kawasan <span style="color: red">*</span></label>
                                        <input type="text" class="form-control" name="KAWASAN" placeholder="Wilayah"
                                            value="{{$stakeholder->KAWASAN}}" required>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Wilayah <span style="color: red">*</span></label>
                                        <input type="text" class="form-control" placeholder="Wilayah" name="WILAYAH"
                                            value="{{$stakeholder->WILAYAH}}" required>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Instansi <span style="color: red">*</span></label>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" placeholder="Instansi"
                                                    name="INSTANSI" value="{{$stakeholder->INSTANSI}}">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control"
                                                    placeholder="Wilayah Hukum Instansi" name="WILAYAH_HUKUM"
                                                    value="{{$stakeholder->WILAYAH_HUKUM}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Alamat Instansi <span style="color: red">*</span></label>
                                        <textarea class="form-control" rows="2" placeholder="Alamat"
                                            name="ALAMAT_INSTANSI" required>{{$stakeholder->ALAMAT_INSTANSI}}</textarea>
                                    </div>
                                </div>
                            </div>


                            <table class="table table-borderless m-0 p-0">
                                <tr>
                                    <th colspan="2" class="text-center">
                                        <h5><strong>Pejabat Lama</strong></h5>
                                    </th>
                                    <th colspan="2" class="text-center">
                                        <h5><strong>Pejabat Baru</strong></h5>
                                    </th>
                                </tr>
                                <tr class="">

                                    <td class="col-3">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" placeholder="Nama"
                                                name="NAMA_P_LAMA" value="{{$stakeholder->NAMA_P_LAMA}}">
                                        </div>
                                    </td>
                                    <td rowspan="5" class="col-3"><img id="PREVIEW_P_LAMA" alt="PREVIEW_P_LAMA"
                                            src="../uploads/stakeholder/pejabat_lama/{{$stakeholder->FOTO_P_LAMA}}"
                                            width="100%"></td>
                                    <td class="col-3">
                                        <div class="form-group">
                                            <label>Nama <span style="color: red">*</span></label>
                                            <input type="text" class="form-control" placeholder="Nama"
                                                name="NAMA_P_BARU" value="{{$stakeholder->NAMA_P_BARU}}" required>
                                        </div>
                                    </td>
                                    <td rowspan="5" class="col-3"><img id="PREVIEW_P_BARU" alt="PREVIEW_P_BARU"
                                            src="../uploads/stakeholder/pejabat_baru/{{$stakeholder->FOTO_P_BARU}}"
                                            width="100%"></td>
                                </tr>
                                <tr>
                                    <td class="col-3">
                                        <div class="form-group">
                                            <label>Pangkat</label>
                                            <input type="text" class="form-control" placeholder="Pangkat"
                                                name="PANGKAT_P_LAMA" value="{{$stakeholder->PANGKAT_P_LAMA}}">
                                        </div>
                                    </td>
                                    <td class="col-3">
                                        <div class="form-group">
                                            <label>Pangkat <span style="color: red">*</span></label>
                                            <input type="text" class="form-control" placeholder="Pangkat"
                                                name="PANGKAT_P_BARU" value="{{$stakeholder->PANGKAT_P_BARU}}" required>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-3">
                                        <div class="form-group">
                                            <label>Periode Jabatan</label>
                                            <div class="row">
                                                <div class="form-group col-sm-6">
                                                    <label>Awal</label>
                                                    <input type="date" class="form-control" name="MULAI_MENJABAT_P_LAMA"
                                                        value="{{$stakeholder->MULAI_MENJABAT_P_LAMA}}">
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label>Akhir</label>
                                                    <input type="date" class="form-control" name="AKHIR_MENJABAT_P_LAMA"
                                                        value="{{$stakeholder->AKHIR_MENJABAT_P_LAMA}}">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="col-3">
                                        <div class="form-group">
                                            <label>Periode Jabatan</label>
                                            <div class="row">
                                                <div class="form-group col-sm-6">
                                                    <label>Awal <span style="color: red">*</span></label>
                                                    <input type="date" class="form-control" name="AKHIR_MENJABAT_P_BARU"
                                                        value="{{$stakeholder->AKHIR_MENJABAT_P_BARU}}" required>
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label>Akhir <span style="color: red">*</span></label>
                                                    <input type="date" class="form-control" name="MULAI_MENJABAT_P_BARU"
                                                        value="{{$stakeholder->MULAI_MENJABAT_P_BARU}}" required>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-3">
                                        <div class="form-group">
                                            <label>Jumlah Personel</label>
                                            <input type="text" class="form-control" placeholder="Jumlah Personel"
                                                name="JUMLAH_PERSONEL_P_LAMA"
                                                value="{{$stakeholder->JUMLAH_PERSONEL_P_LAMA}}">
                                        </div>
                                    </td>
                                    <td class="col-3">
                                        <div class="form-group">
                                            <label>Jumlah Personel <span style="color: red">*</span></label>
                                            <input type="text" class="form-control" placeholder="Jumlah Personel"
                                                name="JUMLAH_PERSONEL_P_BARU"
                                                value="{{$stakeholder->JUMLAH_PERSONEL_P_BARU}}" required>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-3">
                                        <div class="form-group">
                                            <label>Lokasi Tugas Baru</label>
                                            <input type="text" class="form-control" placeholder="Lokasi Tugas Baru"
                                                name="LOKASI_TUGAS_BARU_P_LAMA"
                                                value="{{$stakeholder->LOKASI_TUGAS_BARU_P_LAMA}}">
                                        </div>
                                    </td>
                                    <td class="col-3">
                                        <div class="form-group">
                                            <label>Lokasi Tugas Lama</label>
                                            <input type="text" class="form-control" placeholder="Lokasi Tugas Lama"
                                                name="LOKASI_TUGAS_LAMA_P_BARU"
                                                value="{{$stakeholder->LOKASI_TUGAS_LAMA_P_BARU}}">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-3">
                                        <div class="form-group">
                                            <label>Tahun Angkatan</label>
                                            <input type="text" class="form-control" placeholder="Tahun Angkatan"
                                                name="TAHUN_ANGKATAN_P_LAMA"
                                                value="{{$stakeholder->TAHUN_ANGKATAN_P_LAMA}}">
                                        </div>
                                    </td>
                                    <td class="col-3">
                                        <input type="file" placeholder="Upload Foto" id="FOTO_P_LAMA"
                                            name="FOTO_P_LAMA">
                                    </td>
                                    <td class="col-3">
                                        <div class="form-group">
                                            <label>Tahun Angkatan <span style="color: red">*</span></label>
                                            <input type="text" class="form-control" placeholder="Tahun Angkatan"
                                                name="TAHUN_ANGKATAN_P_BARU"
                                                value="{{$stakeholder->TAHUN_ANGKATAN_P_BARU}}" required>
                                        </div>
                                    </td>
                                    <td class="col-3">
                                        <input type="file" placeholder="Upload Foto" id="FOTO_P_BARU"
                                            name="FOTO_P_BARU">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-3">
                                        <div class="form-group">
                                            <label>No. Telp</label>
                                            <input type="text" class="form-control" placeholder="No. Telp"
                                                name="TELP_P_LAMA" value="{{$stakeholder->TELP_P_LAMA}}">
                                        </div>
                                    </td>
                                    <td class="col-3"></td>
                                    <td class="col-3">
                                        <div class="form-group">
                                            <label>No. Telp <span style="color: red">*</span></label>
                                            <input type="text" class="form-control" placeholder="No. Telp"
                                                name="TELP_P_BARU" value="{{$stakeholder->TELP_P_BARU}}" required>
                                        </div>
                                    </td>
                                </tr>
                            </table>


                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="button" class="btn btn-secondary">Kembali</button>
                            </div>

                        </form>
                    </div>

                </div>
        </div>
        <!-- /.card-body -->



        <!-- /.content -->

        </section>
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
    <script type="text/javascript">
        $(document).ready(function (e) {


            $('#FOTO_P_LAMA').change(function () {

                let reader = new FileReader();

                reader.onload = (e) => {

                    $('#PREVIEW_P_LAMA').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);

            });

        });

    </script>
    <script type="text/javascript">
        $(document).ready(function (e) {


            $('#FOTO_P_BARU').change(function () {

                let reader = new FileReader();

                reader.onload = (e) => {

                    $('#PREVIEW_P_BARU').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);

            });

        });

    </script>
</body>

</html>
