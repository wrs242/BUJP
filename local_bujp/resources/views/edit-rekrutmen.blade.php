<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portal Keamanan | Menambahkan Rekrutmen</title>

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
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Edit Rekrutmen</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <h6>Isian yang bertanda (<span style="color: red">*</span>) wajib diisi</h6>
                    <form method="POST" action="/store-edit-rekrutmen" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="ID_BUJP" value="{{$bujp->ID_BUJP}}" hidden>
                        <div class="row">
                            <div class="col-sm-3">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Nama Perusahaan <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" name="NAMA_BUJP"
                                        placeholder="Nama Perusahaan" value="{{$bujp->NAMA_BUJP}}" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>No. Telp <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" name="TELP_KANTOR" placeholder="No. Telp"
                                        value="{{$bujp->TELP_KANTOR}}" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Tanggal Terima Company Profile <span style="color: red">*</span></label>
                                    <input type="date" name="TGL_TERIMA_COMPANY_PROFILE" class="form-control"
                                        value="{{$bujp->TGL_TERIMA_COMPANY_PROFILE}}" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Alamat <span style="color: red">*</span></label>
                                    <textarea class="form-control" rows="2" name="ALAMAT" placeholder="Alamat"
                                        required>{{$bujp->ALAMAT}}</textarea>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Undangan Presentasi <span style="color: red">*</span></label>
                                    <select class="form-control" name="UNDANGAN_PRESENTASI" required>
                                        <option>{{$bujp->UNDANGAN_PRESENTASI}}</option>
                                        <option>Ya</option>
                                        <option>Tidak</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Tanggal Presentasi</label>
                                    <input type="date" name="TGL_PRESENTASI" class="form-control"
                                        value="{{$bujp->TGL_PRESENTASI}}">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label>Alasan Tidak diundang</label>
                                    <input type="text" name="ALASAN_TIDAK_DIUNDANG" class="form-control"
                                        placeholder="Alasan" value="{{$bujp->ALASAN_TIDAK_DIUNDANG}}">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <h4><strong>Company Clearance</strong></h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <h5>Status Kantor</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Milik Sendiri <span style="color: red">*</span></label>
                                    <select class="form-control" name="KEPEMILIKAN_KANTOR" required>
                                        <option>{{$bujp->KEPEMILIKAN_KANTOR}}</option>
                                        <option>Ya</option>
                                        <option>Sewa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Periode Sewa</label>
                                    <input type="date" name="PERIODE_SEWA" class="form-control"
                                        value="{{$bujp->PERIODE_SEWA}}">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="FOTO_KANTOR" class="form-label">Upload Foto Kantor</label>
                                    <input type="file" name="FOTO_KANTOR" id="FOTO_KANTOR" class="form-control-file">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <h5>Legalitas Perusahaan</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Akta Pendirian Perusahaan <span style="color: red">*</span></label>
                                    <select name="AKTA_PENDIRIAN_PERUSAHAAN" class="form-control" required>
                                        <option>{{$bujp->AKTA_PENDIRIAN_PERUSAHAAN}}</option>
                                        <option>Ya</option>
                                        <option>Tidak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Tanggal Pendirian Perusahaan <span style="color: red">*</span></label>
                                    <input type="date" name="TGL_PENDIRIAN" class="form-control"
                                        value="{{$bujp->TGL_PENDIRIAN}}" required>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Tanggal Akta Perubahan <span style="color: red">*</span></label>
                                    <input type="date" name="AKTA_PERUBAHAN" class="form-control"
                                        value="{{$bujp->AKTA_PERUBAHAN}}" required>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>No. Notaris <span style="color: red">*</span></label>
                                    <input type="text" name="NO_NOTARIS" class="form-control" placeholder="No. Notaris"
                                        value="{{$bujp->NO_NOTARIS}}" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Upload Foto Akta </label>
                                    <input type="file" name="FOTO_AKTA" class="form-control-file">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <h5>Surat Izin Operasional (SIO)</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Nomor SIO <span style="color: red">*</span></label>
                                    <input type="text" name="NO_SIO" class="form-control" placeholder="no. SIO"
                                        value="{{$bujp->NO_SIO}}" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Masa Berlaku <span style="color: red">*</span></label>
                                    <input type="date" name="MASA_BERLAKU_SIO" class="form-control"
                                        value="{{$bujp->MASA_BERLAKU_SIO}}" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Upload Foto SIO</label>
                                    <input type="file" name="FOTO_SIO" class="form-control-file">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <h5>Sertifikasi BPJS Ketenaga Kerjaan</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Status BPJS Ketenaga Kerjaan <span style="color: red">*</span></label>
                                    <select class="form-control" name="STATUS_BPJS_KETENAGA_KERJAAN" required>
                                        <option>{{$bujp->STATUS_BPJS_KETENAGA_KERJAAN}}</option>
                                        <option>Terdaftar</option>
                                        <option>Tidak Terdaftar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>No. Sertifikat</label>
                                    <input type="text" class="form-control" name="NO_BPJS_KETENAGA_KERJAAN"
                                        placeholder="No. Sertifikat" value="{{$bujp->NO_BPJS_KETENAGA_KERJAAN}}">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Upload Foto BPJS Ketenaga Kerjaan </label>
                                    <input type="file" name="FOTO_BPJS_KETENAGA_KERJAAN" class="form-control-file">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <h5>Sertifikasi BPJS Kesehatan</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Status BPJS Kesehatan <span style="color: red">*</span></label>
                                    <select class="form-control" name="STATUS_BPJS_KESEHATAN" required>
                                        <option>{{$bujp->STATUS_BPJS_KESEHATAN}}</option>
                                        <option>Terdaftar</option>
                                        <option>Tidak Terdaftar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>No. Sertifikat</label>
                                    <input type="text" name="NO_BPJS_KESEHATAN" class="form-control"
                                        placeholder="No. Sertifikat" value="{{$bujp->NO_BPJS_KESEHATAN}}">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Upload Foto BPJS Kesehatan </label>
                                    <input type="file" name="FOTO_BPJS_KESEHATAN" class="form-control-file">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <h5>Rekening Koran 3 Bulan Terakhir</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Upload Rekening Koran</label>
                                    <input type="file" name="FOTO_REKENING_KORAN" class="form-control-file">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <h5>Kendaraan Operasional</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Mobil Patroli <span style="color: red">*</span></label>
                                    <input type="number" name="MOBIL_PATROLI" class="form-control" min="0"
                                        value="{{$bujp->MOBIL_PATROLI}}" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Kepemilikan Mobil <span style="color: red">*</span></label>
                                    <select class="form-control" name="KEPEMILIKAN_MOBIL" required>
                                        <option>{{$bujp->KEPEMILIKAN_MOBIL}}</option>
                                        <option>Milik Pribadi</option>
                                        <option>Sewa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Motor Patroli <span style="color: red">*</span></label>
                                    <input type="number" name="MOTOR_PATROLI" class="form-control" min="0"
                                        value="{{$bujp->MOTOR_PATROLI}}" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Kepemilikan Motor <span style="color: red">*</span></label>
                                    <select name="KEPEMILIKAN_MOTOR" class="form-control" required>
                                        <option>{{$bujp->KEPEMILIKAN_MOTOR}}</option>
                                        <option>Milik Pribadi</option>
                                        <option>Sewa</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <h5>Portofolio Perusahaan</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Mall</label>
                                    <input type="text" name="PORTO_MALL" placeholder="Mall A, Mall B, Mall C"
                                        class="form-control" value="{{$bujp->PORTO_MALL}}">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Cluster</label>
                                    <input type="text" name="PORTO_CLUSTER"
                                        placeholder="Cluster A, Cluster B, Cluster C" class="form-control"
                                        value="{{$bujp->PORTO_CLUSTER}}">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Apartemen</label>
                                    <input type="text" name="PORTO_APARTEMEN"
                                        placeholder="Apartemen A, Apartemen B, Apartemen C" class="form-control"
                                        value="{{$bujp->PORTO_APARTEMEN}}">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Perkantoran</label>
                                    <input type="text" name="PORTO_PERKANTORAN"
                                        placeholder="Kantor A, Kantor B, Kantor C" Class="form-control"
                                        value="{{$bujp->PORTO_PERKANTORAN}}">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Kawasan</label>
                                    <input type="text" name="PORTO_KAWASAN"
                                        placeholder="Kawasan A, Kawasan B, Kawasan C" Class="form-control"
                                        value="{{$bujp->PORTO_KAWASAN}}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <h5>Jaringan TNI</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Nama Pejabat</label>
                                    <input type="text" name="NAMA_PEJABAT_TNI" placeholder="Nama Pejabat"
                                        class="form-control" value="{{$bujp->NAMA_PEJABAT_TNI}}">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Pangkat</label>
                                    <input type="text" name="PANGKAT_PEJABAT_TNI" placeholder="Pangkat"
                                        class="form-control" value="{{$bujp->NAMA_PEJABAT_TNI}}">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Jabatan</label>
                                    <input type="text" name="JABATAN_PEJABAT_TNI" placeholder="Jabatan"
                                        class="form-control" value="{{$bujp->JABATAN_PEJABAT_TNI}}">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Status Relasi</label>
                                    <input type="text" name="RELASI_PEJABAT_TNI" placeholder="Status Relasi"
                                        class="form-control" value="{{$bujp->RELASI_PEJABAT_TNI}}">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Upload foto Pejabat</label>
                                    <input type="file" name="FOTO_PEJABAT_TNI" class="form-control-file">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <h5>Jaringan Polri</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Nama Pejabat</label>
                                    <input type="text" name="NAMA_PEJABAT_POLRI" placeholder="Nama Pejabat"
                                        class="form-control" value="{{$bujp->NAMA_PEJABAT_POLRI}}">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Pangkat</label>
                                    <input type="text" name="PANGKAT_PEJABAT_POLRI" placeholder="Pangkat"
                                        class="form-control" value="{{$bujp->PANGKAT_PEJABAT_POLRI}}">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Jabatan</label>
                                    <input type="text" name="JABATAN_PEJABAT_POLRI" placeholder="Jabatan"
                                        class="form-control" value="{{$bujp->JABATAN_PEJABAT_POLRI}}">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Status Relasi</label>
                                    <input type="text" name="RELASI_PEJABAT_POLRI" placeholder="Status Relasi"
                                        class="form-control" value="{{$bujp->RELASI_PEJABAT_POLRI}}">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Upload foto Pejabat</label>
                                    <input type="file" name="FOTO_PEJABAT_POLRI" class="form-control-file">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <h5>SPT Perusahaan</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Bukti Lapor SPT Perusahaan</label>
                                    <input type="file" name="SPT_PERUSAHAAN" class="form-control-file">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-12">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <h4><strong>Hasil Seleksi Awal</strong> <span style="color: red">*</span></h5>
                                        <select class="form-control" name="HASIL_SELEKSI" required>
                                            <option>{{$bujp->HASIL_SELEKSI}}</option>
                                            <option>Lulus</option>
                                            <option>Tidak Lulus</option>
                                        </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="button" class="btn btn-secondary">Kembali</button>
                        </div>
                    </form>
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
</body>

</html>
