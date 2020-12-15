<?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); include "admin/config.php";

 $id_surat_usaha = $_POST['id_surat_usaha'];
 $nama_penduduk = explode('.',$_POST['nama']);
 $nik = $nama_penduduk[0];
 $nama = $nama_penduduk[1];
 $alamat = $_POST['alamat'];
 $nama_usaha = $_POST['nama_usaha'];
 $jumlah_modal_usaha = $_POST['jumlah_modal_usaha'];
 $keterangan_usaha = $_POST['keterangan_usaha'];

if(
    $id_surat_usaha =="" || 
    $nama =="" ||
    $alamat =="" || 
    $nama_usaha =="" || 
    $jumlah_modal_usaha =="" ||
    $keterangan_usaha == ""
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
            $sql="INSERT INTO surat_usaha(
                id_surat_usaha,
                nik,
                nama,
                alamat,
                nama_usaha,
                jumlah_modal_usaha,
                file_surat,
                keterangan_usaha
            ) VALUES(
                '$id_surat_usaha',
                '$nik',
                '$nama',
                '$alamat',
                '$nama_usaha',
                '$jumlah_modal_usaha',
                '$targetsurat',
                '$keterangan_usaha'
            )";
            $result=mysqli_query($koneksi,$sql);   
            // if successfully insert data into database, displays message "Successful". 
            if($result) { ?>
                <script language=javascript>
            	 alert("Terima Kasih Pembuatan Surat Segera Ditindak Lanjuti Paling Cepat 2 Hari/Kami Hubungi Via Telepon");
                 document.location.href="surat_usaha";
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
             document.location.href="surat_usaha";
            </script>
            <?php
        }
    } else {
        ?>
        <script language=javascript>
    	 alert("File Hanya PDF, JPEG or GIF files");
         document.location.href="surat_usaha";
        </script>
        <?php
    }
}
?>