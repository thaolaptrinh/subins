<?php

$root = 'dashboard';
$title = 'Nạp tiền tài khoản';
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

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="card-tab" data-bs-toggle="tab" data-bs-target="#card" type="button" role="tab" aria-controls="card" aria-selected="false">Thẻ cào</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="banking-tab" data-bs-toggle="tab" data-bs-target="#banking" type="button" role="tab" aria-controls="banking" aria-selected="true">Ngân hàng</button>
          </li>
        </ul>



        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Banking  -->
          <div class="tab-pane" id="banking" role="tabpanel" aria-labelledby="baking-tab">

            <div class="row">
              <div class="col-md-12 my-3">
                <h4 class="text-primary" id="tygia">Tỉ giá 1 VNĐ = 1 coin</h4>
              </div>

              <div class="col-md-12 mb-3">
                <div class="alert alert-secondary" role="alert">
                  <div><b>- Bạn vui lòng chuyển khoản chính xác nội dung để được cộng tiền nhanh nhất.</b></div>
                  <div><b>- Nếu sau 10 phút từ khi tiền trong tài khoản của bạn bị trừ mà vẫn chưa được cộng tiền vui liên hệ Admin để được hỗ trợ.</b></div>
                  <div><b>- Vui lòng không nạp từ bank khác qua bank này (tránh lỗi).</b></div>
                </div>

              </div>

              <div class="mb-3 col-sm-6">
                <div class="text-center mb-3">
                  <img src="<?= BASE_URL('assets/images/logo_momo.png') ?>" alt="logo_momo" height="50px">
                </div>
                <div class="alert bg-success text-white" role="alert">
                  <div>
                    Số tài khoản:
                    <b class="text-primary" id="phone_momo">0345005746</b>
                  </div>

                  <div>
                    Chủ tài khoản:
                    <b id="ctk_momo">Nguyễn Văn Thảo</b>
                  </div>


                  <div>
                    Nạp tối thiểu:
                    <b id="min_momo">10,000 VNĐ</b>
                  </div>


                  <div>
                    Chú ý:
                    <b id="note_momo">Bảo trì </b>
                  </div>
                </div>
              </div>

              <div class="mb-3 col-sm-6">
                <div class="text-center mb-3">
                  <img src="<?= BASE_URL('assets/images/logo_thesieure.png') ?>" alt="logo_thesieure" height="50px">
                </div>
                <div class="alert bg-success text-white" role="alert">
                  <div>
                    Tên tài khoản:
                    <b class="text-primary" id="username_tsr">0345005746</b>
                  </div>


                  <div>
                    Chủ tài khoản:
                    <b id="ctk_tsr">Nguyễn Văn Thảo</b>
                  </div>


                  <div>
                    Nạp tối thiểu:
                    <b id="min_tsr">10,000 VNĐ</b>
                  </div>


                  <div>
                    Chú ý:
                    <b id="note_tsr">Bảo trì </b>
                  </div>



                </div>

              </div>


              <div class="col-md-12 my-3">
                <h4 class="text-primary">Nội dung nạp tiền</h4>
              </div>

              <div class="col-md-12">
                <div class="alert alert-info text-center" role="alert">
                  <b id="content_recharge" class="fs-4">
                    naptien1000
                    <i class="ti-clipboard"></i>
                  </b>
                </div>
              </div>

              <div class="col-md-12 my-3">
                <h4 class="text-primary">Lưu ý nạp tiền</h4>
              </div>

              <div class="col-md-12">
                <div class="alert alert-info" role="alert">
                  <p id="note_recharge">
                    - Cố tình nạp dưới mức nạp không hỗ trợ <br>
                    - Nạp sai cú pháp, sai số tài khoản, sai ngân hàng sẽ bị trừ 20% phí giao dịch. Vd: nạp 100k sai nội dung sẽ chỉ nhận được 80k coin và phải liên hệ admin để cộng tay.
                  </p>

                </div>
              </div>

            </div>
          </div>

          <!-- Card -->
          <div class="tab-pane active" id="card" role="tabpanel" aria-labelledby="card-tab">
            <div class="col-md-12 my-3">
              <h4 class="text-primary" id="tygia">Tỉ giá 1 VNĐ = 1 coin</h4>
            </div>

            <form action="" method="post">
              <div class="row">
                <div class="mb-3 col-md-6">
                  <label for="" class="form-label">Loại thẻ</label>
                  <select class="form-select" name="" id="">
                    <option selected>Chọn loại thẻ</option>
                    <option value="VIETTEL">Viettel</option>
                    <option value="MOBIPHONE">Mobiphone</option>
                    <option value="VINAPHONE">Vinaphone</option>
                    <option value="VIETNAMOBILE">Vietnamobile</option>
                  </select>
                </div>


                <div class="mb-3 col-md-6">
                  <label for="" class="form-label">Mệnh giá</label>
                  <select class="form-select" name="" id="">
                    <option selected>Chọn mệnh giá thẻ</option>
                    <option value="10000">10.000 VNĐ</option>
                    <option value="20000">20.000 VNĐ</option>
                    <option value="50000">50.000 VNĐ</option>
                    <option value="100000">100.000 VNĐ</option>
                    <option value="200000">200.000 VNĐ</option>
                    <option value="500000">500.000 VNĐ</option>
                  </select>
                </div>


                <div class="mb-3 col-md-6">
                  <label for="card_seri" class="form-label">Mã số seri</label>
                  <input type="text" class="form-control" name="card_seri" id="card_seri" placeholder="Nhập số seri của thẻ">
                </div>



                <div class="mb-3 col-md-6">
                  <label for="card_code" class="form-label">Mã thẻ</label>
                  <input type="text" class="form-control" name="card_code" id="card_code" placeholder="Nhập mã thẻ">
                </div>


                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-primary text-white">
                    <i class="ti-credit-card mx-2"></i>
                    Nạp ngay</button>
                </div>

              </div>
            </form>

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
