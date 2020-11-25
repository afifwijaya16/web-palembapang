<?php

  include "atas.php";
?>

<section class="ftco-section">
      <div class="container">
           <marquee behavior="scroll" direction="left">
        
    <p><img src="images/l3.png">  MOTTO PEMERINTAHAN DESA PALEMBAPANG KECAMATAN KALIANDA <img src="images/l3.png">  " MEMBANGUN DESA YANG MAKMUR DAN SEJAHTERA " <img src="images/l3.png"> </p> 
    </marquee>
      	<div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-3">GALERI DESA</h2>
            <p>Berikut Ini adalah Foto-foto Kegiatan Desa Palembapang <br> Selamat Menjelajah Galeri Desa Palembapang</p>
          </div>
        </div>
        <div class="row">
            <?php include "admin/config.php"; $sql  = "SELECT * FROM tbl_galeri ORDER BY tgl_galeri "; $rest = mysqli_query($koneksi,$sql); while($data = mysqli_fetch_assoc($rest) ) {  ?>
            
        	<div class="col-lg-6 col-md-6 d-flex mb-sm-6 ftco-animate">
        		<div class="staff">
                    <a href="admin/<?php echo $data['gambar'];?>" target="_blank">
                        <div href="#" class="block-20" style="background-image: url('admin/<?php echo $data['gambar'];?>');"></div>
		              </a>
                        </a>
      				<div class="info text-center">
      					<h3><a href="#"><?php echo $data['judul'];?></a></h3>
      					<span class="position">Admin,<?php echo date('D-M-Y', strtotime(str_replace('-', '/',  $data['tgl_galeri'])));?> </span>
      					<div class="text">
	        				<p align="justify"><?php echo $data['deskripsi'];?></p>
	        				
	        			</div>
      				</div>
        		</div>
        	</div>
            
            
           <?php } ?>
            
        </div>
      </div>
    </section>



<?php

  include "bawah.php";
?>