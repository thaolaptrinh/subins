<?php

$root = 'dashboard';
$title = 'Lịch sử tài khoản';
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

<?php require('app/views/include/end.php');
