<?php

$root = 'dashboard';
$title = 'Thông tin tài khoản';
global $my_name, $my_user, $my_email, $my_pass, $my_sodu, $my_capbac, $my_date;
?>


<?php require('app/views/include/head.php');

?>


<div class="container-scroller">


  <?php require('app/views/include/dashboard/navbar.php'); ?>

  <div class="container-fluid page-body-wrapper">
    <?php require('app/views/include/dashboard/sidebar.php'); ?>



    <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
          <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <h4 class="font-weight-bold mb-0">
                  <?= $title ?>
                </h4>
              </div>
              <div>
                <button type="button" class="btn btn-primary btn-icon-text btn-rounded">
                  <i class="ti-clipboard btn-icon-prepend"></i>Báo lỗi
                </button>
              </div>
            </div>
          </div>
        </div>





        <div class="row">

          <div class="col col-lg-6">
            <div class="card">
              <div class="card-header">
                Thông tin tài khoản
              </div>
              <div class="card-body">
                <form class="row g-3">
                  <div class="col-md-6">
                    <label class="form-label">Họ tên</label>
                    <input type="text" class="form-control" value="<?= $my_name ?>" readonly>
                  </div>

                  <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" value="<?= $my_email ?>" readonly>
                  </div>


                  <div class="col-md-6">
                    <label class="form-label">Tài khoản</label>
                    <input type="text" class="form-control" value="<?= $my_user ?>" readonly>
                  </div>

                  <div class="col-md-6">
                    <label class="form-label">Số dư</label>
                    <input type="text" class="form-control" value="<?= $my_sodu ?>" readonly>
                  </div>


                  <div class="col-md-6">
                    <label class="form-label">Cấp độ</label>
                    <input type="text" class="form-control" value="<?= $my_capbac ?>" readonly>
                  </div>

                  <div class="col-md-6">
                    <label class="form-label">Ngày đăng ký</label>
                    <input type="text" class="form-control" value="<?= $my_date ?>" readonly>
                  </div>
                </form>
              </div>
            </div>
          </div>


          <div class="col col-lg-6">
            <div class="card">
              <div class="card-header">
                Đổi mật khẩu
              </div>
              <div class="card-body">
                <form class="row g-3" action="<?= BASE_URL('profile/change-password') ?>" method="post">

                  <div class="mb-3">
                    <label for="old_pass" class="form-label">Mật khẩu cũ</label>
                    <input type="password" name="old_pass" id="old_pass" placeholder="************" class="form-control" required>
                  </div>

                  <div class="mb-3">
                    <label for="new_password" class="form-label">Mật khẩu mới</label>
                    <input type="password" name="new_pass" id="new_pass" placeholder="************" class="form-control" required>
                  </div>


                  <div class="mb-3">
                    <label for="old_pass_again" class="form-label">Nhập lại mật khẩu mới</label>
                    <input type="password" name="new_pass_again" id="new_pass_again" value="" placeholder="************" class="form-control" required>
                  </div>

                  <button type="submit" class="btn btn-primary text-white" id="change_pass">
                    <i class="ti-lock"></i>
                    Đổi mật khẩu</button>

                </form>
              </div>
            </div>
          </div>


        </div>



      </div>

      <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">© 2022 - Hệ thống vận hàng bởi
            Nguyễn
            Văn Thảo</span>
          <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">SUBINS.TECH</span>
        </div>
      </footer>
    </div>
  </div>




</div>


<?php require('app/views/include/end.php');
