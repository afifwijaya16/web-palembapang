<?php session_start(); ?>
<?php include "atas.php"; include "config.php"; ?>

<?php
$sql=mysqli_query($koneksi,"select * from tbl_download order by id_file DESC LIMIT 0,1");
 $data=mysqli_fetch_assoc($sql);
 $kodeawal=substr($data['id_file'],3,4)+1;
 if($kodeawal<10){
  $kode='DL-000'.$kodeawal;
 }elseif($kodeawal > 9 && $kodeawal <=99){
  $kode='DL-00'.$kodeawal;
 }else{
  $kode='DL-00'.$kodeawal;
 }

 if(isset($_SESSION['username'])) {  ?>

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <a href="data_download">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                <i class="material-icons">arrow_back</i>
              </div>
              <p class="card-category">Home -> Data Download -> Input</p>
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
            <h4 class="card-title">Input Data File</h4>
            <p class="card-category">Silahkan Input Data</p>
          </div>
          <div class="card-body">
            <form action="query_input_download" method="post" name="form1_input" enctype="multipart/form-data">
              <div class="row">

                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Nama File</label>
                    <input type="text" class="form-control" required name="nama_file">

                    <input type="hidden" class="form-control" value="<?php echo $kode; ?>" readonly name="id_file">

                  </div>
                </div>


                <div class="col-md-6">

                  <label class="bmd-label-floating">Upload File Download</label><br>
                  <input type="file" name="file" required>

                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Keterangan</label>
                    <input type="text" class="form-control" required name="ket">
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary pull-right">Input Data</button>
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