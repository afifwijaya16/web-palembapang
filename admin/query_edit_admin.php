<?php session_start(); ?>
<?php



 if(isset($_SESSION['username'])){ 

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));


include "config.php";



     $umum_a = $_POST['umum_a'];
     $umum_b = $_POST['umum_b'];
     
     $kondisi_a = $_POST['kondisi_a'];
     $kondisi_b = $_POST['kondisi_b'];
     $kondisi_c = $_POST['kondisi_c'];
     $kondisi_d = $_POST['kondisi_d'];
     
     $orbitas_a = $_POST['orbitas_a'];
     $orbitas_b = $_POST['orbitas_b'];
     $orbitas_c = $_POST['orbitas_c'];
     
     $pertanahan_a = $_POST['pertanahan_a'];
     $pertanahan_b = $_POST['pertanahan_b'];
     $pertanahan_c = $_POST['pertanahan_c'];
     
     $kp_jp_laki = $_POST['kp_jp_laki'];
     $kp_jp_perempuan = $_POST['kp_jp_perempuan'];
     $kp_jp_kk = $_POST['kp_jp_kk'];
     $kp_jp_wna = $_POST['kp_jp_wna'];
     $kp_jp_wni = $_POST['kp_jp_wni'];
     
     
     $kp_jpma_a = $_POST['kp_jpma_a'];
     $kp_jpma_b = $_POST['kp_jpma_b']; 
     $kp_jpma_c = $_POST['kp_jpma_c']; 
     $kp_jpma_d = $_POST['kp_jpma_d']; 
     
     
     $kp_jpmu_a = $_POST['kp_jpmu_a'];
     $kp_jpmu_b = $_POST['kp_jpmu_b'];
     $kp_jpmu_c = $_POST['kp_jpmu_c'];
     $kp_jpmu_e = $_POST['kp_jpmu_e'];
     $kp_jpmu_f = $_POST['kp_jpmu_f'];
     
     $kp_jpmtp_a = $_POST['kp_jpmtp_a'];
     $kp_jpmtp_b = $_POST['kp_jpmtp_b'];
     
     $kp_jpmmp_a = $_POST['kp_jpmmp_a'];
     $kp_jpmmp_b = $_POST['kp_jpmmp_b'];
     $kp_jpmmp_c = $_POST['kp_jpmmp_c'];
     $kp_jpmmp_d = $_POST['kp_jpmmp_d'];
     $kp_jpmmp_e = $_POST['kp_jpmmp_e'];
     $kp_jpmmp_f = $_POST['kp_jpmmp_f'];
     $kp_jpmmp_g = $_POST['kp_jpmmp_g'];
     $kp_jpmmp_h = $_POST['kp_jpmmp_h'];
     $kp_jpmmp_i = $_POST['kp_jpmmp_i'];
     
     
     $kp_jpd_a = $_POST['kp_jpd_a'];
     $kp_jpd_b = $_POST['kp_jpd_b'];
     $kp_jpd_c = $_POST['kp_jpd_c'];
     $kp_jpd_d = $_POST['kp_jpd_d'];
     $kp_jpd_e = $_POST['kp_jpd_e'];
     $kp_jpd_f = $_POST['kp_jpd_f'];
     $kp_jpd_g = $_POST['kp_jpd_g'];
     
     $kp_prt_a = $_POST['kp_prt_a'];
     $kp_prt_b = $_POST['kp_prt_b'];
     
     $kp_jpm_a = $_POST['kp_jpm_a'];
     $kp_jpm_b = $_POST['kp_jpm_b'];
     $kp_jpm_c = $_POST['kp_jpm_c'];
     
     $kp_pmdb_a = $_POST['kp_pmdb_a'];
     $kp_pmdb_b = $_POST['kp_pmdb_b'];
     $kp_pmdb_c = $_POST['kp_pmdb_c'];
     $kp_pmdb_d = $_POST['kp_pmdb_d'];
     
     $kp_lmd_a = $_POST['kp_lmd_a'];
     $kp_lmd_b = $_POST['kp_lmd_b'];
     
     $kp_kd_a = $_POST['kp_kd_a'];
     $kp_kd_b = $_POST['kp_kd_b'];
     
     $kp_kkd_a = $_POST['kp_kkd_a'];
     $kp_kkd_b = $_POST['kp_kkd_b'];
     
     $kp_kdspd_a = $_POST['kp_kdspd_a'];
     $kp_kdspd_b = $_POST['kp_kdspd_b'];
     $kp_kdspd_c = $_POST['kp_kdspd_c'];
     $kp_kdspd_d = $_POST['kp_kdspd_d'];
     $kp_kdspd_e = $_POST['kp_kdspd_e'];
     
     $kp_bdhp = $_POST['kp_bdhp'];
     $kp_bdhp_a = $_POST['kp_bdhp_a'];
     $kp_bdhp_b = $_POST['kp_bdhp_b'];
     $kp_bdhp_c = $_POST['kp_bdhp_c'];
     $kp_bdhp_d = $_POST['kp_bdhp_d'];
     
     
     $bpd_asp_a = $_POST['bpd_asp_a'];
     $bpd_asp_b = $_POST['bpd_asp_b'];
     $bpd_asp_c = $_POST['bpd_asp_c'];
     $bpd_asp_d = $_POST['bpd_asp_d'];
     $bpd_asp_e = $_POST['bpd_asp_e'];
     
     $bpd_p_a = $_POST['bpd_p_a'];
     $bpd_p_b = $_POST['bpd_p_b'];
     $bpd_p_c = $_POST['bpd_p_c'];
     $bpd_p_d = $_POST['bpd_p_d'];
     $bpd_p_e = $_POST['bpd_p_e'];
     
     $bpd_japc_a = $_POST['bpd_japc_a'];
      $bpd_japc_b = $_POST['bpd_japc_b'];
      $bpd_japc_c = $_POST['bpd_japc_c'];
      $bpd_japc_d = $_POST['bpd_japc_d'];
      $bpd_japc_e = $_POST['bpd_japc_e'];
     
      $bpd_jayp_a = $_POST['bpd_jayp_a'];
     $bpd_jayp_b = $_POST['bpd_jayp_b'];
     
     $bpd_pk_a = $_POST['bpd_pk_a'];
     $bpd_pk_b = $_POST['bpd_pk_b'];
     $bpd_pk_c = $_POST['bpd_pk_c'];
     
     
     $so_a = $_POST['so_a'];
      $so_b = $_POST['so_b'];
      $so_c = $_POST['so_c'];
      $so_d = $_POST['so_d'];
     
      $so_k_a = $_POST['so_k_a'];
     $so_k_b = $_POST['so_k_b'];
     $so_k_c = $_POST['so_k_c'];
     
     $so_kk_a = $_POST['so_kk_a'];
     $so_kk_b = $_POST['so_kk_b'];
     $so_kk_c = $_POST['so_kk_c'];
     
     $pp_a = $_POST['pp_a'];
     $pp_b = $_POST['pp_b'];
     $pp_c = $_POST['pp_c'];
     $pp_d = $_POST['pp_d'];
     $pp_e = $_POST['pp_e'];
     $pp_f = $_POST['pp_f'];
     $pp_g = $_POST['pp_g'];
     
     $k_a = $_POST['k_a'];
     $k_b = $_POST['k_b'];
     
     $i_a = $_POST['i_a'];
     $i_b = $_POST['i_b'];
     
     $p8_a = $_POST['p8_a'];
     $p8_b = $_POST['p8_b'];
     
     $p9_a = $_POST['p9_a'];
     $p9_b = $_POST['p9_b'];
     
     $p10_a = $_POST['p10_a'];
     $p10_b = $_POST['p10_b'];
     $p10_c = $_POST['p10_c'];
     
     $p11_a = $_POST['p11_a'];
     $p11_b = $_POST['p11_b'];
     $p11_c = $_POST['p11_c'];
     
     $p12_a = $_POST['p12_a'];
     $p12_b = $_POST['p12_b'];
     $p12_c = $_POST['p12_c'];
     
     $p13_a = $_POST['p13_a'];
     $p13_b = $_POST['p13_b'];
     $p13_c = $_POST['p13_c'];
     $p13_d = $_POST['p13_d'];
     $p13_e = $_POST['p13_e'];
     
     $p14_a = $_POST['p14_a'];
     $p14_b = $_POST['p14_b'];
     $p14_c = $_POST['p14_c'];
     $p14_d = $_POST['p14_d'];
     
     $p15_a = $_POST['p15_a'];
     $p15_b = $_POST['p15_b'];
     
     $p17_a = $_POST['p17_a'];
     $p17_b = $_POST['p17_b'];
     $p17_c = $_POST['p17_c'];
     $p17_d = $_POST['p17_d'];
     $p17_e = $_POST['p17_e'];
     $p17_f = $_POST['p17_f'];
     
          
     $p18_a = $_POST['p18_a'];
     $p18_b = $_POST['p18_b'];
     
     $p19_a = $_POST['p19_a'];
     $p19_b = $_POST['p19_b'];
     $p19_c = $_POST['p19_c'];
     
     $p20_a = $_POST['p17_a'];
     $p20_c = $_POST['p17_c'];
     $p20_d = $_POST['p17_d'];
     $p20_f = $_POST['p17_f'];
     $p20_g = $_POST['p17_g'];
    
     
     
 

     
if($umum_a=="" )
{
    ?>
    <script language=javascript>
	 alert("Masih Terdapat inputan Kosong");
     document.location.href="data_adminis";
    </script> 


<?php   
  
}
else
{
    

// Insert data into mysql 
$sql="UPDATE tbl_data SET umum_a='$umum_a', umum_b='$umum_b', kondisi_a='$kondisi_a', kondisi_b='$kondisi_b' ,kondisi_c='$kondisi_c', kondisi_d='$kondisi_d', orbitas_a='$orbitas_a', orbitas_b='$orbitas_b', orbitas_c='$orbitas_c', pertanahan_a='$pertanahan_a', pertanahan_b='$pertanahan_b', pertanahan_c='$pertanahan_c', kp_jp_laki='$kp_jp_laki',kp_jp_perempuan='$kp_jp_perempuan',kp_jp_kk='$kp_jp_kk',kp_jp_wni='$kp_jp_wni',kp_jp_wna='$kp_jp_wna',kp_jpma_a='$kp_jpma_a',kp_jpma_b='$kp_jpma_b',kp_jpma_c='$kp_jpma_c',kp_jpma_d='$kp_jpma_d',kp_jpmu_a='$kp_jpmu_a',kp_jpmu_b='$kp_jpmu_b',kp_jpmu_c='$kp_jpmu_c',kp_jpmu_e='$kp_jpmu_e',kp_jpmu_f='$kp_jpmu_f',kp_jpmtp_a='$kp_jpmtp_a',kp_jpmtp_b='$kp_jpmtp_b',kp_jpmmp_a='$kp_jpmmp_a',kp_jpmmp_b='$kp_jpmmp_b',kp_jpmmp_c='$kp_jpmmp_c',kp_jpmmp_d='$kp_jpmmp_d',kp_jpmmp_e='$kp_jpmmp_e',kp_jpmmp_f='$kp_jpmmp_f',kp_jpmmp_g='$kp_jpmmp_g',kp_jpmmp_h='$kp_jpmmp_h',kp_jpmmp_i='$kp_jpmmp_i',kp_jpd_a='$kp_jpd_a',kp_jpd_b='$kp_jpd_b',kp_jpd_c='$kp_jpd_c',kp_jpd_d='$kp_jpd_d',kp_jpd_e='$kp_jpd_e',kp_jpd_f='$kp_jpd_f',kp_jpd_g='$kp_jpd_g',kp_prt_a='$kp_prt_a',kp_prt_b='$kp_prt_b',kp_jpm_a='$kp_jpm_a',kp_jpm_b='$kp_jpm_b',kp_jpm_c='$kp_jpm_c',kp_pmdb_a='$kp_pmdb_a',kp_pmdb_b='$kp_pmdb_b',kp_pmdb_c='$kp_pmdb_c',kp_pmdb_d='$kp_pmdb_d',kp_lmd_a='$kp_lmd_a',kp_lmd_b='$kp_lmd_b',kp_kd_a='$kp_kd_a',kp_kd_b='$kp_kd_b',kp_kkd_a='$kp_kkd_a',kp_kkd_b='$kp_kkd_b',kp_kdspd_a='$kp_kdspd_a',kp_kdspd_b='$kp_kdspd_b',kp_kdspd_c='$kp_kdspd_c',kp_kdspd_d='$kp_kdspd_d',kp_kdspd_e='$kp_kdspd_e',kp_bdhp='$kp_bdhp',kp_bdhp_a='$kp_bdhp_a',kp_bdhp_b='$kp_bdhp_b',kp_bdhp_c='$kp_bdhp_c',kp_bdhp_d='$kp_bdhp_d',bpd_asp_a='$bpd_asp_a',bpd_asp_b='$bpd_asp_b',bpd_asp_c='$bpd_asp_c',bpd_asp_d='$bpd_asp_d',bpd_asp_e='$bpd_asp_e',bpd_p_a='$bpd_p_a',bpd_p_b='$bpd_p_b',bpd_p_c='$bpd_p_c',bpd_p_d='$bpd_p_d',bpd_p_e='$bpd_p_e',bpd_japc_a='$bpd_japc_a',bpd_japc_b='$bpd_japc_b',bpd_japc_c='$bpd_japc_c',bpd_japc_d='$bpd_japc_d',bpd_japc_e='$bpd_japc_e',bpd_jayp_a='$bpd_jayp_a',bpd_jayp_b='$bpd_jayp_b',bpd_pk_a='$bpd_pk_a',bpd_pk_b='$bpd_pk_b',bpd_pk_c='$bpd_pk_c',so_a='$so_a',so_b='$so_b',so_c='$so_c',so_d='$so_d',so_k_a='$so_k_a',so_k_b='$so_k_b',so_k_c='$so_k_c',so_kk_a='$so_kk_a',so_kk_b='$so_kk_b',so_kk_c='$so_kk_c',pp_a='$pp_a',pp_b='$pp_b',pp_c='$pp_c',pp_d='$pp_d',pp_e='$pp_e',pp_f='$pp_f',pp_g='$pp_g',k_a='$k_a',k_b='$k_b',i_a='$i_a',i_b='$i_b',p8_a='$p8_a',p8_b='$p8_b',p9_a='$p9_a',p9_b='$p9_b',p10_a='$p10_a',p10_b='$p10_b',p10_c='$p10_c',p11_a='$p11_a',p11_b='$p11_b',p11_c='$p11_c',p12_a='$p12_a',p12_b='$p12_b',p12_c='$p12_c',p13_a='$p13_a',p13_b='$p13_b',p13_c='$p13_c',p13_d='$p13_d',p13_e='$p13_e',p14_a='$p14_a',p14_b='$p14_b',p14_c='$p14_c',p14_d='$p14_d',p15_a='$p15_a',p15_b='$p15_b',p17_a='$p17_a',p17_b='$p17_b',p17_c='$p17_c',p17_d='$p17_d',p17_e='$p17_e',p17_f='$p17_f',p18_a='$p18_a',p18_b='$p18_a',p19_a='$p19_a',p19_b='$p19_b',p19_c='$p19_c',d20_a='$d20_a',d20_c='$d20_c',d20_d='$d20_d',d20_f='$d20_f',d20_g='$d20_g' ";
    
$result=mysqli_query($koneksi,$sql);

   
// if successfully insert data into database, displays message "Successful". 
if($result){
    

?>
    <script language=javascript>
	 alert("Berhasil Edit Data");
     document.location.href="data_adminis";
    </script> 
<?php
}
else {
//echo "ERROR INPUT DATA!!";
    echo "Error :".$sql."<br>".mysqli_error($conn);
?>
   <script language=javascript>
	 alert("Kegagalan Sistem, silahkan coba lagi");
     document.location.href="data_adminis";
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