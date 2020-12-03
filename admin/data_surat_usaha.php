<?php session_start(); ?>
<?php include "atas.php";include "config.php"; ?>
<?php if(isset($_SESSION['username'])) { ?>
<div class="wrapper ">
  <div class="sidebar" data-color="purple" data-background-color="white" data-image="assets/img/sidebar-1.jpg">
    <div class="logo">
      <a href="" class="simple-text logo-normal">
        MENU
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="home">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#penduduksub" data-toggle="collapse" aria-expanded="false" class="nav-link">
            <i class="material-icons">supervised_user_circle</i>
            <p>Data Kependudukan</p>
          </a>
          <ul class="collapse list-unstyled" id="penduduksub">
            <li class="nav-item">
              <a class="nav-link" href="data_adminis">Data Administrasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="data_penduduk">Data Penduduk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="grafik_penduduk">
                Grafik Penduduk
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#publikasisub" data-toggle="collapse" aria-expanded="false" class="nav-link">
            <i class="material-icons">supervised_user_circle</i>
            <p>Publikasi</p>
          </a>
          <ul class="collapse list-unstyled" id="publikasisub">
            <li class="nav-item">
              <a class="nav-link" href="data_informasi">Informasi Desa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="data_galeri">Galeri Desa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="data_berita">
                <p>Berita Desa</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item active">
          <a href="#layanansuratsub" data-toggle="collapse" aria-expanded="false" class="nav-link">
            <i class="material-icons">book</i>
            <p>Layanan Surat</p>
          </a>
          <ul class="nav collapse list-unstyled" id="layanansuratsub">
            <li class="nav-item">
              <a class="nav-link" href="data_pengaduan">Pengaduan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="data_download">
                <p>Download Surat</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="data_buat_surat">
                <p>Buat Surat</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="data_surat_izin_keramaian">
                <p>Surat Izin Keramaian</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="data_surat_kematian">
                <p>Surat Kematian</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="data_surat_domisili">
                <p>Surat Domisili</p>
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="data_surat_usaha">
                <p>Surat Izin Usaha</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="logout">
            <i class="material-icons">settings_power</i>
            <p>Log Out</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
      <div class="container-fluid">
        <div class="navbar-wrapper">
          <a class="navbar-brand" href="#pablo">Dashboard Sistem Informasi Desa</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon icon-bar"></span>
          <span class="navbar-toggler-icon icon-bar"></span>
          <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">
        </div>
      </div>
    </nav>
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary" align="center">
                <h4 class="card-title ">Data Surat Izin Usaha </h4>
                <p class="card-category"> Data Buat Surat Dari Masyarakat</p>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th align="center">
                        NIK
                      </th>
                      <th align="center">
                        Nama Lengkap
                      </th>
                      <th align="center">
                        Nama usaha
                      </th>
                      <th align="center">
                        Alamat Usaha
                      </th>
                      <th align="center">
                        Keterangan Usaha
                      </th>
                      <th align="center">
                        Jumlah Modal
                      </th>
                      <th align="center">
                        KTP
                      </th>
                      <th align="center">
                        Tools
                      </th>
                    </thead>
                    <tbody>
                      <?php $sql  = "SELECT * FROM surat_usaha ORDER BY nik ";
	                          $rest = mysqli_query($koneksi,$sql);
                            while($data = mysqli_fetch_assoc($rest) ) { ?>
                      <tr>
                        <td align="center"> <?php echo $data['nik'];?></td>
                        <td align="center"> <?php echo $data['nama'];?></td>
                        <td align="center"> <?php echo $data['nama_usaha'];?></td>
                        <td align="center"> <?php echo $data['alamat'];?></td>
                        <td align="center"> <?php echo $data['keterangan_usaha'];?></td>
                        <td align="center"> Rp. <?php echo number_format($data['jumlah_modal_usaha']) ;?></td>
                        <td align="center">
                          <a href="../<?php echo $data['file_surat']; ?>" target="_blank">
                            <img src="../<?php echo $data['file_surat']; ?>" class="col-sm-6 img-thumbnail" />
                          </a>
                        </td>
                        <td align="center">
                          <a href="confirm_hapus_buat_surat_usaha?id=<?php echo $data['id_surat_usaha']?>">
                            <button type="button" rel="tooltip" title="Hapus Data"
                              class="btn btn-danger btn-link btn-sm">
                              <i class="material-icons">close</i>
                            </button>
                          </a>
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="container-fluid">
        <p>Desa Palembapang, Kecamatan Kalianda, Kabupaten Lampung Selatan, Provinsi Lampung, Indonesia</p>
      </div>
    </footer>
  </div>
</div>
<?php } else { ?>
    <script language=javascript>
    alert('Login Terlebih Dahulu');
    document.location.href = "login.php";
    </script>
<?php } ?>
<?php include "bawah.php"; ?>