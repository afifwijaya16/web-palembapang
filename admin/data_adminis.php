<?php session_start(); ?>
<?php
  include "atas.php";

  include "config.php";
    
 
?>

<?php
    $sql  = "SELECT * FROM tbl_data ";
	$rest = mysqli_query($koneksi,$sql);

	$data = mysqli_fetch_assoc($rest);


 if(isset($_SESSION['username'])){ 
     
         
         ?>

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <a href="home">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                <i class="material-icons">arrow_back</i>
              </div>
              <p class="card-category">Home -> Data Administratif -> Pengolahan</p>
              <h3 class="card-title">Kembali</h3>
            </div>
          </a>

        </div>
      </div>
    </div>


  </div>
</div>



<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Data Administratif</h4>
            <p class="card-category">Silahkan Edit Data Jika dibutuhkan</p>
          </div>
          <div class="card-body">
            <form action="query_edit_admin" method="post" name="form1_input" enctype="multipart/form-data">
              <div class="row">
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <td width="28">
                        <p>I</p>
                      </td>
                      <td colspan="4" width="575">
                        <p><strong>UMUM</strong></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="28">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="46">
                        <p>a</p>
                      </td>
                      <td width="359">
                        <p>Luas Desa</p>
                      </td>
                      <td width="85">
                        <p><input type="text" name="umum_a" value="<?php echo $data['umum_a'] ?>" required></p>
                      </td>
                      <td width="85">
                        <p>Ha</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="28">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="46">
                        <p>b</p>
                      </td>
                      <td width="359">
                        <p>Batas Wilayah</p>
                      </td>
                      <td width="85">
                        <p><span style="text-decoration: line-through;"><input type="text" name="umum_b"
                              value="<?php echo $data['umum_b'] ?>"></span></p>
                      </td>
                      <td width="85">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="28">
                        <p>II</p>
                      </td>
                      <td colspan="4" width="575">
                        <p><strong>KONDISI DESA</strong></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="28">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="46">
                        <p>a</p>
                      </td>
                      <td width="359">
                        <p>Ketinggian Tanah dari permukaan laut</p>
                      </td>
                      <td width="85">
                        <p><span style="text-decoration: line-through;"><input type="text" name="kondisi_a"
                              value="<?php echo $data['kondisi_a'] ?>"></span></p>
                      </td>
                      <td width="85">
                        <p>M</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="28">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="46">
                        <p>b</p>
                      </td>
                      <td width="359">
                        <p>Banyak curah hujan</p>
                      </td>
                      <td width="85">
                        <p><span style="text-decoration: line-through;"><input type="text" name="kondisi_b"
                              value="<?php echo $data['kondisi_b'] ?>"></span></p>
                      </td>
                      <td width="85">
                        <p>Mm/th</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="28">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="46">
                        <p>c</p>
                      </td>
                      <td width="359">
                        <p>Topografi( Dataran renda,Tinggi,Pantai</p>
                      </td>
                      <td width="85">
                        <p><span style="text-decoration: line-through;"><input type="text" name="kondisi_c"
                              value="<?php echo $data['kondisi_c'] ?>"></span></p>
                      </td>
                      <td width="85">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="28">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="46">
                        <p>d</p>
                      </td>
                      <td width="359">
                        <p>Suhu udara</p>
                      </td>
                      <td width="85">
                        <p><span style="text-decoration: line-through;"><input type="text" name="kondisi_d"
                              value="<?php echo $data['kondisi_d'] ?>"></span></p>
                      </td>
                      <td width="85">
                        <p>23&reg;C-38&reg;C</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="28">
                        <p>III</p>
                      </td>
                      <td colspan="2" width="405">
                        <p><strong>ORBITASI (Jarak dari pemerintahan )</strong></p>
                      </td>
                      <td width="85">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="85">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="28">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="46">
                        <p>a</p>
                      </td>
                      <td width="359">
                        <p>Jarak dari Pusat Pemerintahan Kecamatan</p>
                      </td>
                      <td width="85">
                        <p><input type="text" name="orbitas_a" value="<?php echo $data['orbitas_a'] ?>"></p>
                      </td>
                      <td width="85">
                        <p>Km</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="28">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="46">
                        <p>b</p>
                      </td>
                      <td width="359">
                        <p>Jarak ibukota kabupaten</p>
                      </td>
                      <td width="85">
                        <p><input type="text" name="orbitas_b" value="<?php echo $data['orbitas_b'] ?>"></p>
                      </td>
                      <td width="85">
                        <p>Km</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="28">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="46">
                        <p>c</p>
                      </td>
                      <td width="359">
                        <p>Jarak ibukota provinsi</p>
                      </td>
                      <td width="85">
                        <p><input type="text" name="orbitas_c" value="<?php echo $data['orbitas_c'] ?>"></p>
                      </td>
                      <td width="85">
                        <p>Km</p>
                      </td>
                    </tr>
                  </tbody>
                </table>



                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <td width="38">
                        <p><strong>IV</strong></p>
                      </td>
                      <td colspan="2" width="397">
                        <p><strong>PERTANAHAN</strong></p>
                      </td>
                      <td width="85">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="85">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>a</p>
                      </td>
                      <td width="359">
                        <p>Tanah Kas Desa</p>
                      </td>
                      <td width="85">
                        <p><input type="text" name="pertanahan_a" value="<?php echo $data['pertanahan_a'] ?>"></p>
                      </td>
                      <td width="85">
                        <p>Ha</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>b</p>
                      </td>
                      <td width="359">
                        <p>Tanah bersertifikat</p>
                      </td>
                      <td width="85">
                        <p><input type="text" name="pertanahan_b" value="<?php echo $data['pertanahan_b'] ?>"></p>
                      </td>
                      <td width="85">
                        <p>Ha</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>c</p>
                      </td>
                      <td width="359">
                        <p>Tanah yang belum bersertifikat</p>
                      </td>
                      <td width="85">
                        <p><input type="text" name="pertanahan_c" value="<?php echo $data['pertanahan_c'] ?>"></p>
                      </td>
                      <td width="85">
                        <p>Ha</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><strong>V</strong></p>
                      </td>
                      <td colspan="2" width="397">
                        <p><strong>KEPENDUDUKAN</strong></p>
                      </td>
                      <td width="85">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="85">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><strong>1</strong></p>
                      </td>
                      <td colspan="2" width="397">
                        <p><strong>Jumlah Penduduk Menurut</strong></p>
                      </td>
                      <td width="85">
                        <p><strong><span style="text-decoration: line-through;">&nbsp;</span></strong></p>
                      </td>
                      <td width="85">
                        <p><strong><span style="text-decoration: line-through;">&nbsp;</span></strong></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>a</p>
                      </td>
                      <td width="359">
                        <p>Jenis Kelamin</p>
                      </td>
                      <td width="85">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="85">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="359">
                        <p>Laki-Laki</p>
                      </td>
                      <td width="85">
                        <p><input type="text" name="kp_jp_laki" value="<?php echo $data['kp_jp_laki'] ?>"></p>
                      </td>
                      <td width="85">
                        <p>Jiwa</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="359">
                        <p>Perempuan</p>
                      </td>
                      <td width="85">
                        <p><input type="text" name="kp_jp_perempuan" value="<?php echo $data['kp_jp_perempuan'] ?>"></p>
                      </td>
                      <td width="85">
                        <p>Jiwa</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>b</p>
                      </td>
                      <td width="359">
                        <p>Kepala Keluarga</p>
                      </td>
                      <td width="85">
                        <p><input type="text" name="kp_jp_kk" value="<?php echo $data['kp_jp_kk'] ?>"></p>
                      </td>
                      <td width="85">
                        <p>Jiwa</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>c</p>
                      </td>
                      <td width="359">
                        <p>Kewarganegaraan</p>
                      </td>
                      <td width="85">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="85">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="359">
                        <p>WNI.</p>
                      </td>
                      <td width="85">
                        <p><input type="text" name="kp_jp_wni" value="<?php echo $data['kp_jp_wni'] ?>"></p>
                      </td>
                      <td width="85">
                        <p>Orang</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="359">
                        <p>WNA.</p>
                      </td>
                      <td width="85">
                        <p><input type="text" name="kp_jp_wna" value="<?php echo $data['kp_jp_wna'] ?>"></p>
                      </td>
                      <td width="85">
                        <p>Orang</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><strong>2</strong></p>
                      </td>
                      <td colspan="2" width="397">
                        <p><strong>JUMLAH PENDUDUK MENURUT AGAMA</strong></p>
                      </td>
                      <td width="85">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="85">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>a</p>
                      </td>
                      <td width="359">
                        <p>ISLAM</p>
                      </td>
                      <td width="85">
                        <p><input type="text" name="kp_jpma_a" value="<?php echo $data['kp_jpma_a'] ?>"></p>
                      </td>
                      <td width="85">
                        <p>Jiwa</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>b</p>
                      </td>
                      <td width="359">
                        <p>KRISTEN</p>
                      </td>
                      <td width="85">
                        <p><input type="text" name="kp_jpma_b" value="<?php echo $data['kp_jpma_b'] ?>"></p>
                      </td>
                      <td width="85">
                        <p>Orang</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>c</p>
                      </td>
                      <td width="359">
                        <p>KATHOLIK</p>
                      </td>
                      <td width="85">
                        <p><input type="text" name="kp_jpma_c" value="<?php echo $data['kp_jpma_c'] ?>"></p>
                      </td>
                      <td width="85">
                        <p>Orang</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>d</p>
                      </td>
                      <td width="359">
                        <p>BUDHA</p>
                      </td>
                      <td width="85">
                        <p><span style="text-decoration: line-through;"><input type="text" name="kp_jpma_d"
                              value="<?php echo $data['kp_jpma_d'] ?>"></span></p>
                      </td>
                      <td width="85">
                        <p>Orang</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><strong>3</strong></p>
                      </td>
                      <td colspan="2" width="397">
                        <p><strong>JUMLAH PENDUDUK MENURUT USIA</strong></p>
                      </td>
                      <td width="85">
                        <p><strong><span style="text-decoration: line-through;">&nbsp;</span></strong></p>
                      </td>
                      <td width="85">
                        <p><strong><span style="text-decoration: line-through;">&nbsp;</span></strong></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>aa</p>
                      </td>
                      <td width="359">
                        <p>04-06 Tahun</p>
                      </td>
                      <td width="85">
                        <p><input type="text" name="kp_jpmu_a" value="<?php echo $data['kp_jpmu_a'] ?>"></p>
                      </td>
                      <td width="85">
                        <p>Orang</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">b</span></p>
                      </td>
                      <td width="359">
                        <p>07-12 Tahun</p>
                      </td>
                      <td width="85">
                        <p><input type="text" name="kp_jpmu_b" value="<?php echo $data['kp_jpmu_b'] ?>"></p>
                      </td>
                      <td width="85">
                        <p>Orang</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">c</span></p>
                      </td>
                      <td width="359">
                        <p>13-15 Tahun</p>
                      </td>
                      <td width="85">
                        <p><input type="text" name="kp_jpmu_c" value="<?php echo $data['kp_jpmu_c'] ?>"></p>
                      </td>
                      <td width="85">
                        <p>Orang</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>bd</p>
                      </td>
                      <td width="359">
                        <p>KELOMPOK TENAGA KERJA</p>
                      </td>
                      <td width="85">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="85">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">e</span></p>
                      </td>
                      <td width="359">
                        <p>20-26 Tahun</p>
                      </td>
                      <td width="85">
                        <p><input type="text" name="kp_jpmu_e" value="<?php echo $data['kp_jpmu_e'] ?>"></p>
                      </td>
                      <td width="85">
                        <p>Orang</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">f</span></p>
                      </td>
                      <td width="359">
                        <p>27-40 Tahun</p>
                      </td>
                      <td width="85">
                        <p><input type="text" name="kp_jpmu_f" value="<?php echo $data['kp_jpmu_f'] ?>"></p>
                      </td>
                      <td width="85">
                        <p>Orang</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><strong>4</strong></p>
                      </td>
                      <td colspan="2" width="397">
                        <p><strong>JUMLAH PENDUDUK MENURUT TINGKAT&nbsp; PENDIDIKAN</strong></p>
                      </td>
                      <td width="85">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="85">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>a</p>
                      </td>
                      <td width="359">
                        <p>Lulusan Pendidikan Umum</p>
                      </td>
                      <td width="85">
                        <p><input type="text" name="kp_jpmtp_a" value="<?php echo $data['kp_jpmtp_a'] ?>"></p>
                      </td>
                      <td width="85">
                        <p>Orang</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>b</p>
                      </td>
                      <td width="359">
                        <p>Lulusan Pendidikan Khusus</p>
                      </td>
                      <td width="85">
                        <p><input type="text" name="kp_jpmtp_b" value="<?php echo $data['kp_jpmtp_b'] ?>"></p>
                      </td>
                      <td width="85">
                        <p>Orang</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><strong>5</strong></p>
                      </td>
                      <td colspan="2" width="397">
                        <p><strong>JUMLAH PENDUDUK MENURUT MATA PENCARIAN</strong></p>
                      </td>
                      <td width="85">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="85">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>a</p>
                      </td>
                      <td width="359">
                        <p>Karyawan</p>
                      </td>
                      <td width="85">
                        <p><input type="text" name="kp_jpmmp_a" value="<?php echo $data['kp_jpmmp_a'] ?>"></p>
                      </td>
                      <td width="85">
                        <p>Orang</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>b</p>
                      </td>
                      <td width="359">
                        <p>Wiraswasta</p>
                      </td>
                      <td width="85">
                        <p><input type="text" name="kp_jpmmp_b" value="<?php echo $data['kp_jpmmp_b'] ?>"></p>
                      </td>
                      <td width="85">
                        <p>Orang</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>c</p>
                      </td>
                      <td width="359">
                        <p>Tani</p>
                      </td>
                      <td width="85">
                        <p><input type="text" name="kp_jpmmp_c" value="<?php echo $data['kp_jpmmp_c'] ?>"></p>
                      </td>
                      <td width="85">
                        <p>Orang</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>d</p>
                      </td>
                      <td width="359">
                        <p>Pertukangan</p>
                      </td>
                      <td width="85">
                        <p><input type="text" name="kp_jpmmp_d" value="<?php echo $data['kp_jpmmp_d'] ?>"></p>
                      </td>
                      <td width="85">
                        <p>Orang</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>e</p>
                      </td>
                      <td width="359">
                        <p>Buruh Tani</p>
                      </td>
                      <td width="85">
                        <p><input type="text" name="kp_jpmmp_e" value="<?php echo $data['kp_jpmmp_e'] ?>"></p>
                      </td>
                      <td width="85">
                        <p>Orang</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>f</p>
                      </td>
                      <td width="359">
                        <p>Pensiunan</p>
                      </td>
                      <td width="85">
                        <p><input type="text" name="kp_jpmmp_f" value="<?php echo $data['kp_jpmmp_f'] ?>"></p>
                      </td>
                      <td width="85">
                        <p>Orang</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>g</p>
                      </td>
                      <td width="359">
                        <p>Nelayan</p>
                      </td>
                      <td width="85">
                        <p><input type="text" name="kp_jpmmp_g" value="<?php echo $data['kp_jpmmp_g'] ?>"></p>
                      </td>
                      <td width="85">
                        <p>Orang</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>h</p>
                      </td>
                      <td width="359">
                        <p>Pemulung</p>
                      </td>
                      <td width="85">
                        <p><input type="text" name="kp_jpmmp_h" value="<?php echo $data['kp_jpmmp_h'] ?>"></p>
                      </td>
                      <td width="85">
                        <p>Orang</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>i</p>
                      </td>
                      <td width="359">
                        <p>Jasa</p>
                      </td>
                      <td width="85">
                        <p><input type="text" name="kp_jpmmp_i" value="<?php echo $data['kp_jpmmp_i'] ?>"></p>
                      </td>
                      <td width="85">
                        <p>Orang</p>
                      </td>
                    </tr>
                  </tbody>
                </table>





                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <td width="38">
                        <p><strong>6</strong></p>
                      </td>
                      <td colspan="2" width="397">
                        <p><strong>JUMLAH PERANGKAT DESA</strong></p>
                      </td>
                      <td width="85">
                        <p>&nbsp;</p>
                      </td>
                      <td width="85">
                        <p>&nbsp;</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>&nbsp;</p>
                      </td>
                      <td width="38">
                        <p>a</p>
                      </td>
                      <td width="359">
                        <p>Sekdes</p>
                      </td>
                      <td width="85">
                        <p><input type="text" name="kp_jpd_a" value="<?php echo $data['kp_jpd_a'] ?>"></p>
                      </td>
                      <td width="85">
                        <p>Orang</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>&nbsp;</p>
                      </td>
                      <td width="38">
                        <p>b</p>
                      </td>
                      <td width="359">
                        <p>Kepala Dusun</p>
                      </td>
                      <td width="85">
                        <p><input type="text" name="kp_jpd_b" value="<?php echo $data['kp_jpd_b'] ?>"></p>
                      </td>
                      <td width="85">
                        <p>Orang</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>&nbsp;</p>
                      </td>
                      <td width="38">
                        <p>c</p>
                      </td>
                      <td width="359">
                        <p>Kaur</p>
                      </td>
                      <td width="85">
                        <p><input type="text" name="kp_jpd_c" value="<?php echo $data['kp_jpd_c'] ?>"></p>
                      </td>
                      <td width="85">
                        <p>Orang</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>&nbsp;</p>
                      </td>
                      <td width="38">
                        <p>d</p>
                      </td>
                      <td width="359">
                        <p>Kasi</p>
                      </td>
                      <td width="85">
                        <p><input type="text" name="kp_jpd_d" value="<?php echo $data['kp_jpd_d'] ?>"></p>
                      </td>
                      <td width="85">
                        <p>Orang</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>&nbsp;</p>
                      </td>
                      <td width="38">
                        <p>e</p>
                      </td>
                      <td width="359">
                        <p>Staff</p>
                      </td>
                      <td width="85">
                        <p><input type="text" name="kp_jpd_e" value="<?php echo $data['kp_jpd_e'] ?>"></p>
                      </td>
                      <td width="85">
                        <p>Orang</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>&nbsp;</p>
                      </td>
                      <td width="38">
                        <p>f</p>
                      </td>
                      <td width="359">
                        <p>Operator Siskuides</p>
                      </td>
                      <td width="85">
                        <p><input type="text" name="kp_jpd_f" value="<?php echo $data['kp_jpd_f'] ?>"></p>
                      </td>
                      <td width="85">
                        <p>Orang</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>&nbsp;</p>
                      </td>
                      <td width="38">
                        <p>g</p>
                      </td>
                      <td width="359">
                        <p>Bendahara Desa</p>
                      </td>
                      <td width="85">
                        <p><input type="text" name="kp_jpd_g" value="<?php echo $data['kp_jpd_g'] ?>"></p>
                      </td>
                      <td width="85">
                        <p>Orang</p>
                      </td>
                    </tr>
                  </tbody>
                </table>




                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <td width="38">
                        <p><strong>7</strong></p>
                      </td>
                      <td colspan="2" width="387">
                        <p><strong>PEMBINAAN RT/RW</strong></p>
                      </td>
                      <td width="104">
                        <p>&nbsp;</p>
                      </td>
                      <td width="76">
                        <p>&nbsp;</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>&nbsp;</p>
                      </td>
                      <td width="38">
                        <p>a</p>
                      </td>
                      <td width="350">
                        <p>Jumlah RT</p>
                      </td>
                      <td width="104">
                        <p><input type="text" name="kp_prt_a" value="<?php echo $data['kp_prt_a'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Orang</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>&nbsp;</p>
                      </td>
                      <td width="38">
                        <p>b</p>
                      </td>
                      <td width="350">
                        <p>Jumlah Rw</p>
                      </td>
                      <td width="104">
                        <p><input type="text" name="kp_prt_b" value="<?php echo $data['kp_prt_b'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>&nbsp;</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><strong>8</strong></p>
                      </td>
                      <td colspan="2" width="387">
                        <p><strong>JUMLAH PELAYANAN MASYARAKAT</strong></p>
                      </td>
                      <td width="104">
                        <p>&nbsp;</p>
                      </td>
                      <td width="76">
                        <p>&nbsp;</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>&nbsp;</p>
                      </td>
                      <td width="38">
                        <p>a</p>
                      </td>
                      <td width="350">
                        <p>Pelayanan umum</p>
                      </td>
                      <td width="104">
                        <p><input type="text" name="kp_jpm_a" value="<?php echo $data['kp_jpm_a'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Orang</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>&nbsp;</p>
                      </td>
                      <td width="38">
                        <p>b</p>
                      </td>
                      <td width="350">
                        <p>Pelayanan kependudukan</p>
                      </td>
                      <td width="104">
                        <p><input type="text" name="kp_jpm_b" value="<?php echo $data['kp_jpm_b'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Orang</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>&nbsp;</p>
                      </td>
                      <td width="38">
                        <p>c</p>
                      </td>
                      <td width="350">
                        <p>Pelayanan Legalisasi</p>
                      </td>
                      <td width="104">
                        <p><input type="text" name="kp_jpm_c" value="<?php echo $data['kp_jpm_c'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Orang</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>9</p>
                      </td>
                      <td colspan="2" width="387">
                        <p><strong>PAJAK BUMI DAN BANGUNAN</strong></p>
                      </td>
                      <td width="104">
                        <p>&nbsp;</p>
                      </td>
                      <td width="76">
                        <p>&nbsp;</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>&nbsp;</p>
                      </td>
                      <td width="38">
                        <p>a</p>
                      </td>
                      <td width="350">
                        <p>Jumlah wajib Pajak</p>
                      </td>
                      <td width="104">
                        <p><input type="text" name="kp_pmdb_a" value="<?php echo $data['kp_pmdb_a'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Wp</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>&nbsp;</p>
                      </td>
                      <td width="38">
                        <p>b</p>
                      </td>
                      <td width="350">
                        <p>Jumlah SPPT</p>
                      </td>
                      <td width="104">
                        <p><input type="text" name="kp_pmdb_b" value="<?php echo $data['kp_pmdb_b'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Spp</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>&nbsp;</p>
                      </td>
                      <td width="38">
                        <p>c</p>
                      </td>
                      <td width="350">
                        <p>Jumlah Ketetapan</p>
                      </td>
                      <td width="104">
                        <p><input type="text" name="kp_pmdb_c" value="<?php echo $data['kp_pmdb_c'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Rp</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>&nbsp;</p>
                      </td>
                      <td width="38">
                        <p>d</p>
                      </td>
                      <td width="350">
                        <p>Jumlah Realisasi</p>
                      </td>
                      <td width="104">
                        <p><input type="text" name="kp_pmdb_d" value="<?php echo $data['kp_pmdb_d'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Rp</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>10</p>
                      </td>
                      <td colspan="2" width="387">
                        <p><strong>LEMBAGA MUSYAWARA DESA</strong></p>
                      </td>
                      <td width="104">
                        <p>&nbsp;</p>
                      </td>
                      <td width="76">
                        <p>&nbsp;</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>&nbsp;</p>
                      </td>
                      <td width="38">
                        <p>a</p>
                      </td>
                      <td width="350">
                        <p>JUMLAH BPD</p>
                      </td>
                      <td width="104">
                        <p><input type="text" name="kp_lmd_a" value="<?php echo $data['kp_lmd_a'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Orang</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>&nbsp;</p>
                      </td>
                      <td width="38">
                        <p>b</p>
                      </td>
                      <td width="350">
                        <p>TGL /TAHUN PEMBENTUKAN</p>
                      </td>
                      <td width="104">
                        <p><input type="text" name="kp_lmd_b" value="<?php echo $data['kp_lmd_b'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>&nbsp;</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>11</p>
                      </td>
                      <td colspan="2" width="387">
                        <p><strong>KEPUTUSAN&nbsp; DESA</strong></p>
                      </td>
                      <td width="104">
                        <p>&nbsp;</p>
                      </td>
                      <td width="76">
                        <p>&nbsp;</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>&nbsp;</p>
                      </td>
                      <td width="38">
                        <p>a</p>
                      </td>
                      <td width="350">
                        <p>Jumlah Keputusan kepala Desa yang ditetapkan</p>
                      </td>
                      <td width="104">
                        <p><input type="text" name="kp_kd_a" value="<?php echo $data['kp_kd_a'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Buah</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>&nbsp;</p>
                      </td>
                      <td width="38">
                        <p>b</p>
                      </td>
                      <td width="350">
                        <p>Jumlah Keputusan Desa Yang disahkan</p>
                      </td>
                      <td width="104">
                        <p><input type="text" name="kp_kd_b" value="<?php echo $data['kp_kd_b'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Buah</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>12</p>
                      </td>
                      <td colspan="2" width="387">
                        <p><strong>KEPUTUSAN KEPALA DESA</strong></p>
                      </td>
                      <td width="104">
                        <p>&nbsp;</p>
                      </td>
                      <td width="76">
                        <p>&nbsp;</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>&nbsp;</p>
                      </td>
                      <td width="38">
                        <p>a</p>
                      </td>
                      <td width="350">
                        <p>Jumlah Keputusan sebagai tindak lanjut dari</p>
                      </td>
                      <td width="104">
                        <p><input type="text" name="kp_kkd_a" value="<?php echo $data['kp_kkd_a'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>&nbsp;</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>&nbsp;</p>
                      </td>
                      <td width="38">
                        <p>b</p>
                      </td>
                      <td width="350">
                        <p>Jumlah Keputusan yang merupakan kebijakan Kepala desa</p>
                      </td>
                      <td width="104">
                        <p><input type="text" name="kp_kkd_b" value="<?php echo $data['kp_kkd_b'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>&nbsp;</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>13</p>
                      </td>
                      <td colspan="2" width="387">
                        <p><strong>KEUANGAN DAN SUMBER PENDAPATAN DESA</strong></p>
                      </td>
                      <td width="104">
                        <p>&nbsp;</p>
                      </td>
                      <td width="76">
                        <p>&nbsp;</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>&nbsp;</p>
                      </td>
                      <td width="38">
                        <p>a</p>
                      </td>
                      <td width="350">
                        <p>Keuangan</p>
                      </td>
                      <td width="104">
                        <p><input type="text" name="kp_kdspd_a" value="<?php echo $data['kp_kdspd_a'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Rp</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>&nbsp;</p>
                      </td>
                      <td width="38">
                        <p>b</p>
                      </td>
                      <td width="350">
                        <p>Sisa anggaran Lalu</p>
                      </td>
                      <td width="104">
                        <p><input type="text" name="kp_kdspd_b" value="<?php echo $data['kp_kdspd_b'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Rp</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>&nbsp;</p>
                      </td>
                      <td width="38">
                        <p>c</p>
                      </td>
                      <td width="350">
                        <p>Penerimaan Tahun Ini</p>
                      </td>
                      <td width="104">
                        <p><input type="text" name="kp_kdspd_c" value="<?php echo $data['kp_kdspd_c'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Rp</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>&nbsp;</p>
                      </td>
                      <td width="38">
                        <p>d</p>
                      </td>
                      <td width="350">
                        <p>Pengeluaran rutin Tahun</p>
                      </td>
                      <td width="104">
                        <p><input type="text" name="kp_kdspd_d" value="<?php echo $data['kp_kdspd_d'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Rp</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>&nbsp;</p>
                      </td>
                      <td width="38">
                        <p>e</p>
                      </td>
                      <td width="350">
                        <p>Pengeluaran Pembangunan tahun ini</p>
                      </td>
                      <td width="104">
                        <p><input type="text" name="kp_kdspd_e" value="<?php echo $data['kp_kdspd_e'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Rp</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>&nbsp;</p>
                      </td>
                      <td colspan="2" width="387">
                        <p>Bengkok Desa</p>
                      </td>
                      <td width="104">
                        <p>&nbsp;</p>
                      </td>
                      <td width="76">
                        <p>&nbsp;</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>&nbsp;</p>
                      </td>
                      <td colspan="2" width="387">
                        <p>Hasil perbulan</p>
                      </td>
                      <td width="104">
                        <p><input type="text" name="kp_bdhp" value="<?php echo $data['kp_bdhp'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Rp</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>&nbsp;</p>
                      </td>
                      <td width="38">
                        <p>a</p>
                      </td>
                      <td width="350">
                        <p>Idiologi dan politik</p>
                      </td>
                      <td width="104">
                        <p><input type="text" name="kp_bdhp_a" value="<?php echo $data['kp_bdhp_a'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>&nbsp;</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>&nbsp;</p>
                      </td>
                      <td width="38">
                        <p>b</p>
                      </td>
                      <td width="350">
                        <p>Pemilihan umum Th 2015</p>
                      </td>
                      <td width="104">
                        <p><input type="text" name="kp_bdhp_b" value="<?php echo $data['kp_bdhp_b'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>&nbsp;</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>&nbsp;</p>
                      </td>
                      <td width="38">
                        <p>c</p>
                      </td>
                      <td width="350">
                        <p>Jumlah pemilih</p>
                      </td>
                      <td width="104">
                        <p><input type="text" name="kp_bdhp_c" value="<?php echo $data['kp_bdhp_c'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Orang</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>&nbsp;</p>
                      </td>
                      <td width="38">
                        <p>d</p>
                      </td>
                      <td width="350">
                        <p>Hasil pemilihan umum</p>
                      </td>
                      <td width="104">
                        <p><input type="text" name="kp_bdhp_d" value="<?php echo $data['kp_bdhp_d'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Orang</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><strong>B</strong></p>
                      </td>
                      <td colspan="2" width="387">
                        <p><strong>BIDANG PEMBANGUNAN DESA</strong></p>
                      </td>
                      <td width="104">
                        <p>&nbsp;</p>
                      </td>
                      <td width="76">
                        <p>&nbsp;</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>1</p>
                      </td>
                      <td colspan="2" width="387">
                        <p>Agama</p>
                      </td>
                      <td width="104">
                        <p>&nbsp;</p>
                      </td>
                      <td width="76">
                        <p>&nbsp;</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>&nbsp;</p>
                      </td>
                      <td colspan="2" width="387">
                        <p>Sarana peribadatan</p>
                      </td>
                      <td width="104">
                        <p>&nbsp;</p>
                      </td>
                      <td width="76">
                        <p>&nbsp;</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>&nbsp;</p>
                      </td>
                      <td width="38">
                        <p>a</p>
                      </td>
                      <td width="350">
                        <p>Jumlah masjid</p>
                      </td>
                      <td width="104">
                        <p><input type="text" name="bpd_asp_a" value="<?php echo $data['bpd_asp_a'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Buah</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>&nbsp;</p>
                      </td>
                      <td width="38">
                        <p>b</p>
                      </td>
                      <td width="350">
                        <p>Jumlah musholah</p>
                      </td>
                      <td width="104">
                        <p><input type="text" name="bpd_asp_b" value="<?php echo $data['bpd_asp_b'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Buah</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>&nbsp;</p>
                      </td>
                      <td width="38">
                        <p>c</p>
                      </td>
                      <td width="350">
                        <p>Jumlah gereja</p>
                      </td>
                      <td width="104">
                        <p><input type="text" name="bpd_asp_c" value="<?php echo $data['bpd_asp_c'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>&nbsp;</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>&nbsp;</p>
                      </td>
                      <td width="38">
                        <p>d</p>
                      </td>
                      <td width="350">
                        <p>Jumlah wihara</p>
                      </td>
                      <td width="104">
                        <p><input type="text" name="bpd_asp_d" value="<?php echo $data['bpd_asp_d'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>&nbsp;</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>&nbsp;</p>
                      </td>
                      <td width="38">
                        <p>e</p>
                      </td>
                      <td width="350">
                        <p>Jumlah pura</p>
                      </td>
                      <td width="104">
                        <p><input type="text" name="bpd_asp_e" value="<?php echo $data['bpd_asp_e'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>&nbsp;</p>
                      </td>
                    </tr>
                  </tbody>
                </table>





                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <td width="38">
                        <p><strong>2</strong></p>
                      </td>
                      <td width="38">
                        <p><strong><span style="text-decoration: line-through;">&nbsp;</span></strong></p>
                      </td>
                      <td width="340">
                        <p><strong>PENDIDIKAN</strong></p>
                      </td>
                      <td width="113">
                        <p><strong><span style="text-decoration: line-through;">&nbsp;</span></strong></p>
                      </td>
                      <td width="76">
                        <p><strong><span style="text-decoration: line-through;">&nbsp;</span></strong></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>a</p>
                      </td>
                      <td width="340">
                        <p>TK/PAUD</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="bpd_p_a" value="<?php echo $data['bpd_p_a'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Buah</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>b</p>
                      </td>
                      <td width="340">
                        <p>Sekolah Dasar Negeri</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="bpd_p_b" value="<?php echo $data['bpd_p_b'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Buah</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>c</p>
                      </td>
                      <td width="340">
                        <p>Sekolah Menengah Pertama</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="bpd_p_c" value="<?php echo $data['bpd_p_c'] ?>"></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>d</p>
                      </td>
                      <td width="340">
                        <p>Sekolah Menengah Atas</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="bpd_p_d" value="<?php echo $data['bpd_p_d'] ?>"></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">e</span></p>
                      </td>
                      <td width="340">
                        <p>Sekolah Menegah Kejuruan</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="bpd_p_e" value="<?php echo $data['bpd_p_e'] ?>"></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td colspan="2" width="378">
                        <p><strong>Jumlah anak penyandang cacat</strong></p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="76">
                        <p>Jiwa</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>a</p>
                      </td>
                      <td width="340">
                        <p>Tuli</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="bpd_japc_a" value="<?php echo $data['bpd_japc_a'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Jiwa</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>b</p>
                      </td>
                      <td width="340">
                        <p>Buta</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="bpd_japc_b" value="<?php echo $data['bpd_japc_b'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Jiwa</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>c</p>
                      </td>
                      <td width="340">
                        <p>Bisu</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="bpd_japc_c" value="<?php echo $data['bpd_japc_c'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Jiwa</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>d</p>
                      </td>
                      <td width="340">
                        <p>Amputasi</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="bpd_japc_d" value="<?php echo $data['bpd_japc_d'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Jiwa</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>e</p>
                      </td>
                      <td width="340">
                        <p>Kerdil</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="bpd_japc_e" value="<?php echo $data['bpd_japc_e'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Jiwa</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td colspan="2" width="378">
                        <p><strong>Jumlah anak yatim piatu</strong></p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>a</p>
                      </td>
                      <td width="340">
                        <p>Anak yatim dan piatu</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="bpd_jayp_a" value="<?php echo $data['bpd_jayp_a'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Jiwa</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td colspan="2" width="378">
                        <p>Jumlah anak putus sekolah</p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>b</p>
                      </td>
                      <td width="340">
                        <p>Anak putus sekolah</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="bpd_jayp_b" value="<?php echo $data['bpd_jayp_b'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Jiwa</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38"><br />
                        <p><span style="text-decoration: line-through;">3</span></p>
                      </td>
                      <td colspan="2" width="378">
                        <p><strong>PENDIDIKAN KHUSUS</strong></p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>a</p>
                      </td>
                      <td width="340">
                        <p>PON-PES</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="bpd_pk_a" value="<?php echo $data['bpd_pk_a'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>BUAH</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>b</p>
                      </td>
                      <td width="340">
                        <p>MADRASAH</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="bpd_pk_b" value="<?php echo $data['bpd_pk_b'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>BUAH</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>c</p>
                      </td>
                      <td width="340">
                        <p>SDLB</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="bpd_pk_c" value="<?php echo $data['bpd_pk_c'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>BUAH</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>4</p>
                      </td>
                      <td colspan="2" width="378">
                        <p><strong>SERANA OLARAGA/KESEHATAN/KEBUDAYAAN/DAN SOSIAL</strong></p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>a</p>
                      </td>
                      <td width="340">
                        <p>Sarana Olah Raga</p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;"><input type="text" name="so_a"
                              value="<?php echo $data['so_a'] ?>"></span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>b</p>
                      </td>
                      <td width="340">
                        <p>Lapangan Bola voly</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="so_b" value="<?php echo $data['so_b'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Buah</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>c</p>
                      </td>
                      <td width="340">
                        <p>Lapangann Bulu Tangkis</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="so_c" value="<?php echo $data['so_c'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Buah</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>d</p>
                      </td>
                      <td width="340">
                        <p>Lapanagan Bola Kaki</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="so_d" value="<?php echo $data['so_d'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Buah</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="340">
                        <p><strong>KESEHATAN</strong></p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>a</p>
                      </td>
                      <td width="340">
                        <p>Pustu</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="so_k_a" value="<?php echo $data['so_k_a'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Unit</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>b</p>
                      </td>
                      <td width="340">
                        <p>Polindes</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="so_k_b" value="<?php echo $data['so_k_b'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Unit</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>c</p>
                      </td>
                      <td width="340">
                        <p>Posyandu</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="so_k_c" value="<?php echo $data['so_k_c'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Kelompok</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="340">
                        <p><strong>KESENIAN/KEBUDAYAAN</strong></p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>a</p>
                      </td>
                      <td width="340">
                        <p>Senam</p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;"><input type="text" name="so_kk_a"
                              value="<?php echo $data['so_kk_a'] ?>"></span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>b</p>
                      </td>
                      <td width="340">
                        <p><strong>Sosial</strong></p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;"><input type="text" name="so_kk_b"
                              value="<?php echo $data['so_kk_b'] ?>"></span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>c</p>
                      </td>
                      <td width="340">
                        <p>Santunan anak yatim</p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;"><input type="text" name="so_kk_c"
                              value="<?php echo $data['so_kk_c'] ?>"></span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>5</p>
                      </td>
                      <td colspan="2" width="378">
                        <p><strong>PRASARANA PEMBANGUNAN</strong></p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>a</p>
                      </td>
                      <td width="340">
                        <p>Jalan setapak</p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;"><input type="text" name="pp_a"
                              value="<?php echo $data['pp_a'] ?>"></span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>b</p>
                      </td>
                      <td width="340">
                        <p>Jalan&nbsp; Kabupaten (aspal)</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="pp_b" value="<?php echo $data['pp_b'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Km</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>c</p>
                      </td>
                      <td width="340">
                        <p>Jalan Desa (aspal)</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="pp_c" value="<?php echo $data['pp_c'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Km</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>d</p>
                      </td>
                      <td width="340">
                        <p>Pembangunan Gedung Balai Posyandu</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="pp_d" value="<?php echo $data['pp_d'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Unit</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>e</p>
                      </td>
                      <td width="340">
                        <p>Jembatan</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="pp_e" value="<?php echo $data['pp_e'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Buah</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>f</p>
                      </td>
                      <td width="340">
                        <p>Terminal</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="pp_f" value="<?php echo $data['pp_f'] ?>"></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>g</p>
                      </td>
                      <td width="340">
                        <p>Sering cor</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="pp_g" value="<?php echo $data['pp_g'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Meter</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>6</p>
                      </td>
                      <td colspan="2" width="378">
                        <p><strong>KOMUNIKASI</strong></p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>a</p>
                      </td>
                      <td width="340">
                        <p>Transportasi antar kabupaten</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="k_a" value="<?php echo $data['k_a'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Buah</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>b</p>
                      </td>
                      <td width="340">
                        <p>Komunikasi online</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="k_b" value="<?php echo $data['k_b'] ?>"></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>7</p>
                      </td>
                      <td colspan="2" width="378">
                        <p><strong>INDUSTRI</strong></p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>a</p>
                      </td>
                      <td width="340">
                        <p>Jumlah Jenis usaha industri</p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;"><input type="text" name="i_a"
                              value="<?php echo $data['i_a'] ?>"></span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>b</p>
                      </td>
                      <td width="340">
                        <p>Jumlah usaha industri</p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;"><input type="text" name="i_b"
                              value="<?php echo $data['i_b'] ?>"></span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>8</p>
                      </td>
                      <td colspan="2" width="378">
                        <p><strong>PARAWISATA</strong></p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>a</p>
                      </td>
                      <td width="340">
                        <p>Jumlah jenis parawisata</p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;"><input type="text" name="p8_a"
                              value="<?php echo $data['p8_a'] ?>"></span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>b</p>
                      </td>
                      <td width="340">
                        <p>Jumlah sarana parawisata</p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;"><input type="text" name="p8_b"
                              value="<?php echo $data['p8_b'] ?>"></span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>9</p>
                      </td>
                      <td colspan="2" width="378">
                        <p><strong>PENGAIRAN</strong></p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>a</p>
                      </td>
                      <td width="340">
                        <p>Jumlah jenis pengairan</p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;"><input type="text" name="p9_a"
                              value="<?php echo $data['p9_a'] ?>"></span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>b</p>
                      </td>
                      <td width="340">
                        <p>Jumlah jenis sarana pengairan</p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;"><input type="text" name="p9_b"
                              value="<?php echo $data['p9_b'] ?>"></span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>10</p>
                      </td>
                      <td colspan="2" width="378">
                        <p><strong>PERTANIAN</strong></p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>a</p>
                      </td>
                      <td width="340">
                        <p>Padi dan palawija</p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;"><input type="text" name="p10_a"
                              value="<?php echo $data['p10_a'] ?>"></span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>b</p>
                      </td>
                      <td width="340">
                        <p>Sayur-sayuran</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="p10_b" value="<?php echo $data['p10_b'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Ha</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>c</p>
                      </td>
                      <td width="340">
                        <p>Buah-buahan</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="p10_c" value="<?php echo $data['p10_c'] ?>"></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>11</p>
                      </td>
                      <td colspan="2" width="378">
                        <p><strong>PERKEBUNAN</strong></p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>a</p>
                      </td>
                      <td width="340">
                        <p>Jumlah jenis usaha perkebunan</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="p11_a" value="<?php echo $data['p11_a'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Buah</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>b</p>
                      </td>
                      <td width="340">
                        <p>Jumlah luas usaha perkebunan</p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;"><input type="text" name="p11_b"
                              value="<?php echo $data['p11_b'] ?>"></span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>c</p>
                      </td>
                      <td width="340">
                        <p>Jumlah hasil usaha perkebunan</p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;"><input type="text" name="p11_c"
                              value="<?php echo $data['p11_c'] ?>"></span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>12</p>
                      </td>
                      <td colspan="2" width="378">
                        <p><strong>PERIKANAN</strong></p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>a</p>
                      </td>
                      <td width="340">
                        <p>Jumlah jenis usaha perikanan</p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;"><input type="text" name="p12_a"
                              value="<?php echo $data['p12_a'] ?>"></span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>b</p>
                      </td>
                      <td width="340">
                        <p>Jumlah luas usaha perikanan</p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;"><input type="text" name="p12_b"
                              value="<?php echo $data['p12_b'] ?>"></span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>c</p>
                      </td>
                      <td width="340">
                        <p>Jumlah hasil usaha perikanan</p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;"><input type="text" name="p12_c"
                              value="<?php echo $data['p12_c'] ?>"></span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>13</p>
                      </td>
                      <td colspan="2" width="378">
                        <p><strong>PERTERNAKAN</strong></p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>a</p>
                      </td>
                      <td width="340">
                        <p>Jumlah jenis usaha perternakan</p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;"><input type="text" name="p13_a"
                              value="<?php echo $data['p13_a'] ?>"></span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>b</p>
                      </td>
                      <td width="340">
                        <p>Jumlah bidang Ternak</p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;"><input type="text" name="p13_b"
                              value="<?php echo $data['p13_b'] ?>"></span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>c</p>
                      </td>
                      <td width="340">
                        <p>Ternak sapi</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="p13_c" value="<?php echo $data['p13_c'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Ekor</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>d</p>
                      </td>
                      <td width="340">
                        <p>Ternak kerbau</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="p13_d" value="<?php echo $data['p13_d'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Ekor</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>e</p>
                      </td>
                      <td width="340">
                        <p>Ternak landak</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="p13_e" value="<?php echo $data['p13_e'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Ekor</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="340">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>14</p>
                      </td>
                      <td colspan="2" width="378">
                        <p><strong>KEHUTANAN</strong></p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>a</p>
                      </td>
                      <td width="340">
                        <p>Luas Hutan</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="p14_a" value="<?php echo $data['p14_a'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Ha</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>b</p>
                      </td>
                      <td width="340">
                        <p>Jumlah jenis Tanaman Hutan</p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;"><input type="text" name="p14_b"
                              value="<?php echo $data['p14_b'] ?>"></span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>c</p>
                      </td>
                      <td width="340">
                        <p>Pulai</p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;"><input type="text" name="p14_c"
                              value="<?php echo $data['p14_c'] ?>"></span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>d</p>
                      </td>
                      <td width="340">
                        <p>Sungkai</p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;"><input type="text" name="p14_d"
                              value="<?php echo $data['p14_d'] ?>"></span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>15</p>
                      </td>
                      <td colspan="2" width="378">
                        <p><strong>PERTAMBANGAN DAN BAHAN GALIAN</strong></p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>a</p>
                      </td>
                      <td width="340">
                        <p>Jumlah Jenis Pertambangan Bahan Galian</p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;"><input type="text" name="p15_a"
                              value="<?php echo $data['p15_a'] ?>"></span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>b</p>
                      </td>
                      <td width="340">
                        <p>Jumlah hasil pertambangan dan galian</p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;"><input type="text" name="p15_b"
                              value="<?php echo $data['p15_b'] ?>"></span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>17</p>
                      </td>
                      <td colspan="2" width="378">
                        <p><strong>PERDAGANGAN DAN JASA</strong></p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>a</p>
                      </td>
                      <td width="340">
                        <p>Perdagangan</p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;"><input type="text" name="p17_a"
                              value="<?php echo $data['p17_a'] ?>"></span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>b</p>
                      </td>
                      <td width="340">
                        <p>Jumlah jenis sarana perdagangan</p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;"><input type="text" name="p17_b"
                              value="<?php echo $data['p17_b'] ?>"></span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>c</p>
                      </td>
                      <td width="340">
                        <p>Jumlah perdagangan</p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;"><input type="text" name="p17_c"
                              value="<?php echo $data['p17_c'] ?>"></span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>d</p>
                      </td>
                      <td width="340">
                        <p>Jual beli karet</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="p17_d" value="<?php echo $data['p17_d'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Orang</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>e</p>
                      </td>
                      <td width="340">
                        <p>Jual beli sawit dan brondol</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="p17_e" value="<?php echo $data['p17_e'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Lapak</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>f</p>
                      </td>
                      <td width="340">
                        <p>Dagangan manisan</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="p17_f" value="<?php echo $data['p17_f'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Toko</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>18</p>
                      </td>
                      <td colspan="2" width="378">
                        <p><strong>PERKOPERASIAN</strong></p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>a</p>
                      </td>
                      <td width="340">
                        <p>KUD Fajar Sidik</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="p18_a" value="<?php echo $data['p18_a'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Unit</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>b</p>
                      </td>
                      <td width="340">
                        <p>Koperasi Simpan Pinjam</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="p18_b" value="<?php echo $data['p18_b'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Unit</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p>19</p>
                      </td>
                      <td colspan="2" width="378">
                        <p><strong>PERUMAHAN</strong></p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>a</p>
                      </td>
                      <td width="340">
                        <p>Rumah permanen</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="p19_a" value="<?php echo $data['p19_a'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Unit</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>b</p>
                      </td>
                      <td width="340">
                        <p>Rumah semi permanen</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="p19_b" value="<?php echo $data['p19_b'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Unit</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>c</p>
                      </td>
                      <td width="340">
                        <p>Rumah non permanen</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="p19_c" value="<?php echo $data['p19_c'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Unit</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>&nbsp;</p>
                      </td>
                      <td width="340">
                        <p>&nbsp;</p>
                      </td>
                      <td width="113">
                        <p>&nbsp;</p>
                      </td>
                      <td width="76">
                        <p>&nbsp;</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">20</span></p>
                      </td>
                      <td colspan="2" width="378">
                        <p><strong>DEMOGRAFI DAN MONOGRAFI</strong></p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="340">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>a</p>
                      </td>
                      <td width="340">
                        <p>Luas Desa</p>
                      </td>
                      <td width="113">
                        <p><input type="text" name="d20_a" value="<?php echo $data['d20_a'] ?>"></p>
                      </td>
                      <td width="76">
                        <p>Ha</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>b</p>
                      </td>
                      <td width="340">
                        <p>Batas Wilayah</p>
                      </td>
                      <td width="113">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="76">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>c</p>
                      </td>
                      <td width="340">
                        <p>Sebelah Utara</p>
                      </td>
                      <td colspan="2" width="189">
                        <p><input type="text" name="d20_c" value="<?php echo $data['d20_c'] ?>"></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>d</p>
                      </td>
                      <td width="340">
                        <p>Sebelah Selatan</p>
                      </td>
                      <td colspan="2" width="189">
                        <p><input type="text" name="d20_d" value="<?php echo $data['d20_d'] ?>"></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>f</p>
                      </td>
                      <td width="340">
                        <p>Sebelah Barat</p>
                      </td>
                      <td colspan="2" width="189">
                        <p><input type="text" name="d20_f" value="<?php echo $data['d20_f'] ?>"></p>
                      </td>
                    </tr>
                    <tr>
                      <td width="38">
                        <p><span style="text-decoration: line-through;">&nbsp;</span></p>
                      </td>
                      <td width="38">
                        <p>g</p>
                      </td>
                      <td width="340">
                        <p>Sebelah Timur</p>
                      </td>
                      <td colspan="2" width="189">
                        <p><input type="text" name="d20_g" value="<?php echo $data['d20_g'] ?>"></p>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <button type="submit" class="btn btn-primary pull-right">Input Administratif</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  $('#datepicker').datepicker({
    uiLibrary: 'bootstrap4'
  });
</script>

<?php } else { ?>
<script language=javascript>
  alert('Login Terlebih Dahulu');
  document.location.href = "login.php";
</script>


<?php } ?>
<?php include "bawah.php"; ?>