<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portal Keamanan | Menambahkan penilaian tahunan</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="assets/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="assets/plugins/summernote/summernote-bs4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="assets/dist/img/Logo Summarecon.png" alt="SummareconLogo" height="60"
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
                    <img src="assets/dist/img/Logo Summarecon.png" alt="Summarecon Logo" class="brand-link" width="50%"
                        style="opacity: .8">

                </a>
            </div>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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
                            <h1 class="m-0">Penilaian Tahunan</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="container-fluid">
                <div class="row">
                    <section class="col-lg-10 connectedSortable">
                        <div class="card card-warning">
                            <div class="card-header">
                                <h3 class="card-title">Menambah Data Penilaian Tahunan</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form method="POST" action="/tambah-penilaian-tahunan" name="penilaian_tahunan">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Nama BUJP <span style="color: red">*</span></label>
                                                <select class="form-control select2bs4" style="width: 100%;"
                                                    name="ID_BUJP" required>
                                                    @foreach ($filter_bujp as $item)

                                                    <option value="{{$item->ID_BUJP}}">{{$item->NAMA_BUJP}}</option>

                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Unit</label>
                                                <select class="form-control select2bs4" style="width: 100%;">
                                                    <option>Corporate</option>
                                                    <option>Summarecon Bekasi</option>
                                                    <option>Summarecon Serpong</option>
                                                    <option>Summarecon Bogor</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Objek Pengamanan</label>
                                                <select class="form-control select2bs4" style="width: 100%;">
                                                    <option>Kantor A</option>
                                                    <option>Cluster B</option>
                                                    <option>Mall C</option>
                                                    <option>Kawasan D</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Awal Kontrak</label>
                                                <input type="date" class="form-control" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Akhir Kontrak</label>
                                                <input type="date" class="form-control" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Jumlah Personel</label>
                                                <input type="number" class="form-control" placeholder="Jumlah Personel"
                                                    readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4><strong>Schedule VS Realisasi</strong></h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <label>Pelaksanaan Pekerjaan Terhadap Schedule <br> - Nilai 3 jika on
                                                schedule <br> - Nilai 2 jika 1 - 2 kali tidak on schedule <br> - Nilai 1
                                                jika lebih dari 2 kali tidak on schedule</label>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <label>Nilai <span style="color: red">*</span></label>
                                                <input type="number" class="form-control nilai" placeholder="Nilai"
                                                    min="1" max="3" name="NILAI_SCHEDULE" id="NILAI_SCHEDULE" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <label>Bobot</label>
                                                <input type="number" class="form-control" value="3"
                                                    name="BOBOT_SCHEDULE" id="BOBOT_SCHEDULE" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <label>Nilai X Bobot</label>
                                                <input type="number" class="form-control" name="N_X_B_SCHEDULE"
                                                    id="N_X_B_SCHEDULE" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Keterangan</label>
                                                <input type="text" class="form-control" placeholder="Keterangan"
                                                    name="KETERANGAN_SCHEDULE" id="KETERANGAN_SCHEDULE">
                                            </div>
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4><strong>Kinerja / Kualitas Pekerjaan</strong></h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <label>Hasil Pekerjaan <br>- Nilai 3 jika hasil Pekerjaan Memuaskan <br> -
                                                Nilai 2 jika hasil pekerjaan cukup memuaskan <br> - Nilai 1 jika hasil
                                                pekerjaan tidak memuaskan</label>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <label>Nilai <span style="color: red">*</span></label>
                                                <input type="number" class="form-control nilai" placeholder="Nilai"
                                                    min="1" max="3" name="NILAI_KINERJA" id="NILAI_KINERJA" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <label>Bobot</label>
                                                <input type="number" class="form-control" value="4" name="BOBOT_KINERJA"
                                                    id="BOBOT_KINERJA" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <label>Nilai X Bobot</label>
                                                <input type="number" class="form-control" name="N_X_B_KINERJA"
                                                    id="N_X_B_KINERJA" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Keterangan</label>
                                                <input type="text" class="form-control" placeholder="Keterangan"
                                                    name="KETERANGAN_KINERJA" id="KETERANGAN_KINERJA">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4><strong>Target Pengamanan</strong></h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <label>Tercapai, Tertib, Lancar, Aman, dan Rasa Nyaman <br>- Nilai 3 jika
                                                hasil pekerjaan memuaskan (tidak ada keributan & Kejadian tindak
                                                pidana)<br> - Nilai 2 jika hasil pekerjaan cukup memuaskan (terjadi
                                                keributan) <br> - Nilai 1 jika hasil pekerjaan kurang memuaskan (terjadi
                                                keributan dan tindak pidana)</label>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <label>Nilai <span style="color: red">*</span></label>
                                                <input type="number" class="form-control nilai" placeholder="Nilai"
                                                    min="1" max="3" name="NILAI_TARGET_PENGAMANAN"
                                                    id="NILAI_TARGET_PENGAMANAN" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <label>Bobot</label>
                                                <input type="number" class="form-control" value="5"
                                                    name="BOBOT_TARGET_PENGAMANAN" id="BOBOT_TARGET_PENGAMANAN"
                                                    readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <label>Nilai X Bobot</label>
                                                <input type="number" class="form-control" name="N_X_B_TARGET_PENGAMANAN"
                                                    id="N_X_B_TARGET_PENGAMANAN" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Keterangan</label>
                                                <input type="text" class="form-control" placeholder="Keterangan"
                                                    name="KETERANGAN_TARGET_PENGAMANAN"
                                                    id="KETERANGAN_TARGET_PENGAMANAN">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4><strong>Pelanggaran / Indisipliner</strong></h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <label>Lalai, Tertidur, Sering Tidak Masuk, Narkoba, Mabuk, Perselisihan dan
                                                PP. Pasal 41 <br>- Nilai 3 jika hasil pekerjaan memuaskan(tidak ada
                                                pelanggaran)<br> - Nilai 2 jika hasil pekerjaan cukup memuaskan (Lalai,
                                                tertidur, Perselisihan 1-2 orang) <br> - Nilai 1 jika hasil pekerjaan
                                                kurang memuaskan (Terdapat pelanggaran 1-3 orang Lalai, Tertidur, Sering
                                                Tidak Masuk & Terdapat 1 Orang pengedar, pengguna narkoba dan PP Pasal
                                                41)</label>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <label>Nilai <span style="color: red">*</span></label>
                                                <input type="number" class="form-control nilai" placeholder="Nilai"
                                                    min="1" max="3" name="NILAI_PELANGGARAN" id="NILAI_PELANGGARAN"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <label>Bobot</label>
                                                <input type="number" class="form-control" value="4"
                                                    name="BOBOT_PELANGGARAN" id="BOBOT_PELANGGARAN" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <label>Nilai X Bobot</label>
                                                <input type="number" class="form-control" name="N_X_B_PELANGGARAN"
                                                    id="N_X_B_PELANGGARAN" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Keterangan</label>
                                                <input type="text" class="form-control" placeholder="Keterangan"
                                                    name="KETERANGAN_PELANGGARAN" id="KETERANGAN_PELANGGARAN">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4><strong>SDM / Petugas</strong></h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <label>Jumlah petugas/personil (sesuai kontrak/perjanjian pekerjaan) <br>-
                                                <br> - Nilai 2 jika jumlah personil kurang 1 dari kontrak <br> - Nilai 1
                                                jika jumlah personil kurang 2 atau lebih dari kontrak</label>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <label>Nilai <span style="color: red">*</span></label>
                                                <input type="number" class="form-control nilai" placeholder="Nilai"
                                                    min="1" max="3" name="NILAI_SDM" id="NILAI_SDM" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <label>Bobot</label>
                                                <input type="number" class="form-control" value="4" name="BOBOT_SDM"
                                                    id="BOBOT_SDM" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <label>Nilai X Bobot</label>
                                                <input type="number" class="form-control" name="N_X_B_SDM"
                                                    id="N_X_B_SDM" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Keterangan</label>
                                                <input type="text" class="form-control" name="KETERANGAN_SDM"
                                                    id="KETERANGAN_SDM" placeholder="Keterangan">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4><strong>Kehadiran</strong></h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <label>Kehadiran Anggota yang Dibuktikan Dengan Absensi <br>- Nilai 3 jika
                                                kehadiran anggota 100 %<br> - Nilai 2 jika kehadiran anggota 95 % -
                                                kurang dari 100 % <br> - Nilai 1 jika kehadiran anggota kurang dari 95
                                                %</label>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <label>Nilai <span style="color: red">*</span></label>
                                                <input type="number" class="form-control nilai" placeholder="Nilai"
                                                    min="1" max="3" name="NILAI_KEHADIRAN" id="NILAI_KEHADIRAN"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <label>Bobot</label>
                                                <input type="number" class="form-control" value="5"
                                                    name="BOBOT_KEHADIRAN" id="BOBOT_KEHADIRAN" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <label>Nilai X Bobot</label>
                                                <input type="number" class="form-control" name="N_X_B_KEHADIRAN"
                                                    id="N_X_B_KEHADIRAN" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Keterangan</label>
                                                <input type="text" class="form-control" placeholder="Keterangan"
                                                    name="KETERANGAN_KEHADIRAN" id="KETERANGAN_KEHADIRAN">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4><strong>Alat-alat Kerja</strong></h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <label>Jumlah Alat-alat Kerja <br>- Nilai 3 jika jumlah alat kerja sesuai
                                                kontrak<br> - Nilai 2 jika jumlah alat kerja kurang 1 dari kontrak <br>
                                                - Nilai 1 jika jumlah alat kerja kurang 2 atau lebih dari
                                                kontrak</label>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <label>Nilai <span style="color: red">*</span></label>
                                                <input type="number" class="form-control nilai" placeholder="Nilai"
                                                    min="1" max="3" name="NILAI_ALAT_ALAT_KERJA"
                                                    id="NILAI_ALAT_ALAT_KERJA" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <label>Bobot</label>
                                                <input type="number" class="form-control" value="3"
                                                    name="BOBOT_ALAT_ALAT_KERJA" id="BOBOT_ALAT_ALAT_KERJA" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <label>Nilai X Bobot</label>
                                                <input type="number" class="form-control" name="N_X_B_ALAT_ALAT_KERJA"
                                                    id="N_X_B_ALAT_ALAT_KERJA" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Keterangan</label>
                                                <input type="text" class="form-control" placeholder="Keterangan"
                                                    name="KETERANGAN_ALAT_ALAT_KERJA" id="KETERANGAN_ALAT_ALAT_KERJA">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4><strong>Ketepatan Laporan</strong></h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <label>Ketepatan memberikan laporan <br>- Nilai 3 jika laporan on
                                                schedule<br> - Nilai 2 jika laporan terlambat 1 hari <br> - Nilai 1 jika
                                                laporan terlambat lebih dari 1 hari</label>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <label>Nilai <span style="color: red">*</span></label>
                                                <input type="number" class="form-control nilai" placeholder="Nilai"
                                                    min="1" max="3" name="NILAI_KETEPATAN_LAPORAN"
                                                    id="NILAI_KETEPATAN_LAPORAN" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <label>Bobot</label>
                                                <input type="number" class="form-control" value="2"
                                                    name="BOBOT_KETEPATAN_LAPORAN" id="BOBOT_KETEPATAN_LAPORAN"
                                                    readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <label>Nilai X Bobot</label>
                                                <input type="number" class="form-control" name="N_X_B_KETEPATAN_LAPORAN"
                                                    id="N_X_B_KETEPATAN_LAPORAN" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Keterangan</label>
                                                <input type="text" class="form-control" placeholder="Keterangan"
                                                    name="KETERANGAN_KETEPATAN_LAPORAN"
                                                    id="KETERANGAN_KETEPATAN_LAPORAN">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4><strong>Komplain</strong></h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <label>Jumlah Komplain yang Masuk/Bulan <br>- Nilai 3 jika jumlah komplain =
                                                0<br> - Nilai 2 jika jumlah komplain = 1 <br> - Nilai 1 jika jumlah
                                                komplain lebih dari 1</label>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <label>Nilai <span style="color: red">*</span></label>
                                                <input type="number" class="form-control nilai" placeholder="Nilai"
                                                    min="1" max="3" name="NILAI_KOMPLAIN" id="NILAI_KOMPLAIN" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <label>Bobot</label>
                                                <input type="number" class="form-control" value="2"
                                                    name="BOBOT_KOMPLAIN" id="BOBOT_KOMPLAIN" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <label>Nilai X Bobot</label>
                                                <input type="number" class="form-control" name="N_X_B_KOMPLAIN"
                                                    id="N_X_B_KOMPLAIN" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Keterangan</label>
                                                <input type="text" class="form-control" placeholder="Keterangan"
                                                    name="KETERANGAN_KOMPLAIN" id="KETERANGAN_KOMPLAIN">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4><strong>Administrasi</strong></h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <label>Ketepatan Penyelesaian Administrasi (Berita Acara , Invoice & Gaji ke
                                                Anggota) <br>- Nilai 3 jika jumlah komplain = 0 (Administrasi tepat
                                                waktu)<br> - Nilai 2 jika jumlah komplain = 1 (Keterlambatan
                                                penyelesaian administrasi 1-7 hari) <br> - Nilai 1 jika jumlah komplain
                                                lebih dari 1 (Administrasi tidak tepat waktu, keterlambatan penggajian,
                                                pengajuan invoice, faktur pajak tidak lengkap dan BPJS)</label>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <label>Nilai <span style="color: red">*</span></label>
                                                <input type="number" class="form-control nilai" placeholder="Nilai"
                                                    min="1" max="3" name="NILAI_ADMINISTRASI" id="NILAI_ADMINISTRASI"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <label>Bobot</label>
                                                <input type="number" class="form-control" value="2"
                                                    name="BOBOT_ADMINISTRASI" id="BOBOT_ADMINISTRASI" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <label>Nilai X Bobot</label>
                                                <input type="number" class="form-control" value=""
                                                    name="N_X_B_ADMINISTRASI" id="N_X_B_ADMINISTRASI" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Keterangan</label>
                                                <input type="text" class="form-control" placeholder="Keterangan"
                                                    name="KETERANGAN_ADMINISTRASI" id="KETERANGAN_ADMINISTRASI">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="button" class="btn btn-danger">Reset</button>
                                        <button type="button" class="btn btn-secondary">Kembali</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </section>
                    <section class="col-lg-2 connectedSortable">
                        <div class="card card-warning">
                            <div class="card-header">
                                <h6 class="card-title">Kejadian Selama Tahun ini</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">


                                </div>
                            </div>
                    </section>
                </div>
                <!-- /.content -->
            </div>
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
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)

    </script>
    <!-- Bootstrap 4 -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="assets/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="assets/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="assets/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="assets/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="assets/plugins/moment/moment.min.js"></script>
    <script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="assets/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/dist/js/adminlte.js"></script>
    <!-- Select2 -->
    <script src="assets/plugins/select2/js/select2.full.min.js"></script>

    <script>
        function hitung() {
            let NILAI_SCHEDULE = $("#NILAI_SCHEDULE").val();
            let BOBOT_SCHEDULE = $("#BOBOT_SCHEDULE").val();
            let N_X_B_SCHEDULE = NILAI_SCHEDULE * BOBOT_SCHEDULE;
            $("#N_X_B_SCHEDULE").val(N_X_B_SCHEDULE);

            let NILAI_KINERJA = $("#NILAI_KINERJA").val();
            let BOBOT_KINERJA = $("#BOBOT_KINERJA").val();
            let N_X_B_KINERJA = NILAI_KINERJA * BOBOT_KINERJA;
            $("#N_X_B_KINERJA").val(N_X_B_KINERJA);

            let NILAI_TARGET_PENGAMANAN = $("#NILAI_TARGET_PENGAMANAN").val();
            let BOBOT_TARGET_PENGAMANAN = $("#BOBOT_TARGET_PENGAMANAN").val();
            let N_X_B_TARGET_PENGAMANAN = NILAI_TARGET_PENGAMANAN * BOBOT_TARGET_PENGAMANAN;
            $("#N_X_B_TARGET_PENGAMANAN").val(N_X_B_TARGET_PENGAMANAN);

            let NILAI_PELANGGARAN = $("#NILAI_PELANGGARAN").val();
            let BOBOT_PELANGGARAN = $("#BOBOT_PELANGGARAN").val();
            let N_X_B_PELANGGARAN = NILAI_PELANGGARAN * BOBOT_PELANGGARAN;
            $("#N_X_B_PELANGGARAN").val(N_X_B_PELANGGARAN);

            let NILAI_SDM = $("#NILAI_SDM").val();
            let BOBOT_SDM = $("#BOBOT_SDM").val();
            let N_X_B_SDM = NILAI_SDM * BOBOT_SDM;
            $("#N_X_B_SDM").val(N_X_B_SDM);

            let NILAI_KEHADIRAN = $("#NILAI_KEHADIRAN").val();
            let BOBOT_KEHADIRAN = $("#BOBOT_KEHADIRAN").val();
            let N_X_B_KEHADIRAN = NILAI_KEHADIRAN * BOBOT_KEHADIRAN;
            $("#N_X_B_KEHADIRAN").val(N_X_B_KEHADIRAN);

            let NILAI_ALAT_ALAT_KERJA = $("#NILAI_ALAT_ALAT_KERJA").val();
            let BOBOT_ALAT_ALAT_KERJA = $("#BOBOT_ALAT_ALAT_KERJA").val();
            let N_X_B_ALAT_ALAT_KERJA = NILAI_ALAT_ALAT_KERJA * BOBOT_ALAT_ALAT_KERJA;
            $("#N_X_B_ALAT_ALAT_KERJA").val(N_X_B_ALAT_ALAT_KERJA);

            let NILAI_KETEPATAN_LAPORAN = $("#NILAI_KETEPATAN_LAPORAN").val();
            let BOBOT_KETEPATAN_LAPORAN = $("#BOBOT_KETEPATAN_LAPORAN").val();
            let N_X_B_KETEPATAN_LAPORAN = NILAI_KETEPATAN_LAPORAN * BOBOT_KETEPATAN_LAPORAN;
            $("#N_X_B_KETEPATAN_LAPORAN").val(N_X_B_KETEPATAN_LAPORAN);

            let NILAI_KOMPLAIN = $("#NILAI_KOMPLAIN").val();
            let BOBOT_KOMPLAIN = $("#BOBOT_KOMPLAIN").val();
            let N_X_B_KOMPLAIN = NILAI_KOMPLAIN * BOBOT_KOMPLAIN;
            $("#N_X_B_KOMPLAIN").val(N_X_B_KOMPLAIN);

            let NILAI_ADMINISTRASI = $("#NILAI_ADMINISTRASI").val();
            let BOBOT_ADMINISTRASI = $("#BOBOT_ADMINISTRASI").val();
            let N_X_B_ADMINISTRASI = NILAI_ADMINISTRASI * BOBOT_ADMINISTRASI;
            $("#N_X_B_ADMINISTRASI").val(N_X_B_ADMINISTRASI);
        }
        $(function () {
            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            });



            $(".nilai").on("change keyup", hitung)


        })

    </script>
</body>

</html>
