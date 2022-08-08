<?php
$title = 'Subins.tech - Đăng ký';
$root = 'auth';

require_once('./app/views/include/head.php');
?>

<body>
  <div class="flex flex-col flex-1 relative">


    <div class="flex flex-col basis-auto grow shrink-0 [background-position-y:bottom] [background-position-x:center] bg-no-repeat bg-contain bg-fixed">

      <div class="flex justify-center items-center flex-col grow shrink-0 basis-auto">
        <div class="lg:w-[500px] bg-white rounded-[0.475rem] shadow-sm p-10 lg:p-[2rem] mx-auto">
          <form class="w-full" action="" id="vt_sign_up_form" method="post">
            <div class="flex  justify-between">

              <div class="mb-10">
                <h1 class="text-[#181c32] mb-3 text-[1.35rem] lg:text-[1.75rem] font-semibold">
                  Đăng ký
                </h1>
                <div class="text-[#b5b5c3] font-medium text-[1.25rem]">
                  Đã có tài khoản?
                  <a href="Login" class="text-[#009ef7] font-semibold">Đăng nhập</a>
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
            <div class="relative grid gap-6 grid-cols-1 xl:grid-cols-2 mb-4">
              <div class="col">
                <label class="form-label font-semibold text-[#181c32] text-[1.075rem]">Tên đăng nhập</label>
                <input class="form-control form-control-lg form-control-solid" value="<?= isset($_POST['username']) ? $_POST['username'] : false;  ?>" type="text" name="username" placeholder="Nhập tên đăng nhập" id="UserName" autocomplete="off" />

              </div>

              <div class="col">
                <label class="form-label font-semibold text-[#181c32] text-[1.075rem]">
                  Nhập họ và tên
                </label>
                <input class="form-control form-control-lg form-control-solid" value="<?= isset($_POST['fullname']) ? $_POST['fullname'] : false;  ?>" type="text" name="fullname" placeholder="Nhập họ và tên" autocomplete="off" />
              </div>


            </div>


            <div class="fv-row mb-4">
              <label class="form-label font-semibold text-[#181c32] text-[1.075rem]">Email</label>
              <input class="form-control form-control-lg form-control-solid" value="<?= isset($_POST['email']) ? $_POST['email'] : false;  ?>" type="text" name="email" placeholder="Nhập email" id="Email" autocomplete="off" />

            </div>

            <div class="mb-4 fv-row fv-plugins-icon-container">
              <div class="mb-1">
                <label class="form-label font-semibold text-[#181c32] text-[1.075rem]">Mật khẩu</label>
                <div class="relative mb-3">
                  <input class="form-control form-control-lg form-control-solid" value="<?= isset($_POST['password']) ? $_POST['password'] : false;  ?>" type="password" placeholder="Nhập mật khẩu" name="password" id="Password" autocomplete="off" aria-autocomplete="list" />
                  <span class="btn btn-sm btn-icon absolute translate-middle top-1/2 right-0 -translate-x-y-1/2 -translate-x-1/2 -translate-y-1/2 -mr-2">
                    <i class="fa fa-eye-slash text-[1.275rem] text-[#a1a5b7]"></i>
                    <i class="fa fa-eye text-[1.275rem] text-[#a1a5b7] hidden"></i>
                  </span>
                </div>

              </div>

            </div>


            <div class="fv-row mb-10">
              <label class="form-label font-semibold text-[#181c32] text-[1.075rem]">
                Nhập lại Mật khẩu
              </label>
              <input class="form-control form-control-lg form-control-solid" value="<?= isset($_POST['repassword']) ? $_POST['repassword'] : false;  ?>" type="password" name="repassword" placeholder="Nhập lại mật khẩu" autocomplete="off" id="ConfirmPassword" />
            </div>


            <div class="mb-10">
              <label class="flex items-center">
                <input class="form-check-input bg-[length:60%_60%]" type="checkbox" name="checkbox" value="" id="termInput" style="border: 1px solid rgba(0, 0, 0, 0.25) !important" checked="" />
                <span class="ml-[0.55rem] cursor-pointer font-medium text-[#5e6278] text-[1.075rem]">
                  Tôi đồng ý với
                  <a href="term" class="ml-1 text-[#009ef7]">Điều khoản bảo mật</a>.
                </span>
              </label>
            </div>
            <div class="text-center">
              <button type="submit" id="vt_sign_up_submit" class="btn btn-lg btn-primary" name="Register">
                <span class="indicator-label">ĐĂNG KÝ</span>
              </button>
            </div>
          </form>
        </div>
      </div>


    </div>



  </div>


  <?php

  require_once('./app/views/include/head.php');

  ?>