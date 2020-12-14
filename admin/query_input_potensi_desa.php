<?php session_start(); ?>
<?php if(isset($_SESSION['username'])){ 

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include "config.php";

 $area_wisata = $_POST['area_wisata'];
 $luas = $_POST['luas'];
 $pemanfaatan = $_POST['pemanfaatan'];
 $keberadaan = $_POST['keberadaan'];

     
if( $area_wisata=="" || $keberadaan=="" || $pemanfaatan=="" || $luas=="" ) { ?>
    <script language=javascript>
	 alert("Masih Terdapat inputan Kosong");
     document.location.href="data_potensi_desa";
    </script> 
<?php } else {
    $targetfolder = "files/";
    $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;
    $ok=1;
    $file_type=$_FILES['file']['type'];
    if ($file_type=="application/pdf" || $file_type=="image/gif" || $file_type=="image/jpeg" || $file_type=="image/jpg" || $file_type=="image/png") {
    if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder)) {
    // Insert data into mysql 
    $sql="INSERT INTO tbl_potensi_desa(
        area_wisata,
        luas,
        pemanfaatan,
        keberadaan,
        foto) VALUES(
            '$area_wisata',
            '$luas',
            '$pemanfaatan',
            '$keberadaan',
            '$targetfolder'
        )";
    
$result=mysqli_query($koneksi,$sql);

   
// if successfully insert data into database, displays message "Successful". 
if($result){
    
   
?>
    <script language=javascript>
	 alert("Berhasil Input Data");
     document.location.href="data_potensi_desa";
    </script> 
<?php } else { echo "Error :".$sql."<br>".mysqli_error($conn); ?>
    <script language=javascript>
	 alert("Kegagalan Sistem, silahkan coba lagi");
     document.location.href="data_potensi_desa";
    </script>
<?php } } else { ?>
    <script language=javascript>
	 alert("Error Upload");
     document.location.href="data_potensi_desa";
    </script>
<?php } } else { ?>
<script language=javascript>
    alert("File Hanya PDFs, JPEGs or GIF files");
    document.location.href="data_potensi_desa";
</script>
<?php } } } else { ?>
    <script>
        alert("Maaf Login Dulu Yah");
        document.location.href="login.php";
    </script>
<?php } ?>