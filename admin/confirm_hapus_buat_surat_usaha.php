<?php session_start(); ?>
<?php include "atas.php"; 
if(isset($_SESSION['username'])) { 
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include "config.php"; $id_surat_usaha = $_GET['id']; ?>
<br>
<br>
<h3 align="center">PASTIKAN PEMBUATAN SURAT SUDAH DITINDAK LANJUTI!!! </h3>
<h3 align="center">Apakah Surat Izin Usaha dengan ID Surat :<b> <i> <?php echo $id_surat_usaha ?></i></b> Ingin dihapus? </h3>

<h3 align="center">
    <a href="query_hapus_buat_surat_usaha?id=<?php echo $id_surat_usaha ?>">
        <button type="button" class="btn btn-success">Yes </button>
    </a>
    <a href="data_buat_surat">
        <button type="button" class="btn btn-danger">No </button>
    </a>
</h3>



<?php include "bawah.php"; } else { ?>

<script>
    alert("Maaf Login Dulu Yah");
    document.location.href = "login.php";
</script>

<?php } ?>