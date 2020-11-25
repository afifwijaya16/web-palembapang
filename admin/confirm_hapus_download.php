<?php session_start(); ?>
<?php
include "atas.php";



 if(isset($_SESSION['username'])){ 

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));


include "config.php";


$id_file = $_GET['id'];
?>
<br>
<br>
<h3 align="center">PASTIKAN SURAT TIDAK DIGUNAKAN LAGI/ INGIN DIRUBAH </h3>
<h3 align="center">Apakah File dengan ID File :<b> <i> <?php echo $id_file ?></i></b> Ingin dihapus? </h3>

<h3 align="center">
         <a href="query_hapus_download?id=<?php echo $id_file ?>">         
         <button type="button" class="btn btn-success">Yes </button>
         </a>
             
         <a href="data_download">         
         <button type="button" class="btn btn-danger">No </button>
         </a>

</h3>



<?php
    include "bawah.php";
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