<?php

$root = 'dashboard';
$title = 'Titkok view';
?>


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


        <?php

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

          $link = trim($_POST['link']);
          $quality = trim($_POST['quality']);
          if (empty(check_string($_POST['link'])) || empty(check_string($_POST['quality']))) {
            $status = false;
            $message = 'Vui lòng nhập đầy đủ!';
            $data = '<div class="alert alert-danger text-center"><strong>' . $message . '</strong></div>';
          } elseif ($quality  != 1000) {
            $status = false;

            $message = 'Vui lòng nhập số lượng là: 1000';
            $data = '<div class="alert alert-danger text-center"><strong>' . $message . '</strong></div>';
          } elseif (!check_link($link)) {
            $status = false;

            $message = 'Vui lòng nhập đúng định dạng link video';
            $data = '<div class="alert alert-danger text-center"><strong>' . $message . '</strong></div>';
          } else {
            $status = true;
            $message = 'Thành công!';
            $data = '<div class="alert alert-success text-center"><strong>' . $message . '</strong></div>';
          }
        }
        ?>


        <?php if (isset($status) && $status) {

        ?>
          <script>
            setTimeout(function() {
              let tab = setTimeout(function() {
                window.open('<?= $API->order($quality, $link) ?>', '_self')
              }, 100);
              clearTimeout(tab);
              window.open('http://localhost/web_services_backup/service/tiktok/view', '_self');
            }, 500);
          </script>

        <?php } ?>



        <div class="row">

          <form action="" method="post">
            <?php echo (isset($data) ? $data : "") ?>

            <div class=" mb-3">
              <label for="link" class="form-label">Link</label>
              <input type="text" class="form-control" name="link" id="link" aria-describedby="helpId" placeholder="https://www.tiktok.com/@user/video/...." value="<?php echo (!empty($_POST['link']) ? $_POST['link'] : ""); ?>">
              <small id="helpId" class="form-text text-muted">Nhập link video tiktok</small>
            </div>

            <div class="mb-3">
              <label for="quality" class="form-label">Số lượng</label>
              <input type="text" class="form-control" name="quality" id="quality" aria-describedby="helpId" placeholder="1000" value="<?php echo (!empty($_POST['quality']) ? $_POST['quality'] : ""); ?>">
              <small id="helpId" class="form-text text-muted">Nhập 1000 thôi</small>
            </div>


            <div class="mb-3">
              <button type="submit" name="order" class=" btn btn-primary text-white">Tạo đơn</button>
            </div>
          </form>

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




<?php require('../config/end.php'); ?>