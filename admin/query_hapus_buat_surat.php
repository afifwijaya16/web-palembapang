<?php session_start(); ?>
<?php



 if(isset($_SESSION['username'])){ 

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));


include "config.php";



 $id_surat = $_GET['id'];
 

     
if($id_surat=="" )
{
    ?>
    <script language=javascript>
	 alert("Pilihan Tidak Ada");
     document.location.href="data_buat_surat";
    </script> 


<?php   
  
}
else
{
    

// Insert data into mysql 
$sql="DELETE FROM tbl_buat_surat WHERE id_surat='$id_surat'";
    
$result=mysqli_query($koneksi,$sql);

   
// if successfully insert data into database, displays message "Successful". 
if($result){
    

?>
    <script language=javascript>
	 alert("Berhasil Hapus Data");
     document.location.href="data_buat_surat";
    </script> 
<?php
}
else {
//echo "ERROR INPUT DATA!!";
    echo "Error :".$sql."<br>".mysqli_error($conn);
?>
    <script language=javascript>
	 alert("Kegagalan Sistem, silahkan coba lagi");
     document.location.href="data_buat_surat";
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