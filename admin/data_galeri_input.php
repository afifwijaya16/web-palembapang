<?php session_start(); ?>
<?php
  include "atas.php";

  include "config.php";
    
 
?>

<?php
$sql=mysqli_query($koneksi,"select * from tbl_galeri order by id_galeri DESC LIMIT 0,1");
 $data=mysqli_fetch_assoc($sql);
 $kodeawal=substr($data['id_galeri'],3,4)+1;
 if($kodeawal<10){
  $kode='GL-000'.$kodeawal;
 }elseif($kodeawal > 9 && $kodeawal <=99){
  $kode='GL-00'.$kodeawal;
 }else{
  $kode='GL-00'.$kodeawal;
 }

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
                  <p class="card-category">Home -> Data Galeri -> Input</p>
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
                  <h4 class="card-title">Input Data Galeri</h4>
                  <p class="card-category">Silahkan Input Data</p>
                </div>
                <div class="card-body">
                  <form action="query_input_galeri" method="post" name="form1_input" enctype="multipart/form-data">
                    <div class="row">
                      
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Judul Galeri</label>
                          <input type="text" class="form-control" required name="judul">
                            
                            <input type="hidden" class="form-control" value="<?php echo $kode; ?>" readonly name="id_galeri">
                           
                        </div>
                      </div>
                        
                         <div class="col-md-3">
           <div class="form-group">
              
                 <label class="bmd-label-floating">Tanggal Galeri</label>
                          <input id="datepicker" type="text" class="form-control" name="tgl_galeri" required>
                
               
                        </div>
                    </div>
                         <div class="col-md-6">
                        
                          <label class="bmd-label-floating">Upload File Galeri</label><br>
                          <input type="file" name="file" required >
                        
                      </div>
                         <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Deskripsi</label>
                          <input type="text" class="form-control" required name="deskripsi">
                            
                          
                           
                        </div>
                      </div>
                    
                    
                    </div>
                   
                   
                    <button type="submit" class="btn btn-primary pull-right">Input Galeri</button>
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