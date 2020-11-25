<?php

  include "atas.php";
?>



<section class="ftco-section contact-section ftco-degree-bg">
  <div class="container">
    <marquee behavior="scroll" direction="left">

      <p><img src="images/l3.png"> MOTTO PEMERINTAHAN DESA PALEMBAPANG KECAMATAN KALIANDA <img src="images/l3.png"> "
        MEMBANGUN DESA YANG MAKMUR DAN SEJAHTERA " <img src="images/l3.png"> </p>
    </marquee>


    <div class="col-md-12 mb-4 text-center">
      <h2 class="h4 text-primary"> DOWNLOAD BLANKO SURAT</h2>
      <p> Sebelum Membuat Surat Online<br> Silahkan Anda Pilih Surat Dibawah Ini, Kemudian Download Sesuai Dengan Surat Yang Ingin Dibuat</p>
    </div>
    <div class="w-100"></div>


    <div class="table-responsive">
      <table class="table">
        <thead class=" text-info">
          <th align="center">
            No
          </th>
          <th align="center">
            Nama File
          </th>
          <th align="center">
            Keterangan
          </th>

          <th align="center">
            File PDF
          </th>


        </thead>
        <tbody>
          <?php
    
    $i=1;
   include "admin/config.php";
    $sql  = "SELECT * FROM tbl_download ORDER BY nama_file ";
	$rest = mysqli_query($koneksi,$sql);

	while($data = mysqli_fetch_assoc($rest) )
	{
	
	 
						?>

          <tr>
            <td> <?php echo $i;?></td>
            <td> <?php echo $data['nama_file'];?></td>
            <td> <?php echo $data['ket'];?></td>



            <td>
              <a href="admin/<?php echo $data['pdf'];?>" target="_blank">

                <button type="button" rel="tooltip" title="View File" class="btn btn-danger btn-link btn-sm">
                  <span class="icon icon-download"></span>
                </button>
              </a>
            </td>

          </tr>

          <?php
                $i++;
                 }
                 ?>
        </tbody>
      </table>
      <br>

      <!-- <p align="left"><b>Klik Tombol Dibawah Ini Untuk Membuat Surat Secara Online</b></p>

      <div class="alert alert-danger" role="alert">
        <a href="buat_surat">
          <button type="button" class="btn-danger center-block">BUAT SURAT ONLINE</button></a>
      </div> -->
    </div>
  </div>
  </div>

  </div>

</section>



<?php

  include "bawah.php";
?>