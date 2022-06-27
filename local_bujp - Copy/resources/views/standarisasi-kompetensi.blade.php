<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Portal Keamanan | Standarisasi Kompetensi Anggota dan Jabatan</title>

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
            <label
            h1 class="m-1">Standariasi Kompetensi Anggota & Jabatan</h1>
          </label>
        
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-warning">
              <div class="card-header">
                <label
                h3 class="card-title">Kriteria Anggota</h3>
              <label>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <div for="teks">1.Lulus Diklat Dasar – Pengamanan
                    </div>
                  </div>
                <div class="form-group">
                    <div for="teks2">2.Mengerti dan dapat mengaplikasikan tentang  Kode Etik, Prinsip dan Janji Satpam.
                    </div>
                  </div>
                <div class="form-group">
                    <div for="teks3">3.Mengerti Tugas Pokok Pengamanan.
                    </div>
                </div>
                <div class="form-group">
                    <div for="teks3">4.Disiplin, Loyalitas & Integritas.
                    </div>
                  </div>
                    <div class="form-group">
                    <div for="teks3">5.Training Gada Pratama (KTA)
                    </div>
                  </div>
                <div class="form-group">
                    <div for="teks3">6.Mengetahui dan dapat melaksanakan SOP yang berlaku
                    </div>
                  </div>
                    <div class="form-group">
                      <div for="teks3">7.Dapat melaksanakan PBB secara benar
                      </div>
                    </div>
                      <div class="form-group">
                        <div for="teks3">8.Dapat terbatas mengoperasionalkan komputer dasar (menghidupkan/mematikan dan word)
                        </div>
                      </div>
                      
                <div class="card-footer">
                  <button  class="btn btn-success">Edit</button>
                    </div>
                </div>
                </form>
              </div>
                <!-- /.card-footer -->

                </div>
                <div class="col-md-6">
                  <!-- general form elements -->
                  <div class="card card-warning">
                    <div class="card-header">
                      <label
                      h3 class="card-title">Kriteria Karu</h3>
                    <label>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                      <div class="card-body">
                        <div class="form-group">
                          <div for="teks">1.Memahami  Kompetensi  sesuai grade yang ada dibawah nya.
                          </div>
                        </div>
                      <div class="form-group">
                          <div for="teks2">2.Mampu mengidentifikasi tugas tugas khusus.
                          </div>
                        </div>
                      <div class="form-group">
                          <div for="teks3">3.Mengerti dan dapat memetakan Tugas Pokok Pengamanan.
                          </div>
                      </div>
                      <div class="form-group">
                          <div for="teks3">4.Telah menjadi Karu Reliever  minimal 2 Thn.
                          </div>
                        </div>
                          <div class="form-group">
                          <div for="teks3">5.Mampu  mengoperasikan komputer (Office).
                          </div>
                        </div>
                      <div class="form-group">
                          <div for="teks3">6.Mampu  menyusun  jadwal mingguan dan bulanan.
                          </div>
                        </div>
                          <div class="form-group">
                            <div for="teks3">7.Mampu merencanakan/mengatur dan membuat rencana pengamanan kegiatan.
                            </div>
                          </div>
                            <div class="form-group">
                              <div for="teks3">8.Mampu melaksanakan penggalangan terbatas thd lingkungan tanggungjawabnya.
                              </div>
                            </div>
                            <div class="form-group">
                              <div for="teks3">9.Mampu berkomunikasi dengan baik secara verbal dan tulisan.
                              </div>
                            </div>
                            <div class="form-group">
                              <div for="teks3">10.Mampu memberikan  materi pelajaran tertentu tentang pengamanan terhadap grade dibawahnya.
                              </div>
                            </div>
                            <div class="form-group">
                              <div for="teks3">11.Dapat mengerjakan kegiatan administrasi.
                              </div>
                            </div>
                            <div class="form-group">
                              <div for="teks3">12.Pernah mengikuti training leadership/ kepemimpinan.
                              </div>
                            </div>
                            
                      <div class="card-footer">
                        <button  class="btn btn-success">Edit</button>
                          </div>
                      </div>
                      </form>
                    </div>
                      <!-- /.card-footer -->
      
                      </div>
              </div>
              <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                  <!-- general form elements -->
                  <div class="card card-warning">
                    <div class="card-header">
                      <label
                      h3 class="card-title">Kriteria Wakasi</h3>
                    <label>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                      <div class="card-body">
                        <div class="form-group">
                          <div for="teks">1.Memahami Kompetensi sesuai grade yang ada dibawah nya.
                          </div>
                        </div>
                      <div class="form-group">
                          <div for="teks2">2.Mampu dan memahami penyusunan rencana operasional pengamanan.
                          </div>
                        </div>
                      <div class="form-group">
                          <div for="teks3">3.Mengerti dan dapat memetakan Tugas Pokok Pengamanan.
                          </div>
                      </div>
                      <div class="form-group">
                          <div for="teks3">4.Telah menjadi Karu Reliever  minimal 2 Thn.
                          </div>
                        </div>
                          <div class="form-group">
                          <div for="teks3">5.Mampu mengoperasikan komputer (Office).
                          </div>
                        </div>
                      <div class="form-group">
                          <div for="teks3">6.Mampu menyusun jadwal mingguan dan bulanan.
                          </div>
                        </div>
                          <div class="form-group">
                            <div for="teks3">7.Mampu merencanakan/mengatur dan membuat rencana pengamanan kegiatan.
                            </div>
                          </div>
                            <div class="form-group">
                              <div for="teks3">8.Mampu melaksanakan penggalangan terbatas terhadap lingkungan tanggungjawabnya.
                              </div>
                            </div>
                            <div class="form-group">
                              <div for="teks3">9.Mampu berkomunikasi dengan baik secara verbal dan tulisan.
                              </div>
                            </div>
                            <div class="form-group">
                              <div for="teks3">10.Mampu memberikan  materi pelajaran tertentu tentang pengamanan terhadap grade dibawahnya.
                              </div>
                            </div>
                            <div class="form-group">
                              <div for="teks3">11.Mampu mengerjakan kegiatan administrasi.
                              </div>
                            </div>
                            <div class="form-group">
                              <div for="teks3">12.Mampu melakukan pembinaan internal dan eksternal.
                              </div>
                            </div>
                            <div class="form-group">
                              <div for="teks3">13. Mampu melaksanakan eksekusi program dan eksekusi atas pelanggaran anggota.
                              </div>
                            </div>
                            <div class="form-group">
                              <div for="teks3">14.Pernah mengikuti training Managerial
                              </div>
                            </div>
                            
                      <div class="card-footer">
                        <button  class="btn btn-success">Edit</button>
                          </div>
                      </div>
                      </form>
                    </div>
                      <!-- /.card-footer -->
      
                      </div>
                      <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-warning">
                          <div class="card-header">
                            <label
                            h3 class="card-title">Kriteria KASI/Section Head of Security</h3>
                          <label>
                          </div>
                          <!-- /.card-header -->
                          <!-- form start -->
                          <form>
                            <div class="card-body">
                              <div class="form-group">
                                <div for="teks">1.Menguasai Kompetensi sesuai grade yang ada dibawah nya.
                                </div>
                              </div>
                            <div class="form-group">
                                <div for="teks2">2.Menguasai bidang managerial , program kerja, evaluasi dan pembinaan.
                                </div>
                              </div>
                            <div class="form-group">
                                <div for="teks3">3.Menguasai  potensi kerawanan.
                                </div>
                            </div>
                            <div class="form-group">
                                <div for="teks3">4.Telah menjadi Kasi Minimal 2 tahun.
                                </div>
                              </div>
                                <div class="form-group">
                                <div for="teks3">5.Menguasai mengoperasikan komputer (Office, power poin).
                                </div>
                              </div>
                            <div class="form-group">
                                <div for="teks3">6.Menguasai menyusun jadwal mingguan dan bulanan.
                                </div>
                              </div>
                                <div class="form-group">
                                  <div for="teks3">7.Menguasai merencanakan/mengatur dan membuat rencana pengamanan kegiatan.
                                  </div>
                                </div>
                                  <div class="form-group">
                                    <div for="teks3">8.Menguasai melaksanakan penggalangan terbatas terhadap lingkungan tanggungjawabnya.
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div for="teks3">9.Mampu berkomunikasi dengan baik secara verbal dan tulisan.
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div for="teks3">10.Mampu memberikan  materi pelajaran tertentu tentang pengamanan terhadap grade dibawahnya.
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div for="teks3">11.Menguasai mengerjakan kegiatan administrasi.
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div for="teks3">12.Menguasai melakukan pembinaan internal dan eksternal.
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div for="teks3">13.Menguasai melaksanakan eksekusi program dan eksekusi atas pelanggaran anggota.
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div for="teks3">14.Pernah mengikuti training Management Skill.

                                    </div>
                                  </div>
                                  
                            <div class="card-footer">
                              <button  class="btn btn-success">Edit</button>
                                </div>
                            </div>
                            </form>
                          </div>
                            <!-- /.card-footer -->
            
                            </div>
                    </div>
                    <div class="row">
                      <!-- left column -->
                      <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-warning">
                          <div class="card-header">
                            <label
                            h3 class="card-title">Kriteria of Security Unit</h3>
                          <label>
                          </div>
                          <!-- /.card-header -->
                          <!-- form start -->
                          <form>
                            <div class="card-body">
                              <div class="form-group">
                                <div for="teks">1.Bisa dijabat oleh SIPIL atau TNI/POLRI.
                                </div>
                              </div>
                            <div class="form-group">
                                <div for="teks2">2.Pernah menjabat Section Head Of Security minimal 3 tahun.
                                </div>
                              </div>
                            <div class="form-group">
                                <div for="teks3">3.Mampu membina jaring formal maupun non formal terbatas.
                                </div>
                            </div>
                            <div class="form-group">
                                <div for="teks3">4.Mudah  berkoordinasi  dan komunikasi kepada unit Head dan departement antar unit.
                                </div>
                              </div>
                                <div class="form-group">
                                <div for="teks3">5.Mampu memberikan masukan dan pertimbangan status siaga 3, 2 dan siaga 1 kepada Head Of Security Kawasan dan Unit Head.
                                </div>
                              </div>
                            <div class="form-group">
                                <div for="teks3">6.Mampu menyesuaikan dan mengaplikasikan pada aspek administrasi perusahaan.
                                </div>
                              </div>
                                <div class="form-group">
                                  <div for="teks3">7.Mampu menjelaskan tentang peta kerawanan pada aspek Kamtibmas di wilayah tugasnya.
                                  </div>
                                </div>
                                  <div class="form-group">
                                    <div for="teks3">8.Telah mengikuti training minimal 5 kali.
                                    </div>
                                  </div>
                                  
                            <div class="card-footer">
                              <button  class="btn btn-success">Edit</button>
                                </div>
                            </div>
                            </form>
                          </div>
                            <!-- /.card-footer -->
            
                            </div>
                            <div class="col-md-6">
                              <!-- general form elements -->
                              <div class="card card-warning">
                                <div class="card-header">
                                  <label
                                  h3 class="card-title">Kriteria Head of Security Kawasan</h3>
                                <label>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form>
                                  <div class="card-body">
                                    <div class="form-group">
                                      <div for="teks">1.Anggota TNI/POLRI :                                      
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div for="teks">-Pernah menjabat pada bidang teritorial  (Dandim, Kapolres)                                       
                                      </div>
                                    </div>
                                  <div class="form-group">
                                      <div for="teks2">-Aktif (masa persiapan pensiun) 
                                      </div>
                                    </div>
                                  <div class="form-group">
                                      <div for="teks3">-Pangkat  minimal Kolonel/Kombes
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div for="teks3">-Pernah menjabat pada bidang teritorial  (Dandim, Kapolres)
                                      </div>
                                    </div>
                                      <div class="form-group">
                                      <div for="teks3">2.Mampu membina jaring formal maupun non formal.
                                      </div>
                                    </div>
                                  <div class="form-group">
                                      <div for="teks3">3.Menguasai pengetahuan pembuatan program pembinaan kesamaptaan dan pembinaan secara periodik.
                                      </div>
                                    </div>
                                      <div class="form-group">
                                        <div for="teks3">4.Menguasai dan mahir menyusun dan melaksanakan  rencana pengamanan kawasan dan unit.
                                        </div>
                                      </div>
                                        <div class="form-group">
                                          <div for="teks3">5.Menguasai dan mahir  dalam menentukan/mengusulkan status kondisi keamanan, disuatu wilayah (siaga 3, 2 dan siaga 1) 
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <div for="teks3">6.Mengusulkan jumlah dan satuan  perkuatan  yang dibutuhkan 
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <div for="teks3">7.Masa jabatan Head Of Kawasan minimal 3 tahun dan dapat diperpanjang sesuai kebutuhan perusahaan.
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <div for="teks3">8.Menjadi jembatan hubungan antara pimpinan keamanan dengan pimpinan TNI - Polri.
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <div for="teks3">9.Mampu menjelaskan tentang peta kerawanan pada aspek IPOLESOSBUD dan Kamtibmas diwilayah tugasnya.
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <div for="teks3">10.Jabatan Head Of Kawasan dapat dijabat oleh Sipil, dikawasan yang Fasos Fasum sudah diserahkan kepada PEMDA dan tidak ada kegiatan pengembangan
                                          </div>
                                        </div>
                                        
                                  <div class="card-footer">
                                    <button  class="btn btn-success">Edit</button>
                                      </div>
                                  </div>
                                  </form>
                                </div>
                                  <!-- /.card-footer -->
                  
                                  </div>
                          </div>
            </div>
    </section>
    
    </div>
      <!-- /.card-body -->
    </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
          
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
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
