<?php session_start(); ?>
<?php


 if(isset($_SESSION['username'])){ 

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));


include "config.php";




 $id_file = $_POST['id_file'];
 $nama_file = $_POST['nama_file'];
 $ket = $_POST['ket'];

     
if($id_file=="" || $nama_file=="" || $ket=="" )
{
    ?>
    <script language=javascript>
	 alert("Masih Terdapat inputan Kosong");
     document.location.href="data_download";
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
$sql="INSERT INTO tbl_download(id_file,nama_file,ket,pdf) VALUES('$id_file','$nama_file','$ket','$targetfolder')";
    
$result=mysqli_query($koneksi,$sql);

   
// if successfully insert data into database, displays message "Successful". 
if($result){
    
   
?>
    <script language=javascript>
	 alert("Berhasil Input Data");
     document.location.href="data_download";
    </script> 
<?php
}
else {
//echo "ERROR INPUT DATA!!";
    echo "Error :".$sql."<br>".mysqli_error($conn);
?>
    <script language=javascript>
	 alert("Kegagalan Sistem, silahkan coba lagi");
     document.location.href="data_download";
    </script>

<?php
}
     
     
     
 }

 else {

 ?>
    <script language=javascript>
	 alert("Error Upload");
     document.location.href="data_download";
    </script>

<?php
 }

}

else {

 ?>
    <script language=javascript>
	 alert("File Hanya PDFs, JPEGs or GIF files");
     document.location.href="data_download";
    </script>

<?php 

}
    
    
    
    
    
    


    
}
 }
 else
 {
	 ?>
     
       <script>
	      alert("Maaf Login Dulu Yah");
		  document.location.href="login.php";
	   </script>
     
     <?php
 }
 ?>