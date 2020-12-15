<?php session_start(); ?>
<?php if(isset($_SESSION['username'])){ 

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));


include "config.php";

 $id_penduduk = $_POST['id_penduduk'];
 $nik = $_POST['nik'];
 $status = $_POST['status'];
 $nama = $_POST['nama'];
 
if($id_penduduk=="" || $nik=="" || $nama=="" ) { ?>
<script language=javascript>
    alert("Masih Terdapat inputan Kosong");
    document.location.href = "data_penduduk";
</script>
<?php  } else {

// Insert data into mysql 
     
$sql="UPDATE tb_penduduk SET nik='$nik', nama='$nama', status='$status' WHERE id_penduduk='$id_penduduk'";
$result=mysqli_query($koneksi,$sql);

   
// if successfully insert data into database, displays message "Successful". 
if($result){ ?>
<script language=javascript>
    alert("Berhasil Edit Data");
    document.location.href = "data_penduduk";
</script>
<?php } else {
//echo "ERROR INPUT DATA!!";
    echo "Error :".$sql."<br>".mysqli_error($conn);
?>
<script language=javascript>
    alert("Kegagalan Sistem, silahkan coba lagi");
    document.location.href = "data_penduduk";
</script>

<?php  } } } else { ?>

<script>
    alert("Maaf Login Dulu Yah");
    document.location.href = "login.php";
</script>

<?php } ?>