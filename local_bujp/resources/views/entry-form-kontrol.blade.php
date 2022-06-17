<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Portal Keamanan | Menambahkan Form Kontrol</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="assets/dist/img/Logo Summarecon.png" alt="SummareconLogo" height="60" width="154">
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
      <img src="assets/dist/img/Logo Summarecon.png" alt="Summarecon Logo" class="brand-link" width="50%" style="opacity: .8">
      
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
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
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
            <h1 class="m-0">Data BUJP</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Menambah Data BUJP</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form>
                <div class="row">
                  <div class="col-sm-4">
                      <div class="form-group">
                        <label>Nama BUJP</label>
                        <select class="form-control select2bs4" style="width: 100%;">
                        <option>PT. A</option>
                        <option>PT. B</option>
                        <option>PT. C</option>
                        <option>PT. D</option>
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
                        <label>Lokasi</label>
                        <select class="form-control select2bs4" style="width: 100%;">
                        <option>Jakarta barat</option>
                        <option>Jakarta Timur</option>
                        <option>Jakarta Utara</option>
                        <option>Jakarta Selatan</option>
                  </select>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-3">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Awal Kontrak</label>
                        <input type="date" class="form-control" readonly>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Akhir Kontrak</label>
                        <input type="date" class="form-control" readonly>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Periode Kontrol</label>
                        <input type="Text" class="form-control" placeholder="Periode Kontrol" readonly>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Jumlah Personel</label>
                        <input type="number" class="form-control" placeholder="Jumlah Personel" readonly>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                  <div class="col-sm-3">
                    <h5><strong>Item Kontrol</strong></h5>
                  </div>
                  </div>

                  <div class="row">
                  <div class="col-sm-3">
                    <h6><strong>1. SDM</strong></h6>
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3" >
                      <div class="form-group" style="margin: 0; position: absolute; top: 50%; -ms-transform: translateY(-50%); transform: translateY(-50%);">
                        <label>a. Kehadiran (Terlambat/Tidak Hadir)</label>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Standar Tender (Sesuai SPK)</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Realisasi</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Tindakan</label>
                        <input type="text" class="form-control" placeholder="Kosongkan jika tidak ada">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3">
                      <div class="form-group" style="margin: 0; position: absolute; top: 50%; -ms-transform: translateY(-50%); transform: translateY(-50%);">
                        <label>b. Pergantian Anggota</label>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Standar Tender (Sesuai SPK)</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Realisasi</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Tindakan</label>
                        <input type="text" class="form-control" placeholder="Kosongkan jika tidak ada">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                  <div class="col-sm-3" >
                    <h6><strong>2. Administrasi</strong></h6>
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3">
                      <div class="form-group" style="margin: 0; position: absolute; top: 50%; -ms-transform: translateY(-50%); transform: translateY(-50%);">
                        <label>a. Invoice (Lampiran lengkap diterima finance)</label>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Standar Tender (Sesuai SPK)</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Realisasi</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Tindakan</label>
                        <input type="text" class="form-control" placeholder="Kosongkan jika tidak ada">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3" >
                      <div class="form-group" style="margin: 0; position: absolute; top: 50%; -ms-transform: translateY(-50%); transform: translateY(-50%);">
                        <label>b. Giro/Cek (Diterima BUJP)</label>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Standar Tender (Sesuai SPK)</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Realisasi</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Tindakan</label>
                        <input type="text" class="form-control" placeholder="Kosongkan jika tidak ada">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                  <div class="col-sm-3">
                    <h6><strong>3. Pembayaran Gaji</strong></h6>
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3">
                      <div class="form-group" style="margin: 0; position: absolute; top: 50%; -ms-transform: translateY(-50%); transform: translateY(-50%);">
                        <label>a. Take Home Pay</label>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Standar Tender (Sesuai SPK)</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Realisasi</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Tindakan</label>
                        <input type="text" class="form-control" placeholder="Kosongkan jika tidak ada">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3">
                      <div class="form-group" style="margin: 0; position: absolute; top: 50%; -ms-transform: translateY(-50%); transform: translateY(-50%);">
                        <label>b. Realisasi</label>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Standar Tender (Sesuai SPK)</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Realisasi</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Tindakan</label>
                        <input type="text" class="form-control" placeholder="Kosongkan jika tidak ada">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                  <div class="col-sm-3">
                    <h6><strong>4. Perlengkapan</strong></h6>
                    <label> Sebutkan yang tidak ada/rusak</label>
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3">
                      <div class="form-group" style="margin: 0; position: relative; top: 60%; -ms-transform: translateY(-50%); transform: translateY(-50%);">
                      <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Standar Tender (Sesuai SPK)</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Realisasi</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Tindakan</label>
                        <input type="text" class="form-control" placeholder="Kosongkan jika tidak ada">
                      </div>
                    </div>
                  </div>

                
                  <div class="row">
                  <div class="col-sm-3">
                    <h6><strong>5. Kejadian</strong></h6>
                    <label> Sebutkan Kejadian yang terjadi di bulan ini</label>
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group" style="margin: 0; position: relative; top: 60%; -ms-transform: translateY(-50%); transform: translateY(-50%);">
                      <input type="text" class="form-control" placeholder="Kejadian A, Kejadian B, Kejadian C">
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
</body>
</html>
