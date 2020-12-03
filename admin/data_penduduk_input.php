<?php session_start(); ?>
<?php
  include "atas.php";

  include "config.php";
    
 
?>

<?php 
$sql=mysqli_query($koneksi,"select * from tb_penduduk order by id_penduduk DESC LIMIT 0,1");
 $data=mysqli_fetch_assoc($sql);
 $kodeawal=substr($data['id_penduduk'],3,4)+1;
 if($kodeawal<10){
  $kode='IP-000'.$kodeawal;
 }elseif($kodeawal > 9 && $kodeawal <=99){
  $kode='IP-00'.$kodeawal;
 }else{
  $kode='IP-00'.$kodeawal;
 }

if(isset($_SESSION['username'])) { ?>

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <a href="data_penduduk">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                <i class="material-icons">arrow_back</i>
              </div>
              <p class="card-category">Home -> Data Penduduk -> Input</p>
              <h3 class="card-title">Kembali</h3>
            </div>
          </a>

        </div>
      </div>
    </div>
  </div>
</div>



<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Input Data Penduduk</h4>
            <p class="card-category">Silahkan Input Data</p>
          </div>
          <div class="card-body">
            <form action="query_input_penduduk" method="post" name="form1_input" enctype="multipart/form-data">
              <div class="row">

                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">NIK</label>
                    <input type="text" class="form-control" required name="nik">

                    <input type="hidden" class="form-control" value="<?php echo $kode; ?>" readonly name="id_penduduk">

                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">KK</label>
                    <input type="text" class="form-control" required name="kk">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Nama</label>
                    <input type="text" class="form-control" required name="nama">
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group">
                    <label class="bmd-label-floating">Tanggal Lahir</label>
                    <input id="datepicker" type="text" class="form-control" name="tanggal_lahir" required>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="bmd-label-floating">Tempat Lahir</label>
                    <input type="text" class="form-control" required name="tempat_lahir">
                  </div>
                </div>
                <div class="col-md-6">
                  <label class="bmd-label-floating">Foto</label><br>
                  <input type="file" name="file" required>

                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="bmd-label-floating">Agama</label>
                    <select class="form-control" name="agama">
                      <option>---- Pilih Agama ----</option>
                      <option value="Islam">Islam</option>
                      <option value="Kristen">Kristen</option>
                      <option value="Katolik">Katolik</option>
                      <option value="Budha">Budha</option>
                      <option value="Hindu">Hindu</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="bmd-label-floating">Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin">
                      <option>---- Pilih Jenis Kelamin ----</option>
                      <option value="Laki - laki">Laki - laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Alamat</label>
                    <input type="text" class="form-control" required name="alamat">
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary pull-right">Input Penduduk</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  $('#datepicker').datepicker({
    uiLibrary: 'bootstrap4'
  });
</script>

<?php } else { ?>
<script language=javascript>
  alert('Login Terlebih Dahulu');
  document.location.href = "login.php";
</script>


<?php } ?>
<?php include "bawah.php"; ?>