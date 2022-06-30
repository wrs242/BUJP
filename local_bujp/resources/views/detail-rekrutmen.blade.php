<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Portal Keamanan | Menambahkan Rekrutmen</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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
    <img class="animation__shake" src="../assets/dist/img/Logo Summarecon.png" alt="SummareconLogo" height="60" width="154">
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
      <img src="../assets/dist/img/Logo Summarecon.png" alt="Summarecon Logo" class="brand-link" width="50%" style="opacity: .8">
      
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
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Detail Rekrutmen</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama Perusahaan  </label>
                        <div>{{$bujp->NAMA_BUJP}}</div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>No. Telp  </label>
                        <div>{{$bujp->TELP_KANTOR}}</div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Tanggal Terima Company Profile  </label>
                        <div>{{$bujp->TGL_TERIMA_COMPANY_PROFILE}}</div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Alamat  </label>
                        <div>{{$bujp->ALAMAT}}</div>
                      </div>
                    </div>
                    
                  </div>

                  <div class="row">
                    <div class="col-sm-2">
                    <div class="form-group">
                        <label>Undangan Presentasi  </label>
                        <div>{{$bujp->UNDANGAN_PRESENTASI}}</div>
                      </div>
                    </div>
                    
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>Tanggal Presentasi</label>
                        <div>{{$bujp->TGL_PRESENTASI}}</div>
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <div class="form-group">
                        <label>Alasan Tidak diundang</label>
                        <div>{{$bujp->ALASAN_TIDAK_DIUNDANG}}</div>
                      </div>
                    </div>
                    
                  </div>

                  <div class="row" >
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
                        <label>Milik Sendiri  </label>
                        <div>{{$bujp->KEPEMILIKAN_KANTOR}}</div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Periode Sewa</label>
                        <div>{{$bujp->PERIODE_SEWA}}</div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label for="FOTO_KANTOR" class="form-label">Foto Kantor  </label>
                        <div class="col-sm-3"><img src="../uploads/rekrutmen/foto_kantor/{{$bujp->FOTO_KANTOR}}" width="100%"></div>
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
                        <label>Akta Pendirian Perusahaan  </label>
                        <div>{{$bujp->AKTA_PENDIRIAN_PERUSAHAAN}}</div>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>Tanggal Pendirian Perusahaan  </label>
                        <div>{{$bujp->TGL_PENDIRIAN}}</div>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>Tanggal Akta Perubahan  </label>
                        <div>{{$bujp->AKTA_PERUBAHAN}}</div>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>No. Notaris  </label>
                        <div>{{$bujp->NO_NOTARIS}}</div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Foto Akta  </label>
                        <div class="col-sm-3"><img src="../uploads/rekrutmen/foto_akta/{{$bujp->FOTO_AKTA}}" width="100%"></div>
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
                        <label>Nomor SIO  </label>
                        <div>{{$bujp->NO_SIO}}</div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Masa Berlaku  </label>
                        <div>{{$bujp->MASA_BERLAKU_SIO}}</div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Foto SIO  </label>
                        <div class="col-sm-3"><img src="../uploads/rekrutmen/foto_sio/{{$bujp->FOTO_AKTA}}" width="100%"></div>
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
                        <label>Status BPJS Ketenaga Kerjaan  </label>
                        <div>{{$bujp->STATUS_BPJS_KETENAGA_KERJAAN}}</div>
                        <option></option>
                          <option>Terdaftar</option>
                          <option>Tidak Terdaftar</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>No. Sertifikat</label>
                        <div>{{$bujp->NO_BPJS_KETENAGA_KERJAAN}}</div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Foto BPJS Ketenaga Kerjaan </label>
                        <div class="col-sm-3"><img src="../uploads/rekrutmen/bpjs_ketenagakerjaan/{{$bujp->FOTO_BPJS_KETENAGA_KERJAAN}}" width="100%"></div>
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
                        <label>Status BPJS Kesehatan  </label>
                        <div>{{$bujp->STATUS_BPJS_KESEHATAN}}</div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>No. Sertifikat</label>
                        <div>{{$bujp->NO_BPJS_KESEHATAN}}</div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Foto BPJS Kesehatan </label>
                        <div class="col-sm-3"><img src="../uploads/rekrutmen/bpjs_kesehatan/{{$bujp->FOTO_BPJS_KESEHATAN}}" width="100%"></div>
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
                        <label>Upload Rekening Koran  </label>
                        <div class="col-sm-3"><img src="../uploads/rekrutmen/rekening_koran/{{$bujp->FOTO_REKENING_KORAN}}" width="100%"></div>
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
                        <label>Mobil Patroli  </label>
                        <div>{{$bujp->MOBIL_PATROLI}}</div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Kepemilikan Mobil  </label>
                        <div>{{$bujp->KEPEMILIKAN_MOBIL}}</div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Motor Patroli  </label>
                        <div>{{$bujp->MOTOR_PATROLI}}</div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Kepemilikan Motor  </label>
                        <div>{{$bujp->KEPEMILIKAN_MOTOR}}</div>
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
                        <div>{{$bujp->PORTO_MALL}}</div>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>Cluster</label>
                        <div>{{$bujp->PORTO_CLUSTER}}</div>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>Apartemen</label>
                        <div>{{$bujp->PORTO_APARTEMEN}}</div>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>Perkantoran</label>
                        <div>{{$bujp->PORTO_PERKANTORAN}}</div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Kawasan</label>
                        <div>{{$bujp->PORTO_KAWASAN}}</div>
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
                          <div>{{$bujp->NAMA_PEJABAT_TNI}}</div>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="form-group">
                          <label>Pangkat</label>
                          <div>{{$bujp->PANGKAT_PEJABAT_TNI}}</div>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="form-group">
                          <label>Jabatan</label>
                          <div>{{$bujp->JABATAN_PEJABAT_TNI}}</div>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="form-group">
                          <label>Status Relasi</label>
                          <div>{{$bujp->RELASI_PEJABAT_TNI}}</div>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label>Foto Pejabat</label>
                          <div class="col-sm-3"><img src="../uploads/rekrutmen/pejabat_tni/{{$bujp->FOTO_PEJABAT_TNI}}" width="100%"></div>
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
                        <div>{{$bujp->NAMA_PEJABAT_POLRI}}</div>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>Pangkat</label>
                        <div>{{$bujp->PANGKAT_PEJABAT_POLRI}}</div>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>Jabatan</label>
                        <div>{{$bujp->JABATAN_PEJABAT_POLRI}}</div>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>Status Relasi</label>
                        <div>{{$bujp->RELASI_PEJABAT_POLRI}}</div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Foto Pejabat</label>
                        <div class="col-sm-3"><img src="../uploads/rekrutmen/pejabat_polri/{{$bujp->FOTO_PEJABAT_POLRI}}" width="100%"></div>
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
                        <label>Bukti Lapor SPT Perusahaan  </label>
                        <div class="col-sm-3"><img src="../uploads/rekrutmen/spt_perusahaan/{{$bujp->SPT_PERUSAHAAN}}" width="100%"></div>
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
                      <h4><strong>Hasil Seleksi Awal</strong>  </h5>
                        <H5>{{$bujp->HASIL_SELEKSI}}</H5>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                  <a href="../{{$bujp->ID_BUJP}}/edit-rekrutmen"><button type="button" class="btn btn-primary">Edit</button></a>
                  <a href="../{{$bujp->ID_BUJP}}/delete-rekrutmen"><button type="button" class="btn btn-danger">Hapus</button></a>
                  <a href="/rekrutmen"><button type="button" class="btn btn-secondary">Kembali</button></a>
                 
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
</body>
</html>
