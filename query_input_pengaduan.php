
<?php


error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));


include "admin/config.php";




 $id_pengaduan = $_POST['id_pengaduan'];
 $nama = $_POST['nama'];
 $tgl = date('Y-m-d', strtotime(str_replace('-', '/',  $_POST['tgl']))); 
 $deskripsi = $_POST['deskripsi'];

     
if($id_pengaduan=="" || $nama=="" || $deskripsi=="" )
{
    ?>
    <script language=javascript>
	 alert("Masih Terdapat inputan Kosong");
     document.location.href="buat_surat";
    </script> 


<?php   
  
}
else
{
  $targetfolder = "files/";

 $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

 $ok=1;

$file_type=$_FILES['file']['type'];

if ($file_type=="application/pdf" || $file_type=="image/gif" || $file_type=="image/jpeg" || $file_type=="image/jpg" || $file_type=="image/png") {

 if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

 {

// Insert data into mysql 
$sql="INSERT INTO tbl_pengaduan(id_pengaduan,tgl,nama,deskrispi,gambar) VALUES('$id_pengaduan','$tgl','$nama','$deskripsi','$targetfolder')";
    
$result=mysqli_query($koneksi,$sql);

   
// if successfully insert data into database, displays message "Successful". 
if($result){
    
   
?>
    <script language=javascript>
	 alert("Terima Kasih Informasi Segera Ditindak Lanjuti");
     document.location.href="pengaduan";
    </script> 
<?php
}
else {
//echo "ERROR INPUT DATA!!";
    echo "Error :".$sql."<br>".mysqli_error($conn);
?>
    

<?php
}
     
     
     
 }

 else {

 ?>
    <script language=javascript>
	 alert("Error Upload");
     document.location.href="pengaduan";
    </script>

<?php
 }

}

else {

 ?>
    <script language=javascript>
	 alert("File Hanya PDFs, JPEGs or GIF files");
     document.location.href="pengaduan";
    </script>

<?php 

}
    
    
    
    
    
    


    
}
 
 ?>