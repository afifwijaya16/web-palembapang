<?php include "atas.php"; ?>

<?php {} ?>

<section class="ftco-section contact-section ftco-degree-bg">
    <div class="container">
        <marquee behavior="scroll" direction="left">
            <p><img src="images/l3.png"> MOTTO PEMERINTAHAN DESA PALEMBAPANG KECAMATAN KALIANDA <img
                    src="images/l3.png"> "
                MEMBANGUN DESA YANG MAKMUR DAN SEJAHTERA " <img src="images/l3.png"> </p>
        </marquee>
        <div class="col-md-12 mb-4 text-center">
            <h2 class="h4 text-primary">DATA POTENSI DESA</h2>
        </div>
        <div class="w-100"></div>
        <div class="row block-12">
            <div class="col-md-12 pr-md-5">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>
                                Area Wisata
                            </th>
                            <th>
                                Keberadaan
                            </th>
                            <th>
                                Luas
                            </th>
                            <th>
                                Pemanfaatan
                            </th>
                        </thead>
                        <tbody>
                            <?php $sql  = "SELECT * FROM tbl_potensi_desa"; $rest = mysqli_query($koneksi,$sql);
                            $rowcount = mysqli_num_rows($rest);
                            while($data = mysqli_fetch_assoc($rest) ) { ?>
                            <tr>
                                <td align="center"> <?php echo $data['area_wisata'];?></td>
                                <td align="center"> <?php echo $data['keberadaan'];?></td>
                                <td align="center"> <?php echo $data['luas'];?></td>
                                <td align="center"> <?php echo $data['pemanfaatan'];?></td>
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