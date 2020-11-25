<!DOCTYPE html>
<html lang="en">

<head>
  <title>Desa Palembapang</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="images/palembapang.png" rel="icon" type="image/png">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">


  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <a href="https://wa.me/62895802430058?text= Selamat Datang di Customer Service Desa Palembapang" class="action-btn">
    <span class="ion ion-ios-chatboxes" style="font-size: 40px;margin: 10px"></span>
  </a>
 <!--
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-primary ftco-navbar-light" sy id="ftco-navbar">
    
  </nav>
  END nav -->
<nav class="navbar sticky-top  navbar-expand-lg navbar-dark bg-primary" style="z-index:999;">
  <div class="container">
      <a class="navbar-brand" href="index"><img src="images/palembapang.png" width="50px" height="50px" />
        Desa<span>Palembapang</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a href="index" class="nav-link">Home</a>
          </li>
          <li class="nav-item active"><a href="berita" class="nav-link">Berita Desa</a></li>
          <li class="nav-item active">
            <div class="dropdown nav-item active">
              <a class="nav-link" style="background-color: transparent;border:transparent;padding: 12px 1rem;" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Informasi
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item btn-sm" href="informasi">Sejarah</a>
                <a class="dropdown-item btn-sm" href="visimisi">Visi Misi</a>
                <?php include "admin/config.php"; $sql  = "SELECT * FROM tbl_informasi "; $rest = mysqli_query($koneksi,$sql); $data = mysqli_fetch_assoc($rest); ?>
                <a class="dropdown-item btn-sm" href="admin/<?php echo $data['pdf'];?>">Profile Desa</a>
              </div>
            </div>
          </li>
          <li class="nav-item active"><a href="galeri" class="nav-link">Galeri Desa</a></li>
          <li class="nav-item active"><a href="data" class="nav-link">Data Administratif</a></li>
          <li class="nav-item active"><a href="pengaduan" class="nav-link">Pengaduan</a></li>
          <li class="nav-item active">
            <div class="dropdown nav-item active">
              <a class="nav-link" style=" background-color: transparent;padding: 12px 1rem;" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Layanan Surat
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item btn-sm" href="prosedur">Prosedur Buat Surat Online</a>
                <a class="dropdown-item btn-sm" href="download">Download Blanko Surat</a>
                  <!-- <a class="dropdown-item btn-sm" href="buat_surat">Buat Surat Online</a> -->
                  <a class="dropdown-item btn-sm" href="surat_izin_keramaian">Surat Izin Keramaian</a>
                  <a class="dropdown-item btn-sm" href="surat_kematian">Surat Kematian</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
</nav>
  <section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url('images/bannerdesa.jpg'); height:500px">
      <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text align-items-center" data-scrollax-parent="true">
          <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Berita Desa</h1>
            <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Halaman ini berisi berita ,
              informasi dan pengumuman yang ada di Desa</p>
            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="berita"
                class="btn btn-primary px-4 py-3" style="background: #1976d2">Berita Desa</a></p>
          </div>
        </div>
      </div>
    </div>


    <div class="slider-item" style="background-image: url('images/bannerlogo.jpg'); height:500px">
      <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text align-items-center" data-scrollax-parent="true">
          <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Halaman Admin</h1>
            <p class="mb-4">Halaman ini khusus untuk perangkat Desa</p>
            <p><a href="admin/login" class="btn btn-primary px-4 py-3" style="background: #1976d2">Halaman Admin</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>