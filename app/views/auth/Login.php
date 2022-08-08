<?php
$root = 'auth';
$title = 'Subins.tech - Đăng nhập';
require_once('./app/views/include/head.php');

?>

<div class="flex flex-col flex-1">
  <div class="flex flex-col basis-auto grow shrink-0 [background-position-y:bottom] [background-position-x:center] bg-no-repeat bg-contain bg-fixed">
    <div class="flex justify-center items-center flex-col grow shrink-0 basis-auto p-10 lg:pb-20">

      <div class="lg:w-[500px] bg-white rounded-[0.475rem] shadow-sm p-10 lg:p-[3.75rem] mx-auto">
        <form class="w-full" action="" method="POST">

          <div class="flex justify-between">
            <div class="mb-10">
              <h1 class="text-[#181c32] mb-3 text-[1.35rem] lg:text-[1.75rem] font-semibold">
                Đăng nhập Subins
              </h1>
              <div class="text-[#b5b5c3] font-medium text-[1.25rem]">
                Chưa có tài khoản?
                <a href="Register" class="text-[#009ef7] font-semibold">Đăng ký</a>
              </div>
            </div>

            <a href="./" class="mb-12">
              <img alt="Logo" src="<?= BASE_URL('public/src/img/logo.png') ?>" class="h-[50px]" />
            </a>
          </div>
          <!-- message -->
          <?= (isset($data['data']) ? $data['data'] : '') ?>
          <div class="flex items-center mb-10">
            <div class="border-b border-solid border-b-current[#eff2f5] border-gray-300 max-w-[50%] w-full"></div>
            <div class="border-b border-solid border-b-current[#eff2f5] border-gray-300 max-w-[50%] w-full"></div>
          </div>
          <div class="mb-10">
            <label class="form-label text-[1.075rem] font-semibold text-[#181c32]">Tên đăng nhập</label>
            <input class="form-control form-control-lg form-control-solid" value="<?= isset($_POST['username']) ? $_POST['username'] : false; ?>" type="text" name="username" id="UserName" autocomplete="off" placeholder="Nhập tên đăng nhập" />
          </div>
          <div class="mb-10">
            <div class="flex justify-between items-center mb-2">
              <label class="form-label font-semibold text-[#181c32] text-[1.075rem] mb-0">Mật khẩu</label>
              <!-- <a href="" class="text-[#009ef7] font-semibold text-[1.075rem]">Quên mật khẩu ?</a> -->
            </div>
            <input class="form-control form-control-lg form-control-solid" value="<?= isset($_POST['password']) ? $_POST['password'] : false; ?>" type="password" name="password" id="Password" placeholder="Nhập mật khẩu" autocomplete="off" />
          </div>
          <div class="text-center">
            <button type="submit" id="vt_sign_in_submit" class="btn btn-lg btn-primary w-full mb-5" name="login">
              <span class="indicator-label">ĐĂNG NHẬP</span>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<?php

require_once('./app/views/include/end.php');

?>