<?php session_start(); ?>
<?php include "atas.php"; include "config.php"; ?>

<?php

    $id_penduduk = $_GET['id'];
    $sql=mysqli_query($koneksi,"select * from tb_penduduk where id_penduduk='$id_penduduk'");
    $data=mysqli_fetch_assoc($sql);
 
 if(isset($_SESSION['username'])){  ?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <a href="data_penduduk">
                        <div class="card-header card-header-info card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">arrow_back</i>
                            </div>
                            <p class="card-category">Home -> Data Penduduk -> Edit</p>
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
                        <h4 class="card-title">Edit Data Penduduk</h4>
                        <p class="card-category">Silahkan Edit Data</p>
                    </div>
                    <div class="card-body">
                        <form action="query_edit_penduduk" method="post" name="form1_input" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">NIK</label>
                                        <input type="text" class="form-control" readonly name="nik"
                                            value="<?php echo $data['nik']; ?>">
                                        <input type="hidden" class="form-control"
                                            value="<?php echo $data['id_penduduk']; ?>" readonly name="id_penduduk">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nama</label>
                                        <input type="text" class="form-control" readonly name="nama"
                                            value="<?php echo $data['nama']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Status</label>
                                        <select class="form-control" name="status">
                                            <option>---- Pilih Status ----</option>
                                            <option value="Hidup" <?php if($data['status'] == 'Hidup') echo"selected"; ?>>Hidup</option>
                                            <option value="Mati" <?php if($data['status'] == 'Mati') echo"selected"; ?>>Mati</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Edit Penduduk</button>
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
<?php  include "bawah.php"; ?>