<?php

  include "atas.php";
?>


<section class="ftco-section">
  <div class="container">
    <marquee behavior="scroll" direction="left">

      <p><img src="images/l3.png"> MOTTO PEMERINTAHAN DESA PALEMBAPANG KECAMATAN KALIANDA <img src="images/l3.png"> "
        MEMBANGUN DESA YANG MAKMUR DAN SEJAHTERA " <img src="images/l3.png"> </p>
    </marquee>

    <div class="row">
      <div class="col-md-8 text-center heading-section ftco-animate">
        <h2 class="mb-3">BERITA DESA</h2>
        <p align="center">Selamat Menjelajah Berita Desa Pemerintah Desa Palembapang</p>
        <div class="row">


          <?php
                            
                            include "admin/config.php";
                            $sql  = "SELECT * FROM tbl_berita ORDER BY tgl ";
	$rest = mysqli_query($koneksi,$sql);

	while($data = mysqli_fetch_assoc($rest) )
                            {
                            ?>
          <div class="col-md-12 ftco-animate">
            <div class="blog-entry">
              <a href="#" class="block-20" style="background-image: url('admin/<?php echo $data['gambar'] ?>');">
              </a>
              <div class="text d-flex py-4">
                <div class="meta mb-3">
                  <div><a href="#"><?php echo date('D-M-Y', strtotime(str_replace('-', '/',  $data['tgl']))) ?></a>
                  </div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> -</a></div>
                </div>
                <div class="desc pl-sm-3 pl-md-5">
                  <h3 class="heading"><a href="#"><?php echo $data['judul']?></a></h3>
                  <p align="justify"><?php echo $data['deskripsi'] ?></p>

                </div>
              </div>
            </div>

          </div>

          <?php
                            }
                            ?>
        </div>



      </div> <!-- END: col-md-8 -->



      <div class="col-md-4 sidebar ftco-animate">
        <div class="sidebar-box">
          <form action="#" class="search-form">
            <div class="form-group">
              <span class="icon fa fa-search"></span>
              <input type="text" class="form-control" placeholder="Pencarian Berita">
            </div>
          </form>
        </div>


        <div class="sidebar-box ftco-animate">
          <h3>Berita Terbaru</h3>
          <?php
                            
                            include "admin/config.php";
                            $sql2  = "SELECT * FROM tbl_berita ORDER BY tgl ";
	$rest2 = mysqli_query($koneksi,$sql2);

	while($data2 = mysqli_fetch_assoc($rest2) )
                            {
                            ?>
          <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(admin/<?php echo $data2['gambar'] ?>);"></a>
            <div class="text">
              <h3 class="heading"><a href="#"><?php echo $data2['judul']?></a></h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span>
                    <?php echo date('D-M-Y', strtotime(str_replace('-', '/',  $data2['tgl']))) ?></a></div>
                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                <div><a href="#"><span class="icon-chat"></span> -</a></div>
              </div>
            </div>
          </div>

          <?php
    }
        ?>
        </div>




      </div>
    </div>
  </div>
</section>



<?php

  include "bawah.php";
?>