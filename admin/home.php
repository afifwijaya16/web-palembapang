<?php session_start(); ?>

<?php

 include "atas.php";
 include "config.php";
?>



<?php



 if(isset($_SESSION['username'])){ 
     
         
           
         
         ?>




  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="assets/img/sidebar-1.jpg">
     
      <div class="logo">
        <a href="" class="simple-text logo-normal">
          MENU
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="home">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
            
          <li class="nav-item ">
            <a class="nav-link" href="data_informasi">
             <i class="material-icons">credit_card</i>
              <p>Informasi Desa</p>
            </a>
          </li>
            <li class="nav-item ">
            <a class="nav-link" href="data_galeri">
              <i class="material-icons">account_balance</i>
              <p>Galeri Desa</p>
            </a>
          </li>
            <li class="nav-item ">
            <a class="nav-link" href="data_adminis">
              <i class="material-icons">description</i>
              <p>Data Administratif</p>
            </a>
          </li>
            <li class="nav-item ">
            <a class="nav-link" href="data_pengaduan">
              <i class="material-icons">book</i>
              <p>Pengaduan</p>
            </a>
          </li>
            <li class="nav-item ">
            <a class="nav-link" href="data_download">
              <i class="material-icons">get_app</i>
              <p>Download Surat</p>
            </a>
          </li>
            <li class="nav-item ">
            <a class="nav-link" href="data_berita">
              <i class="material-icons">dns</i>
              <p>Berita Desa</p>
            </a>
          </li>
          <!-- <li class="nav-item ">
            <a class="nav-link" href="data_buat_surat">
              <i class="material-icons">article</i>
              <p>Buat Surat</p>
            </a>
            </li> -->
            <li class="nav-item ">
          <a class="nav-link" href="data_surat_izin_keramaian">
            <i class="material-icons">article</i>
            <p>Surat Izin Keramaian</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="data_surat_kematian">
            <i class="material-icons">article</i>
            <p>Surat Kematian</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="data_surat_domisili">
            <i class="material-icons">article</i>
            <p>Surat Domisili</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="data_surat_usaha">
            <i class="material-icons">article</i>
            <p>Surat Izin Usaha</p>
          </a>
        </li>
              <li class="nav-item ">
            <a class="nav-link" href="grafik_penduduk">
              <i class="material-icons">addchart</i>
              <p>Grafik Penduduk</p>
               </a>
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
            <a class="navbar-brand" href="#pablo">Dashboard Sistem Informasi Desa Palembapang</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                   <a href="data_informasi">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">credit_card</i>
                  </div>
                  <p class="card-category">Data Input</p>
                  <h4 class="card-title">Data Informasi</h4>
                </div>
                  </a>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">credit_card</i>
                    Pengolahan Data Informasi...
                  </div>
                </div>
              </div>
            </div>
              
              
               <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                   <a href="data_galeri">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">account_balance</i>
                  </div>
                  <p class="card-category">Data Input</p>
                  <h4 class="card-title">Data Galeri Desa</h4>
                </div>
                  </a>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">credit_card</i>
                    Pengolahan Data Galeri...
                  </div>
                </div>
              </div>
            </div>
              
               <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                   <a href="data_adminis">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">description</i>
                  </div>
                  <p class="card-category">Data Input</p>
                  <h4 class="card-title">Data Administratif</h4>
                </div>
                  </a>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">credit_card</i>
                    Pengolahan Data Administratif...
                  </div>
                </div>
              </div>
            </div>
              
              
              <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                   <a href="data_pengaduan">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">book</i>
                  </div>
                  <p class="card-category">Data View</p>
                  <h4 class="card-title">Data Pengaduan</h4>
                </div>
                  </a>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">credit_card</i>
                    Pengolahan Data Pengaduan...
                  </div>
                </div>
              </div>
            </div>
              
              <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                   <a href="data_download">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">get_app</i>
                  </div>
                  <p class="card-category">Data Input</p>
                  <h4 class="card-title">Data Download</h4>
                </div>
                  </a>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">credit_card</i>
                    Pengolahan Data Download...
                  </div>
                </div>
              </div>
            </div>
              
              
              <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                   <a href="data_download">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">dns</i>
                  </div>
                  <p class="card-category">Data Input</p>
                  <h4 class="card-title">Berita Di Desa</h4>
                </div>
                  </a>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">credit_card</i>
                    Pengolahan Berita Desa...
                  </div>
                </div>
              </div>
            </div>
              
             <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                   <a href="data_buat_surat">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">article</i>
                  </div>
                  <p class="card-category">Data View</p>
                  <h4 class="card-title">Data Buat Surat</h4>
                </div>
                  </a>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">credit_card</i>
                    Pengolahan Buat Surat...
                  </div>
                </div>
              </div>
            </div>
              
               <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                   <a href="grafik_penduduk">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">addchart</i>
                  </div>
                  <p class="card-category">Data View</p>
                  <h4 class="card-title">Grafik Penduduk</h4>
                </div>
                  </a>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">credit_card</i>
                    Lihat Grafik Penduduk...
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



<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Karyawan", "Surat Masuk","Surat Keluar","Bongkar Muat"],
				datasets: [{
					label: 'Data',
					data: [
					<?php 
					$j1 = mysqli_query($koneksi,"select * from tbl_arsip where jenis_arsip='ak'");
					echo mysqli_num_rows($j1);
					?>, 
					<?php 
					$j2 = mysqli_query($koneksi,"select * from tbl_arsip where jenis_arsip='sm'");
					echo mysqli_num_rows($j2);
					?>,
                    <?php 
					$j3 = mysqli_query($koneksi,"select * from tbl_arsip where jenis_arsip='sk'");
					echo mysqli_num_rows($j3);
					?>,
                    <?php 
					$j4 = mysqli_query($koneksi,"select * from tbl_arsip where jenis_arsip='bk'");
					echo mysqli_num_rows($j4);
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
                    'rgba(26, 99, 132, 0.2)',
                    'rgba(187, 99, 132, 0.2)',
                    'rgba(140, 99, 132, 0.2)'
										],
					borderColor: [
					'rgba(255,99,132,1)',
                    'rgba(100,99,132,1)',
                    'rgba(7,99,132,1)',
					'rgba(54, 162, 235, 1)'
					],
					borderWidth: 1
				}
                          ]
                
			},
			options: {
				scales: {
						yAxes: [{
						scaleLabel: {
                            display: true,
                            labelString: 'Jumlah'
                        }
					}],
					xAxes: [{
						scaleLabel: {
                            display: true,
                            labelString: 'Jenis Arsip'
                        }
					}]
				}
			}
		});
	</script>

<?php





 } 
else
 {
    ?>
<script language=javascript>
	alert('Login Terlebih Dahulu');
    document.location.href="login.php";
    </script> 
        
        
        <?php
     
 }
?>
                 


  <?php
   include "bawah.php";
?>