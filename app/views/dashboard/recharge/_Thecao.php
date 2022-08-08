<?php

$root = 'dashboard';
$title = 'Nạp tiền tài khoản'; ?>

<?php require('../config/head.php');
if (empty($_SESSION['username'])) {
  header('Location: auth/login');
  exit;
} ?>


<?php require_once('../config/function.php'); ?>
<div class="container-scroller">


  <?php require('../config/dashboard/navbar.php'); ?>

  <div class="container-fluid page-body-wrapper">
    <?php require('../config/dashboard/sidebar.php'); ?>


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




        <p>đang phát triển</p>


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


<?php require('../config/end.php'); ?>