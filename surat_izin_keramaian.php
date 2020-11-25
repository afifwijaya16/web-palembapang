<?php include "atas.php"; ?>

<?php include "admin/config.php";
$sql=mysqli_query($koneksi,"select * from surat_izin_keramaian order by id_keramaian DESC LIMIT 0,1");
$data=mysqli_fetch_assoc($sql);
$kodeawal=substr($data['id_keramaian'],3,4)+1;
 if($kodeawal<10){
    $kode='SIK-000'.$kodeawal;
 }elseif($kodeawal > 9 && $kodeawal <=99){
    $kode='SIK-00'.$kodeawal;
 }else{
    $kode='SIK-00'.$kodeawal;
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
            <h2 class="h4 text-primary">ISI FORM DI BAWAH INI UNTUK MEMBUAT SURAT IZIN KERAMAIAN</h2>
        </div>
        <div class="w-100"></div>

        <div class="row block-12">
            <div class="col-md-12 pr-md-5 bg-info">
                <form action="query_input_buat_surat_izin_keramaian" method="post" name="form1_input" enctype="multipart/form-data">
                    <div class="row">
                        <input type="hidden" class="form-control" value="<?php echo $kode; ?>" readonly
                                    name="id_keramaian">

                        <div class="col-md-4 text-white">
                            <div class="form-group">
                                <label class="bmd-label-floating">NIK</label>
                                <input type="text" class="form-control" required name="nik">
                            </div>
                        </div>

                        <div class="col-md-4 text-white">
                            <div class="form-group">
                                <label class="bmd-label-floating">Nama Lengkap</label>
                                <input type="text" class="form-control" required name="nama">
                            </div>
                        </div>

                        <div class="col-md-4 text-white">
                            <div class="form-group">
                                <label class="bmd-label-floating">Alamat</label>
                                <input type="text" class="form-control" required name="alamat">
                            </div>
                        </div>

                        <div class="col-md-4 text-white">
                            <div class="form-group">
                                <label class="bmd-label-floating">Umur</label>
                                <input type="text" class="form-control" required name="umur">
                            </div>
                        </div>

                        <div class="col-md-4 text-white">
                            <div class="form-group">
                                <label class="bmd-label-floating">Pekerjaan</label>
                                <input type="text" class="form-control" required name="pekerjaan">
                            </div>
                        </div>
                        <div class="col-md-4 text-white">
                            <div class="form-group">
                                <label class="bmd-label-floating">Tokoh Pemuda</label>
                                <input type="text" class="form-control" required name="tokoh_pemuda">
                            </div>
                        </div>
                        <div class="col-md-4 text-white">
                            <div class="form-group">
                                <label class="bmd-label-floating">Tokoh Masyarakat</label>
                                <input type="text" class="form-control" required name="tokoh_masyarakat">
                            </div>
                        </div>
                        <div class="col-md-4 text-white">
                            <div class="form-group">
                                <label class="bmd-label-floating">Tokoh Agama</label>
                                <input type="text" class="form-control" required name="tokoh_agama">
                            </div>
                        </div>
                        <div class="col-md-4 text-white">

                            <label class="bmd-label-floating">Upload File Surat/KTP (File Pdf/Jpg)</label><br>
                            <input type="file" name="file_surat" required>

                        </div>
                        <div class="col-md-12 text-white">
                            <div class="form-group">
                                <label class="bmd-label-floating">Deskripsi/Keterangan Surat</label>
                                <input type="text" class="form-control" required name="deskripsi_surat">
                                <input type="hidden" class="form-control" value="<?php echo $kode; ?>" readonly
                                    name="id_keramaian">
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