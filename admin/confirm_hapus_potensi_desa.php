<?php session_start(); ?>
<?php
include "atas.php";



 if(isset($_SESSION['username'])){ 

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));


include "config.php"; $id_potensi_desa = $_GET['id']; ?>
<br>
<br>
<h3 align="center">Apakah Potensi Desa ini Ingin dihapus? </h3>

<h3 align="center">
         <a href="query_hapus_potensi_desa?id=<?php echo $id_potensi_desa ?>">         
         <button type="button" class="btn btn-success">Yes </button>
         </a>
             
         <a href="data_potensi_desa">         
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