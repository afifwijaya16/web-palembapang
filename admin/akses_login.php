<?php
 session_start();
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include "config.php";
$username=$_POST['username'];
$password=md5($_POST['password']);

if($username == '' || $password == '')
{
  ?>
    <script language=javascript>
	alert('masih ada data kosong');
    document.location.href="login";
    </script> 
     
  <?php  	
}
else
{
$q = "SELECT * FROM tbl_hak_akses WHERE username = '$username'";
$result = mysqli_query($koneksi,$q);
$data = mysqli_fetch_assoc($result);
//cek kesesuaian password masukan dengan database
if ($password == $data['password']) {
//menyimpan tipe user dan username dalam session
    
     $_SESSION['username'] = $data['username'];   
    

?>
    <script language=javascript>
	alert('Selamat Datang');
    document.location.href="home";
    </script> 
<?php
}else{
	?>
    <script language=javascript>
	alert('Kesalahan Username atau Password');
    document.location.href="login";
    </script> 


    <?php
}
echo mysql_error();
}
?>