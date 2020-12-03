<?php include "atas.php"; ?>

<?php {} ?>

<section class="ftco-section contact-section ftco-degree-bg">
    <div class="container">
        <marquee behavior="scroll" direction="left">

            <p><img src="images/l3.png"> MOTTO PEMERINTAHAN DESA PALEMBAPANG KECAMATAN KALIANDA <img
                    src="images/l3.png"> "
                MEMBANGUN DESA YANG MAKMUR DAN SEJAHTERA " <img src="images/l3.png"> </p>
        </marquee>
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4 text-center">
                <h2 class="h4 text-primary">PENGADUAN MASYARAKAT</h2>
                <p> Laporan Pengaduan Masyarakat Dapat Menghubungi
            </div>
            <div class="w-100"></div>
            <div class="col-md-3">
                <p><span>Address:</span> <br>Kantor Desa atau Rumah Staff Desa Terdekat</br> </p>
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
            <h2 class="h4 text-primary">DATA PENDUDUK</h2>
        </div>

        <div class="w-100"></div>
        <div class="row block-12">
            <div class="col-md-12 pr-md-5">
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <?php $sql  = "SELECT * FROM tb_penduduk"; $rest = mysqli_query($koneksi,$sql);
                            $rowcount = mysqli_num_rows($rest); ?>
                            <tr>
                                <td>Jumlah Penduduk</td>
                                <td align="center"><?php echo $rowcount; ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table" id="table_id">
                        <thead class=" text-primary">
                            <th>
                                NIK
                            </th>
                            <th>
                                Nama
                            </th>
                        </thead>
                        <tbody>
                            <?php $sql  = "SELECT * FROM tb_penduduk"; $rest = mysqli_query($koneksi,$sql);
                            $rowcount = mysqli_num_rows($rest);
                            while($data = mysqli_fetch_assoc($rest) ) { ?>
                            <tr>
                                <td align="center"> <?php echo $data['nik'];?></td>
                                <td align="center"> <?php echo $data['nama'];?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</section>


<?php include "bawah.php"; ?>