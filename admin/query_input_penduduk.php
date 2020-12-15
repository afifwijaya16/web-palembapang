<?php session_start(); ?>
<?php if(isset($_SESSION['username'])){ 

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include "config.php";

 $id_penduduk = $_POST['id_penduduk'];
 $nama = $_POST['nama'];
 $nik = $_POST['nik'];
 $kk = $_POST['kk'];
 $jenis_kelamin = $_POST['jenis_kelamin'];
 $status = $_POST['status'];
 $agama = $_POST['agama'];
 $tempat_lahir = $_POST['tempat_lahir'];
 $tanggal_lahir = date('Y-m-d', strtotime(str_replace('-', '/',  $_POST['tanggal_lahir']))); 
 $alamat = $_POST['alamat'];

     
if($id_penduduk=="" || $nama=="" || $alamat=="" ) { ?>
    <script language=javascript>
	 alert("Masih Terdapat inputan Kosong");
     document.location.href="data_penduduk";
    </script> 
<?php } else {
    $targetfolder = "files/";
    $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;
    $ok=1;
    $file_type=$_FILES['file']['type'];
    if ($file_type=="application/pdf" || $file_type=="image/gif" || $file_type=="image/jpeg" || $file_type=="image/jpg" || $file_type=="image/png") {
    if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder)) {
    // Insert data into mysql 
    $sql="INSERT INTO tb_penduduk(
        id_penduduk,
        nama,
        tanggal_lahir,
        tempat_lahir,
        nik,
        kk,
        jenis_kelamin,
        status,
        agama,
        alamat,
        foto) VALUES(
            '$id_penduduk',
            '$nama',
            '$tanggal_lahir',
            '$tempat_lahir',
            '$nik',
            '$kk',
            '$jenis_kelamin',
            '$status',
            '$agama',
            '$alamat',
            '$targetfolder'
        )";
    
$result=mysqli_query($koneksi,$sql);

   
// if successfully insert data into database, displays message "Successful". 
if($result){
    
   
?>
    <script language=javascript>
	 alert("Berhasil Input Data");
     document.location.href="data_penduduk";
    </script> 
<?php } else { echo "Error :".$sql."<br>".mysqli_error($conn); ?>
    <script language=javascript>
	 alert("Kegagalan Sistem, silahkan coba lagi");
     document.location.href="data_penduduk";
    </script>
<?php } } else { ?>
    <script language=javascript>
	 alert("Error Upload");
     document.location.href="data_penduduk";
    </script>
<?php } } else { ?>
<script language=javascript>
    alert("File Hanya PDFs, JPEGs or GIF files");
    document.location.href="data_penduduk";
</script>
<?php } } } else { ?>
    <script>
        alert("Maaf Login Dulu Yah");
        document.location.href="login.php";
    </script>
<?php } ?>