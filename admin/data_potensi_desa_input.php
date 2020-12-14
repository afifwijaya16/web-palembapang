<?php session_start(); ?>
<?php
  include "atas.php";

  include "config.php";
    
 
?>

<?php 

if(isset($_SESSION['username'])) { ?>

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <a href="data_potensi_desa">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                <i class="material-icons">arrow_back</i>
              </div>
              <p class="card-category">Home -> Data Potensi Desa -> Input</p>
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
            <h4 class="card-title">Input Data Potensi Desa</h4>
            <p class="card-category">Silahkan Input Data</p>
          </div>
          <div class="card-body">
            <form action="query_input_potensi_desa" method="post" name="form1_input" enctype="multipart/form-data">
              <div class="row">

                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Area Wisata</label>
                    <input type="text" class="form-control" required name="area_wisata">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Keberadaan</label>
                    <input type="text" class="form-control" required name="keberadaan">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Luas</label>
                    <input type="text" class="form-control" required name="luas">
                  </div>
                </div>

                
                <div class="col-md-6">
                  <label class="bmd-label-floating">Foto</label><br>
                  <input type="file" name="file" required>

                </div>
                
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Pemanfaatan</label>
                    <input type="text" class="form-control" required name="pemanfaatan">
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