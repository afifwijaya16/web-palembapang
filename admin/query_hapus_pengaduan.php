<?php session_start(); ?>
<?php



 if(isset($_SESSION['username'])){ 

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));


include "config.php";



 $id_pengaduan = $_GET['id'];
 

     
if($id_pengaduan=="" )
{
    ?>
    <script language=javascript>
	 alert("Pilihan Tidak Ada");
     document.location.href="data_pengaduan";
    </script> 


<?php   
  
}
else
{
    

// Insert data into mysql 
$sql="DELETE FROM tbl_pengaduan WHERE id_pengaduan='$id_pengaduan'";
    
$result=mysqli_query($koneksi,$sql);

   
// if successfully insert data into database, displays message "Successful". 
if($result){
    

?>
    <script language=javascript>
	 alert("Berhasil Hapus Data");
     document.location.href="data_pengaduan";
    </script> 
<?php
}
else {
//echo "ERROR INPUT DATA!!";
    echo "Error :".$sql."<br>".mysqli_error($conn);
?>
    <script language=javascript>
	 alert("Kegagalan Sistem, silahkan coba lagi");
     document.location.href="data_pengaduan";
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