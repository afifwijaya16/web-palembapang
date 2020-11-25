<?php session_start(); ?>
<?php
  include "atas.php";

  include "config.php";
    
 
?>

<?php

 $sql  = "SELECT * FROM tbl_informasi ";
	$rest = mysqli_query($koneksi,$sql);

 $data = mysqli_fetch_assoc($rest);
	


 if(isset($_SESSION['username'])){ 
     
         
         ?>

  <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                   <a href="data_informasi">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">arrow_back</i>
                  </div>
                  <p class="card-category">Home -> Data Informasi -> Edit</p>
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
                  <h4 class="card-title">Edit Data Informasi</h4>
                  <p class="card-category">Silahkan Edit Data</p>
                </div>
                <div class="card-body">
                  <form action="query_edit_informasi" method="post" name="form1_input" enctype="multipart/form-data">
                    <div class="row">
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama File Informasi</label>
                          <input type="text" class="form-control" value="<?php echo $data['nama_file']; ?>" required name="nama_file">
                           
                        </div>
                      </div>
                     <div class="col-md-6">
                        
                          <label class="bmd-label-floating">Upload File Informasi</label><br>
                          <input type="file" name="file" required value="<?php echo $data['pdf']; ?>" >
                        
                      </div>
                    
                    </div>
                   
                   
                    <button type="submit" class="btn btn-primary pull-right">Edit Informasi</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

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