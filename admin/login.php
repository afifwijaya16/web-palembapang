<?php  include "atas.php"; ?>
<div class="row" align="center">
  <div class="col-md-4">
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title">Login Website</h4>
        <p class="card-category">Silahkan Login</p>
      </div>
      <div class="card-body">
        <form action="akses_login.php" method="post" name="form1">
          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label class="bmd-label-floating">Username</label>
                <input type="text" class="form-control" name="username" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="bmd-label-floating">Password</label>
                <input type="password" class="form-control" name="password" required>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary pull-right">Login Website</button>
          <div class="clearfix"></div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-4">
  </div>
</div>
<?php include "bawah.php"; ?>