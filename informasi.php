<?php

  include "atas.php";
?>

<section class="ftco-section">
  <div class="container">
    <marquee behavior="scroll" direction="left">

      <p><img src="images/l3.png"> MOTTO PEMERINTAHAN DESA PALEMBAPANG KECAMATAN KALIANDA <img src="images/l3.png"> "
        MEMBANGUN DESA YANG MAKMUR DAN SEJAHTERA " <img src="images/l3.png"> </p>
    </marquee>
    <div class="row justify-content-center pb-5">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <h2 class="mb-2">SEJARAH DESA</h2>
        <p>Informasi Sejarah Desa Palembapang</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block text-center">

          <div class="media-body p-2">
            <h3 class="heading">PALEMBAPANG</h3>
            <p align="justify">Desa Palembapang adalah Desa transmigrasi yang dibentuk dari satuan pemukiman
              transmigrasi pata tahun 1935 yang berada di wilayah Desa Palembapang, Kecamatan Kalianda Kabupaten Lampung
              Selatan yang penduduknya datang dari Pulau Jawa dan sebagian dari penduduk setempat. Sesuai dengan
              keputusan Pemerintah Kabupaten Lampung Selatan pada tahun 1948 satuan Pemukiman tersebut berubah menjadi
              Desa definitive dengan sebutan Desa Palembapang dengan kepala desa yang bernama Bapak Umar (gelar Dalom
              Mangku Negara). Nama Palembapang berasal dari kata Pelombapang, yang terdiri dari kata "pelom" adalah
              sebutan dari salahsatu buah sejenis mangga yang umumnya disebut Bacang. Kemudian kata "bapang" merujuk
              pada ukuran kepelom yang tidak lazim yang biasanya berukuran kecil tetapi disini lebih besar dari pada
              umumnya. Desa Palembapang memiliki luas area 12.52 Km2. dibawah kaki gunung Rajabasa dengan mayoritas
              pekerjaannya adalah berkebun kopi, cengkeh, sayuran dll.. Berikut ini adalah pejabat yang pernah menjadi
              Kepala Desa Palembapang 4 periode terakhir pada tabel 1.1 berikut ini :
            </p>
            <table class="table table-hover table-bordered">

              <tr>
                <td><b>No</b></td>
                <td><b>Nama</b></td>
                <td><b>Jabatan</b></td>
                <td><b>Periode</b></td>
              </tr>

              <tr>
                <td>1.</td>
                <td>Hendryadi, S.E., M.M.</td>
                <td>Kepala Desa</td>
                <td>2017 - 2023</td>
              </tr>
              <tr>
                <td>2.</td>
                <td>Munsyahril Idris</td>
                <td>Kepala Desa</td>
                <td>2010 - 2016</td>
              </tr>
              <tr>
                <td>3.</td>
                <td>Syaifulloh, M.S., S.H., M.Si.</td>
                <td>Kepala Desa</td>
                <td>1999 - 2010</td>
              </tr>
              <tr>
                <td>4.</td>
                <td>Suhaili Tahir, S.P.</td>
                <td>Kepala Desa</td>
                <td>1998 - 1999</td>
              </tr>
            </table>
            <br>
            <p align="center"><b>Tabel 1.1 Pejabat Kepala Desa Palembapang.<br>
                (Sumber : Arsip Desa Palembapang)</b>


              <?php
    
                      include "admin/config.php";
    

    $sql  = "SELECT * FROM tbl_informasi ";
	$rest = mysqli_query($koneksi,$sql);

	$data = mysqli_fetch_assoc($rest);
	
	 
						?>
            </p>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<?php

  include "bawah.php";
?>