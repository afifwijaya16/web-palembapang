<?php session_start(); ?>
<?php



 if(isset($_SESSION['username'])){ 

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));


include "config.php";



 $id_berita = $_GET['id'];
 

     
if($id_berita=="" )
{
    ?>
    <script language=javascript>
	 alert("Pilihan Tidak Ada");
     document.location.href="data_berita";
    </script> 


<?php   
  
}
else
{
    

// Insert data into mysql 
$sql="DELETE FROM tbl_berita WHERE id_berita='$id_berita'";
    
$result=mysqli_query($koneksi,$sql);

   
// if successfully insert data into database, displays message "Successful". 
if($result){
    

?>
    <script language=javascript>
	 alert("Berhasil Hapus Data");
     document.location.href="data_berita";
    </script> 
<?php
}
else {
//echo "ERROR INPUT DATA!!";
    echo "Error :".$sql."<br>".mysqli_error($conn);
?>
    <script language=javascript>
	 alert("Kegagalan Sistem, silahkan coba lagi");
     document.location.href="data_berita";
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