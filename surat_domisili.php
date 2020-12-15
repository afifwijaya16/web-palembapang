<?php include "atas.php"; ?>

<?php include "admin/config.php";
$sql=mysqli_query($koneksi,"select * from surat_domisili order by id_surat_domisili DESC LIMIT 0,1");
$data=mysqli_fetch_assoc($sql);
$kodeawal=substr($data['id_surat_domisili'],3,4)+1;
 if($kodeawal<10){
    $kode='SD-000'.$kodeawal;
 }elseif($kodeawal > 9 && $kodeawal <=99){
    $kode='SD-00'.$kodeawal;
 }else{
    $kode='SD-00'.$kodeawal;
 } ?>

<section class="ftco-section contact-section ftco-degree-bg">
    <div class="container">
        <marquee behavior="scroll" direction="left">

            <p><img src="images/l3.png"> MOTTO PEMERINTAHAN DESA PALEMBAPANG KECAMATAN KALIANDA <img
                    src="images/l3.png"> " MEMBANGUN DESA YANG MAKMUR DAN SEJAHTERA " <img src="images/l3.png"> </p>
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
            <h2 class="h4 text-primary">ISI FORM DI BAWAH INI UNTUK MEMBUAT SURAT DOMISILI</h2>
        </div>
        <div class="w-100"></div>

        <div class="row block-12">
            <div class="col-md-12 pr-md-5 bg-info">
                <form action="query_input_buat_surat_domisili" method="post" name="form1_input" enctype="multipart/form-data">
                    <div class="row">
                        <input type="hidden" class="form-control" value="<?php echo $kode; ?>" readonly
                                    name="id_surat_domisili">

                       <div class="col-md-4 text-white">
                            <div class="form-group">
                                <label class="bmd-label-floating">Nama Pembuat Surat</label>
                                <?php include "admin/config.php"; $sql  = "SELECT * FROM tb_penduduk ORDER BY nik "; $rest = mysqli_query($koneksi,$sql); while($data = mysqli_fetch_assoc($rest) ) {  ?>
                                <select class="form-control" name="nama">
                                    <option>---- Pilih Penduduk ----</option>
                                    <option value="<?php echo $data['nik'];?>.<?php echo $data['nama'];?>"><?php echo $data['nik'];?> - <?php echo $data['nama'];?>
                                    </option>
                                </select>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="col-md-4 text-white">
                            <div class="form-group">
                                <label class="bmd-label-floating">Tanggal lahir</label>
                                <input type="date" class="form-control" required name="tanggal_lahir">
                            </div>
                        </div>
                        <div class="col-md-4 text-white">
                            <div class="form-group">
                                <label class="bmd-label-floating">Tempat lahir</label>
                                <input type="text" class="form-control" required name="tempat_lahir">
                            </div>
                        </div>

                        <div class="col-md-4 text-white">
                            <div class="form-group">
                                <label class="bmd-label-floating">Agama</label>
                                <select class="form-control" name="agama">
                                    <option>---- Pilih Agama ----</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 text-white">
                            <div class="form-group">
                                <label class="bmd-label-floating">Pekerjaan</label>
                                <input type="text" class="form-control" required name="pekerjaan">
                            </div>
                        </div>
                        
                        <div class="col-md-12 text-white">
                            <div class="form-group">
                                <label class="bmd-label-floating">Alamat</label>
                                <input type="text" class="form-control" required name="alamat">
                            </div>
                        </div>
                        <div class="col-md-4 text-white">

                            <label class="bmd-label-floating">Upload KTP (File Pdf/Jpg)</label><br>
                            <input type="file" name="file_surat" required>

                        </div>
                        
                        <div class="col-md-12 text-white">
                            <div class="form-group">
                                <label class="bmd-label-floating">Deskripsi/Keterangan</label>
                                <input type="text" class="form-control" required name="deskripsi_surat">
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





<?php include "bawah.php"; ?>