<?php session_start(); ?>
<?php
  include "atas.php";

  include "config.php";
    
 
?>

<?php

$id_galeri = $_GET['id'];
  $sql=mysqli_query($koneksi,"select * from tbl_galeri where id_galeri='$id_galeri'");
 $data=mysqli_fetch_assoc($sql);
 
 if(isset($_SESSION['username'])){ 
     
         
         ?>

  <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                   <a href="data_galeri">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">arrow_back</i>
                  </div>
                  <p class="card-category">Home -> Data Galeri -> Edit</p>
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
                  <h4 class="card-title">Edit Data Galeri</h4>
                  <p class="card-category">Silahkan Edit Data</p>
                </div>
                <div class="card-body">
                  <form action="query_edit_galeri" method="post" name="form1_input" enctype="multipart/form-data">
                    <div class="row">
                      
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Judul Galeri</label>
                          <input type="text" class="form-control" required name="judul" value="<?php echo $data['judul']; ?>" >
                            
                            <input type="hidden" class="form-control" value="<?php echo $data['id_galeri']; ?>" readonly name="id_galeri">
                           
                        </div>
                      </div>
                        
                         <div class="col-md-3">
           <div class="form-group">
              
                 <label class="bmd-label-floating">Tanggal Galeri</label>
                          <input id="datepicker" type="text" class="form-control" name="tgl_galeri" required value="<?php echo $data['tgl_galeri']; ?>">
                
               
                        </div>
                    </div>
                         <div class="col-md-6">
                        
                          <label class="bmd-label-floating">Upload File Galeri</label><br>
                          <input type="file" name="file" required value="<?php echo $data['gambar']; ?>">
                        
                      </div>
                         <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Deskripsi</label>
                          <input type="text" class="form-control" required name="deskripsi" value="<?php echo $data['deskripsi']; ?>">
                            
                          
                           
                        </div>
                      </div>
                    
                    
                    </div>
                   
                   
                    <button type="submit" class="btn btn-primary pull-right">Edit Galeri</button>
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