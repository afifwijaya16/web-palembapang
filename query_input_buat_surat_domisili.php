<?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); include "admin/config.php";

 $id_surat_domisili = $_POST['id_surat_domisili'];
 $nama_penduduk = explode('.',$_POST['nama']);
 $nik = $nama_penduduk[0];
 $nama = $nama_penduduk[1];
 $alamat = $_POST['alamat'];
 $tanggal_lahir = $_POST['tanggal_lahir'];
 $tempat_lahir = $_POST['tempat_lahir'];
 $pekerjaan = $_POST['pekerjaan'];
 $agama = $_POST['agama'];
 $deskripsi_surat = $_POST['deskripsi_surat'];

if(
    $id_surat_domisili =="" || 
    $nama =="" ||
    $alamat =="" || 
    $tanggal_lahir =="" || 
    $pekerjaan =="" || 
    $agama =="" ||
    $tempat_lahir =="" ||
    $deskripsi_surat == ""
) {
    ?>
    <script language=javascript>
	 alert("Masih Terdapat inputan Kosong");
     document.location.href="buat_surat";
    </script> 
    <?php   
} else {
    $targetsurat = "files/";
    $targetsurat = $targetsurat . basename( $_FILES['file_surat']['name']);
    $ok=1;
    $file_type = $_FILES['file_surat']['type'];
    
    if ($file_type=="application/pdf" || $file_type=="image/gif" || $file_type=="image/jpeg" || $file_type=="image/jpg" || $file_type=="image/png") {

        if(move_uploaded_file($_FILES['file_surat']['tmp_name'], $targetsurat)) {
            // Insert data into mysql 
            $sql="INSERT INTO surat_domisili(
                id_surat_domisili,
                nik,
                nama,
                alamat,
                tanggal_lahir,
                pekerjaan,
                agama,
                tempat_lahir,
                file_surat,
                deskripsi_surat
            ) VALUES(
                '$id_surat_domisili',
                '$nik',
                '$nama',
                '$alamat',
                '$tanggal_lahir',
                '$pekerjaan',
                '$agama',
                '$tempat_lahir',
                '$targetsurat',
                '$deskripsi_surat'
            )";
            $result=mysqli_query($koneksi,$sql);   
            // if successfully insert data into database, displays message "Successful". 
            if($result) { ?>
                <script language=javascript>
            	 alert("Terima Kasih Pembuatan Surat Segera Ditindak Lanjuti Paling Cepat 2 Hari/Kami Hubungi Via Telepon");
                 document.location.href="surat_domisili";
                </script> 
                <?php
            } else {
                //echo "ERROR INPUT DATA!!";
                echo "Error :".$sql."<br>".mysqli_error($conn);
                ?>
                <?php
            }
        } else {
            ?>
            <script language=javascript>
        	 alert("Error Upload");
             document.location.href="surat_domisili";
            </script>
            <?php
        }
    } else {
        ?>
        <script language=javascript>
    	 alert("File Hanya PDF, JPEG or GIF files");
         document.location.href="surat_domisili";
        </script>
        <?php
    }
}
?>