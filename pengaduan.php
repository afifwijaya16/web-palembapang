<?php

  include "atas.php";
?>

<?php
include "admin/config.php";
$sql=mysqli_query($koneksi,"select * from tbl_pengaduan order by id_pengaduan DESC LIMIT 0,1");
 $data=mysqli_fetch_assoc($sql);
 $kodeawal=substr($data['id_pengaduan'],3,4)+1;
 if($kodeawal<10){
  $kode='SR-000'.$kodeawal;
 }elseif($kodeawal > 9 && $kodeawal <=99){
  $kode='SR-00'.$kodeawal;
 }else{
  $kode='SR-00'.$kodeawal;
 } ?>

<section class="ftco-section contact-section ftco-degree-bg">
  <div class="container">
    <marquee behavior="scroll" direction="left">

      <p><img src="images/l3.png"> MOTTO PEMERINTAHAN DESA PALEMBAPANG KECAMATAN KALIANDA <img src="images/l3.png"> "
        MEMBANGUN DESA YANG MAKMUR DAN SEJAHTERA " <img src="images/l3.png"> </p>
    </marquee>
    <div class="row d-flex mb-5 contact-info">
      <div class="col-md-12 mb-4 text-center">
        <h2 class="h4 text-primary">PENGADUAN MASYARAKAT</h2>
        <p> Laporan Pengaduan Masyarakat Dapat Menghubungi
      </div>
      <div class="w-100"></div>
      <div class="col-md-3">
        <p><span>Address:</span> <br>Kantor Desa atau Rumah Staff Desa Terdekat</br> </p>
      </div>
      <div class="col-md-3">
        <p><span>Phone:</span> <a href="tel://1234567920"> <br>085269754025 / 081385555173 </br></a></p>
      </div>
      <div class="col-md-3">
        <p><span>Email:</span> <a href="mailto:info@yoursite.com">desapalembapang@gmail.com</a></p>
      </div>
      <div class="col-md-3">
        <p><span>Website</span> <a href="#">www.desapalembapang.com</a></p>
      </div>
    </div>
    <div class="col-md-12 mb-4 text-center">
      <h2 class="h4 text-primary">DAPAT JUGA UPLOAD KEJADIAN PADA KOLOM DIBAWAH INI</h2>
    </div>

    <div class="w-100"></div>
    <div class="row block-12">
      <div class="col-md-12 pr-md-5 bg-info">
        <form action="query_input_pengaduan" method="post" name="form1_input" enctype="multipart/form-data">
          <div class="row">

            <div class="col-md-4 text-white">
              <div class="form-group">
                <label class="bmd-label-floating">Nama Pelapor</label>
                <?php include "admin/config.php"; $sql  = "SELECT * FROM tb_penduduk ORDER BY nik "; $rest = mysqli_query($koneksi,$sql); while($data = mysqli_fetch_assoc($rest) ) {  ?>
                <select class="form-control" name="nama">
                  <option>---- Pilih Penduduk ----</option>
                  <option value="<?php echo $data['nama'];?>"><?php echo $data['nik'];?> - <?php echo $data['nama'];?>
                  </option>
                </select>
                <?php } ?>
                <input type="hidden" class="form-control" value="<?php echo $kode; ?>" readonly name="id_pengaduan">

              </div>
            </div>

            <div class="col-md-4 text-white">
              <div class="form-group">
                <label class="bmd-label-floating">Tanggal Kejadian</label>
                <input type="text" class="form-control" name="tgl" readonly value="<?php echo date('d-m-Y');?>">
              </div>
            </div>
            <div class="col-md-4 text-white">
              <label class="bmd-label-floating">Upload File Bukti</label><br>
              <input type="file" name="file" required>
            </div>
            <div class="col-md-12 text-white">
              <div class="form-group">
                <label class="bmd-label-floating">Deskripsi/Keterangan Kejadian</label>
                <input type="text" class="form-control" required name="deskripsi">
              </div>
            </div>
          </div>


          <button type="submit" class="btn btn-danger pull-right"> Kirim Informasi</button>
          <div class="clearfix"></div>
        </form>
      </div>


    </div>
  </div>
</section>





<?php

  include "bawah.php";
?>