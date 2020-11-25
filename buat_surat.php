<?php

  include "atas.php";
?>

<?php
include "admin/config.php";
$sql=mysqli_query($koneksi,"select * from tbl_buat_surat order by id_surat DESC LIMIT 0,1");
 $data=mysqli_fetch_assoc($sql);
 $kodeawal=substr($data['id_surat'],3,4)+1;
 if($kodeawal<10){
  $kode='SR-000'.$kodeawal;
 }elseif($kodeawal > 9 && $kodeawal <=99){
  $kode='SR-00'.$kodeawal;
 }else{
  $kode='SR-00'.$kodeawal;
 }


     
         
         ?>

	<section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">
           <marquee behavior="scroll" direction="left">
        
    <p><img src="images/l3.png">  MOTTO PEMERINTAHAN DESA PALEMBAPANG KECAMATAN KALIANDA <img src="images/l3.png">  " MEMBANGUN DESA YANG MAKMUR DAN SEJAHTERA " <img src="images/l3.png"> </p> 
    </marquee>
       
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4 text-center">
            <h2 class="h4 text-primary">BUAT SURAT ONLINE</h2>
            <p> Informasi Proses Pembuatan Surat Online </p>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Address:</span> <br>Kantor Desa Palembapang Atau Rumah Ketua RT </br></p>
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
            <h2 class="h4 text-primary">ISI FORM DI BAWAH INI UNTUK MEMBUAT SURAT ONLINE</h2>
          </div>
          <div class="w-100"></div>
        
        <div class="row block-12">
          <div class="col-md-12 pr-md-5 bg-info">
            <form action="query_input_buat_surat" method="post" name="form1_input" enctype="multipart/form-data">
                    <div class="row">
                      
                      <div class="col-md-4 text-white">
                        <div class="form-group">
                          <label class="bmd-label-floating">NIK</label>
                          <input type="text" class="form-control" required name="nik">
                            
                            <input type="hidden" class="form-control" value="<?php echo $kode; ?>" readonly name="id_surat">
                           
                        </div>
                      </div>

                      <div class="col-md-4 text-white">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Lengkap</label>
                          <input type="text" class="form-control" required name="nama_lengkap">
                            
                            <input type="hidden" class="form-control" value="<?php echo $kode; ?>" readonly name="id_surat">
                           
                        </div>
                      </div>
                        
                         <div class="col-md-4 text-white">
                          <div class="form-group">
              
                 <label class="bmd-label-floating">Alamat</label>
                          <input type="text" class="form-control" required name="alamat">

                            <input type="hidden" class="form-control" value="<?php echo $kode; ?>" readonly name="id_surat">
                
               
                        </div>
                    </div>

                         <div class="col-md-4 text-white">
                          <div class="form-group">
              
                 <label class="bmd-label-floating">No.Handpone/WA</label>
                          <input type="text" class="form-control" required name="no_handpone">

                            <input type="hidden" class="form-control" value="<?php echo $kode; ?>" readonly name="id_surat">
                
               
                        </div>
                    </div>


                         <div class="col-md-4 text-white">
                        
                          <label class="bmd-label-floating">Upload File Surat/KTP (File Pdf/Jpg)</label><br>
                          <input type="file" name="file_surat" required >
                          <input type="hidden" class="form-control" value="<?php echo $kode; ?>" readonly name="id_surat">
                

                      </div>
                      <div class="col-md-4 text-white">
                        <div class="form-group">
                          <label>Pilih Surat</label>
                          <select class="form-control" name="jenis_surat">
                            <option>---- Pilih Jenis Surat ----</option>
                            <option value="Surat Ket. Domisili">Surat Ket. Domisili</option>
                            <option value="Surat Ket. Pindah">Surat Ket. Pindah</option>
                            <option value="Surat Ket. Jalan">Surat Ket. Jalan</option>
                            <option value="Surat Ket. Izin Keramaian">Surat Ket. Izin Keramaian</option>
                            <option value="Surat Ket. Pindah Kuasa">Surat Ket. Pindah Kuasa</option>
                            <option value="Surat Ket. Tidak Mampu">Surat Ket. Tidak Mampu</option>
                            <option value="Surat Ket. Kematian">Surat Ket. Kematian</option>
                            <option value="Surat Ket. Usaha">Surat Ket. Usaha</option>
                            <option value="Surat Ket. Penghasilan Ortu">Surat Ket. Penghasilan Ortu </option>
                            <option value="Surat Ket. Kehilangan">Surat Ket. Kehilangan</option>
                            <option value="Surat Ket. Belum Menikah">Surat Ket. Belum Menikah</option>
                            <option value="Surat Pengantar Pembuatan KTP">Surat Pengantar Pembuatan KTP</option>
                        </select>
                        </div>
                      </div>
                         <div class="col-md-12 text-white">
                        <div class="form-group">
                          <label class="bmd-label-floating">Deskripsi/Keterangan Surat</label>
                          <input type="text" class="form-control" required name="deskripsi_surat">
                          <input type="hidden" class="form-control" value="<?php echo $kode; ?>" readonly name="id_surat">                                                 
                        </div>
                      </div>
                    
                    
                    </div>
                   
                   
                    <button type="submit" class="btn btn-danger pull-right">Buat Surat</button>
                    <div class="clearfix"></div>
                  </form>
          </div>

         
        </div>
      </div>
    </section>





<?php

  include "bawah.php";
?>