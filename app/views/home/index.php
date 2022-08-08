<?php
$root = 'landing';
$title = 'Subins.tech - Dịch vụ mạng xã hội Instagram';
require_once('./app/views/include/head.php');

?>


<div class="flex flex-col flex-1">
  <section class="mb-0" id="home">
    <div class="bg-no-repeat bg-contain [background-position-x:center] [background-position-y:bottom] bg-[#13263c]" style="background-image: url('./src/img/landing.svg')">
      <div id="landing-page" class="flex items-center h-[100px]" style="animation-duration: 0.35s">
        <div class="layout-container w-full">
          <div class="flex items-center justify-between">
            <div class="flex items-center grow basis-0 shrink-0">
              <button class="btn btn-icon btn-active-color-primary mr-3 flex lg:!hidden" id="vt_landing_menu_toggle">
                <span class="svg-icon svg-icon-2hx">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black"></path>
                    <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black"></path>
                  </svg>
                </span>
              </button>
              <a href="home">
                <img alt="Logo" src="<?= BASE_URL('public/src/img/logo-landing.png') ?>" class="logo-default h-[50px]" />
                <img alt="Logo" src="<?= BASE_URL('public/src/img/logo.png') ?>" class="logo-sticky hidden h-[30px] lg:h-[35px]" />
              </a>
            </div>
            <div class="lg:block" id="vt_header_nav_wrapper">
              <div class="lg:block p-5 lg:p-0">
                <div class="flex w-full p-0 m-0 list-none flex-col lg:flex-row flex-nowrap text-[1.15rem] font-medium rounded-[0.475rem] text-[#a1a5b7]" id="vt_landing_menu">
                  <div class="lg:flex items-center nav-menu">
                    <a class="cursor-pointer flex items-center basic-full transition-none outline-none py-3 px-4 2xl:px-6" href="#home">Home</a>
                  </div>

                  <div class="lg:flex items-center nav-menu">
                    <a class="cursor-pointer flex items-center basic-full transition-none outline-none py-3 px-4 2xl:px-6" href="#about">Subins là gì?</a>
                  </div>

                  <div class="lg:flex items-center nav-menu">
                    <a class="cursor-pointer flex items-center basic-full transition-none outline-none py-3 px-4 2xl:px-6" href="#services">Dịch vụ</a>
                  </div>

                  <div class="lg:flex items-center nav-menu">
                    <a class="cursor-pointer flex items-center basic-full transition-none outline-none py-3 px-4 2xl:px-6" href="#testimonials">Chính Sách Ưu Đãi</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="grow basis-0 shrink-0 text-right ml-1">
              <?php if (!isset($_SESSION['username'])) { ?>
                <a href="Login" class="btn btn-success">Đăng Nhập</a>
              <?php } else { ?>
                <a href="Login" class="btn btn-success">
                  <?= $_SESSION['username'] ?>
                </a>

              <?php } ?>

            </div>
            <div class="text-right ml-5 scale-[0.65]">
              <a href="#"><img src="<?= BASE_URL('public/src/img/lang-en-index.png') ?>" /></a>
            </div>
          </div>
        </div>
      </div>

      <div class="flex flex-col justify-center items-center w-full min-h-[350px] lg:min-h-[500px] px-9">
        <div class="text-center mb-5 lg:mb-10 py-10 lg:py-20">
          <h1 class="text-white font-semibold text-3xl lg:text-5xl mb-16 !leading-[0.75]">
            Dịch vụ MXH Instagram
            <br />
            <br />với
            <span style="
                    background: linear-gradient(
                      to right,
                      #12ce5d 0%,
                      #ffd80c 100%
                    );
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                  ">
              <span id="vt_landing_hero_text">Hệ thống tương tác tốt nhất</span>
            </span>
          </h1>

          <a href="Login" class="btn btn-primary">Trải Nghiệm Ngay</a>

        </div>
      </div>
    </div>

    <div class="relative text-[#13263c]  mb-10 lg:mb-20">
      <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
      </svg>
    </div>
  </section>

  <!-- ========== Start About - Subins là gì? ========== -->
  <section class="-mb-10 lg:-mb-20 z-[2]" id="about">
    <div class="layout-container">
      <div class="text-center mb-10">
        <h3 class="xl:text-[2.5rem] text-[#181c32 ] mb-5 font-semibold" id="how-it-works" data-vt-scroll-offset="{default: 100, lg: 150}">
          Subins là gì?
        </h3>

        <div class="text-[1.15rem] text-[#a1a5b7] font-medium">
          Subins cung cấp cho khách hàng dịch vụ tương tác mạng xã hội
          Instagram chất lượng nhất với giá thành rẻ nhất, Ngoài ra còn rất
          nhiều ưu đãi giá rẻ nay còn rẻ hơn.
        </div>
      </div>

      <div class="grid justify-center items-center grid-cols-3 gap-5 w-full gy-10 md:mb-20">
        <div class="story mt-5">
          <div class="text-center mb-10 md:mb-0">
            <img src="<?= BASE_URL('public/src/img/sketchy-1-2.png') ?>" class="max-h-[125px] mx-auto mb-9" alt="" />

            <div class="flex justify-center items-center mb-5">
              <span class="inline-flex justify-center items-center p-5 mr-3 h-7 w-7 rounded-full bg-[#e8fff3] text-[#50cd89] font-semibold text-[1.3rem] xl:text-[1.35rem]">1</span>
              <div class="text-[1.15rem] lg:text-[1.35rem] font-semibold text-[#181c32 ]">
                Đăng ký tài khoản
              </div>
            </div>
            <div class="font-medium text-[1.075rem] lg:text-[1.25rem] text-[#a1a5b7]">
              Chỉ với vài thao tác đơn giản
              <br />khách hàng đã có thể sở hữu <br />tài khoản của Subins
            </div>
          </div>
        </div>
        <div class="story mt-10">
          <div class="text-center mb-10 mb-md-0">
            <img src="<?= BASE_URL('public/src/img/sketchy-1-8.png') ?>" class="max-h-[125px] mx-auto mb-9" alt="" />
            <div class="flex justify-center items-center mb-5">
              <span class="inline-flex justify-center items-center p-5 mr-3 h-7 w-7 rounded-full bg-[#e8fff3] text-[#50cd89] font-semibold text-[1.3rem] xl:text-[1.35rem]">1</span>
              <div class="text-[1.15rem] lg:text-[1.35rem] font-semibold text-[#181c32 ]">
                Nạp tiền vào tài khoản
              </div>
            </div>
            <div class="font-medium text-[1.075rem] lg:text-[1.25rem] text-[#a1a5b7]">
              Subins cung cấp 3 phương thức
              <br />nạp tiền vào tài khoản <br />Internet Banking, Momo, Thẻ
              cào
            </div>
          </div>
        </div>
        <div class="story mt-10">
          <div class="text-center mb-10 mb-md-0">
            <img src="<?= BASE_URL('public/src/img/sketchy-1-12.png') ?>" class="max-h-[125px] mx-auto mb-9" alt="" />
            <div class="flex justify-center items-center mb-5">
              <span class="inline-flex justify-center items-center p-5 mr-3 h-7 w-7 rounded-full bg-[#e8fff3] text-[#50cd89] font-semibold text-[1.3rem] xl:text-[1.35rem]">1</span>
              <div class="text-[1.15rem] lg:text-[1.35rem] font-semibold text-[#181c32 ]">
                Sử dụng dịch vụ
              </div>
            </div>
            <div class="font-medium text-[1.075rem] lg:text-[1.25rem] text-[#a1a5b7]">
              Chỉ cần vài thao tác
              <br />khách hàng đã có thể sử dụng dịch vụ và<br />và nhận
              tương tác
            </div>
          </div>
        </div>
      </div>
      <div class="relative overflow-hidden swiper mySwiper">

        <div class="swiper-wrapper">
          <div class="swiper-slide mx-16 pt-5 px-5 lg:pt-10 lg:px-10">
            <img src="<?= BASE_URL('public/src/img/product-demos-demo3-new1.png') ?>" class="rounded-[0.475rem] max-h-full shadow-[0_0.5rem_1.5rem_0.5rem_rgb(0,0,0,0.08)]" alt="" />
          </div>
          <div class="swiper-slide mx-16 pt-5 px-5 lg:pt-10 lg:px-10">
            <img src="<?= BASE_URL('public/src/img/product-demos-demo3-new1.png') ?>" class="rounded-[0.475rem] max-h-full shadow-[0_0.5rem_1.5rem_0.5rem_rgb(0,0,0,0.08)" alt="" />
          </div>
          <div class="swiper-slide mx-16 pt-5 px-5 lg:pt-10 lg:px-10">
            <img src="<?= BASE_URL('public/src/img/product-demos-demo3-new1.png') ?>" class="rounded-[0.475rem] max-h-full shadow-[0_0.5rem_1.5rem_0.5rem_rgb(0,0,0,0.08)" alt="" />
          </div>
        </div>


        <div class="swiper-button-next" style="right:0px;"></div>
        <div class="swiper-button-prev" style="left:0px"></div>
      </div>
    </div>
  </section>

  <section class="sm:-mt-10" id="services">
    <div class="relative !text-[#13263c]">
      <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
      </svg>
    </div>

    <div class="pb-[3.75rem] pt-[4.5rem] bg-[#13263c]">
      <div class="layout-container">
        <div class="text-center mt-14 mb-16">
          <h3 class="text-[1.375rem] lg:text-[2.5rem] text-white font-medium mb-5">
            Cung cấp dịch vụ không giới hạn
          </h3>
          <div class="text-[1.15rem] text-[#5e6278] font-medium">
            Subin có hệ thống dịch vụ, phục vụ 24/7,
            <br />cấp tương tác chất lượng nhất cho khách hàng.
          </div>
        </div>
        <div class="flex justify-center items-center">
          <div class="flex flex-wrap justify-center items-center lg:justify-between mb-15 mx-auto xl:w-[900px]">
            <div class="flex flex-col justify-center items-center h-[200px] w-[200px] lg:h-[250px] lg:w-[250px] m-3 bg-no-repeat bg-center bg-contain" style="background-image: url('<?= BASE_URL('public/src/img/octagon.svg') ?>')">
              <span class="svg-icon svg-icon-2tx svg-icon-white mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <rect x="2" y="2" width="9" height="9" rx="2" fill="black"></rect>
                  <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black"></rect>
                  <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black"></rect>
                  <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black"></rect>
                </svg>
              </span>
              <div class="mb-0 text-center">
                <div class="text-[1.375rem] lg:text-[2.5rem] font-medium text-white flex justify-center items-center">
                  <div class="min-w-[70px] counted">900</div>
                </div>
                <span class="text-[#7e8299] font-medium text-[1.15rem] leading-none">Người người dùng</span>
              </div>
            </div>

            <div class="flex flex-col justify-center items-center h-[200px] w-[200px] lg:h-[250px] lg:w-[250px] m-3 bg-no-repeat bg-center bg-contain" style="background-image: url('<?= BASE_URL('public/src/img/octagon.svg') ?>')">
              <span class="svg-icon svg-icon-2tx svg-icon-white mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path d="M13 10.9128V3.01281C13 2.41281 13.5 1.91281 14.1 2.01281C16.1 2.21281 17.9 3.11284 19.3 4.61284C20.7 6.01284 21.6 7.91285 21.9 9.81285C22 10.4129 21.5 10.9128 20.9 10.9128H13Z" fill="black"></path>
                  <path opacity="0.3" d="M13 12.9128V20.8129C13 21.4129 13.5 21.9129 14.1 21.8129C16.1 21.6129 17.9 20.7128 19.3 19.2128C20.7 17.8128 21.6 15.9128 21.9 14.0128C22 13.4128 21.5 12.9128 20.9 12.9128H13Z" fill="black"></path>
                  <path opacity="0.3" d="M11 19.8129C11 20.4129 10.5 20.9129 9.89999 20.8129C5.49999 20.2129 2 16.5128 2 11.9128C2 7.31283 5.39999 3.51281 9.89999 3.01281C10.5 2.91281 11 3.41281 11 4.01281V19.8129Z" fill="black"></path>
                </svg>
              </span>

              <div class="mb-0 text-center">
                <div class="text-[1.375rem] lg:text-[2.5rem] font-medium text-white flex justify-center items-center">
                  <div class="min-w-[70px] counted">1000</div>
                </div>
                <span class="text-[#7e8299] font-medium text-[1.15rem] leading-none">Đơn đặt hàng</span>
              </div>
            </div>

            <div class="flex flex-col justify-center items-center h-[200px] w-[200px] lg:h-[250px] lg:w-[250px] m-3 bg-no-repeat bg-center bg-contain" style="background-image: url('<? BASE_URL('public/src/img/octagon.svg') ?>')">
              <span class="svg-icon svg-icon-2tx svg-icon-white mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="black"></path>
                  <path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="black"></path>
                  <path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="black"></path>
                </svg>
              </span>
              <div class="mb-0 text-center">
                <div class="text-[1.375rem] lg:text-[2.5rem] font-medium text-white flex justify-center items-center">
                  <div class="min-w-[70px] counted">3000</div>
                </div>
                <span class="text-[#7e8299] font-medium text-[1.15rem] leading-none">Đơn thành công</span>
              </div>
            </div>
          </div>
        </div>
        <div class="lg:text-[1.5rem] text-[1.25rem] font-medium text-[#a1a5b7] text-center mb-3">
          <span class="text-[1.3rem] lg:text-[1.75rem] leading-[1] text-[#5e6278]">“</span>Subins - Dịch vụ không giới hạn
        </div>
      </div>
    </div>

    <div class="relative text-[#13263c]">
      <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
      </svg>
    </div>
  </section>

  <section class="mt-20 -mb-20 relative z-[2]" id="testimonials">
    <div class="layout-container">
      <div class="text-center mb-[4.25rem]">
        <h3 class="text-[1.375rem] lg:text-[2.5rem] text-[#181c32] font-semibold mb-5" id="clients">
          Chính sách ưu đãi
        </h3>

        <div class="text-[1.15rem] text-[#a1a5b7] font-medium">
          Subins hân hạnh được phục vụ quý các quý khách hàng
          <br />chính sách áp dụng khi khách hàng đủ chỉ tiêu nạp và tiêu
          dịch vụ của chúng tôi<br />Chi tiết liên hệ ADMIN của Subins.
        </div>
      </div>
      <div class="flex justify-between items-center flex-wrap md:flex-nowrap rounded-[0.475rem] lg:-md-[3.25rem] p-8 lg:p-12 -mb-5 lg:-mb-[3.25rem] shadow-[0_0.5rem_1.5rem_0.5rem_rgb(0,0,0,0.08)]" style="background: linear-gradient(90deg, #20aa3e 0%, #03a588 100%)">
        <div class="my-2 mr-5">
          <div class="text-[1.35rem] lg:text-4xl font-semibold text-white mb-2">
            Subins
            <span class="font-normal"> - Dịch vụ không giới hạn</span>
          </div>
          <div class="text-[1.075rem] lg:text-[1.15rem] text-white font-medium opacity-75">
            Hơn 100 người dùng mỗi ngày. Đăng Ký Ngay
          </div>
        </div>
        <a href="Register" class="btn btn-lg btn-outline border-2 border-white text-white shrink-0 my-2 hover:text-[#000] hover:bg-white">Đăng ký ngay</a>
      </div>
    </div>
  </section>
  <!-- ========== End Testimonials ========== -->

  <!-- ========== Start Footer ========== -->

  <footer class="mb-0">
    <div class="relative text-[#13263c]">
      <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
      </svg>
    </div>

    <div class="bg-[#13263c] pt-20">
      <div class="layout-container">
        <div class="grid grid-cols-2 py-10 lg:py-20">
          <div class="lg:pr-16 mb-10 lg:mb-0">
            <div class="rounded-[.475rem] border border-dashed border-[#2c3f5b] p-9 mb-10">
              <h2 class="text-white font-semibold lg:text-[1.5rem] text-[1.3rem] mb-2">
                Bạn cần hỗ trợ?
              </h2>

              <span class="fw-normal text-[1.25rem] text-[#5e6278]">
                Liên hệ ngay Fanpage CSKH
                <a href="https://www.facebook.com/subins.tech" class="text-white opacity-50" style="
                        transition: color 0.2s ease, background-color 0.2s ease;
                      ">Fanpage Subins</a>
              </span>
            </div>

            <div class="rounded-[.475rem] border border-dashed border-[#2c3f5b] p-9">
              <h2 class="text-white font-semibold lg:text-[1.5rem] text-[1.3rem] mb-2">
                Bạn muốn trở thành CTV, Đại lý?
              </h2>

              <span class="fw-normal text-[1.25rem] text-[#5e6278]">
                Liên hệ ngay Fanpage CSKH
                <a href="https://www.facebook.com/subins.tech" class="text-white opacity-50" style="
                        transition: color 0.2s ease, background-color 0.2s ease;
                      ">Fanpage Subins</a>
              </span>
            </div>
          </div>

          <div class="lg:ps-16">
            <div class="flex justify-end" style="text-align: right">
              <div class="flex font-medium flex-col mr-20"></div>
              <div class="flex font-medium flex-col lg:ml-20">
                <h4 class="font-semibold text-[#b5b5c3] mb-6 text-[1.25rem]">
                  Liên Hệ
                </h4>
                <a href="https://www.facebook.com/thaotoiday" target="_blank" class="text-white hover:text-[#009ef7] opacity-50 text-[1.15rem] mb-6" style="
                        transition: color 0.2s ease, background-color 0.2s ease;
                      ">Facebook</a>


                <a href="https://t.me/subins" target="_blank" class="text-white hover:text-[#009ef7] opacity-50 text-[1.15rem] mb-6" style="
                        transition: color 0.2s ease, background-color 0.2s ease;
                      ">Telegram</a>
                <a href="tel:0345005746" class="text-white hover:text-[#009ef7] opacity-50 text-[1.15rem] mb-6" style="
                        transition: color 0.2s ease, background-color 0.2s ease;
                      ">Hotline: 0345005746</a>

                <a href="mailto:thaolaptrinh@gmail.com" class="text-white hover:text-[#009ef7] opacity-50 text-[1.15rem] mb-6" style="
                        transition: color 0.2s ease, background-color 0.2s ease;
                      ">Email: thaolaptrinh@gmail.com</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="border-t border-dashed border-[#2c3f5b]"></div>
      <div class="layout-container">
        <div class="flex flex-col md:flex-row items-center justify-between py-7 lg:py-10">
          <div class="flex items-center order-2 md:order-1">
            <a href="home">
              <img alt="Logo" src="<?= BASE_URL('public/src/img/logo-landing.png') ?>" class="h-[25px] md:h-[30px]" />
            </a>

            <span class="mx-5 text-[1.075rem] font-medium text-[#7e8299] pt-1">© 2022 Subins - Hệ thống được vận hành bởi <a href="https://www.facebook.com/thaotoiday" target="_blank" class="hover:text-[#009ef7]" style="
                    transition: color 0.2s ease, background-color 0.2s ease;
                  "><i>Nguyễn Văn Thảo</i></a> </span>
          </div>

          <ul class="flex list-none text-[#7e8299] menu-hover-primary font-medium text-[1.075rem] md:text-[1.15rem] order-1 mb-5 md:mb-0">
            <li class="hover:text-[#009ef7]" style="
                    transition: color 0.2s ease, background-color 0.2s ease;
                  ">
              <a href="policy" target="_blank" class="cursor-pointer flex items-center outline-[0] p-[0.65rem_1rem] px-2">Chính sách bảo mật</a>
            </li>
            <li class="hover:text-[#009ef7] mx-5" style="
                    transition: color 0.2s ease, background-color 0.2s ease;
                  ">
              <a href="term" target="_blank" class="cursor-pointer flex items-center outline-[0] p-[0.65rem_1rem] px-2">Điều khoản bảo mật</a>
            </li>
            <li class="hover:text-[#009ef7]" style="
                    transition: color 0.2s ease, background-color 0.2s ease;
                  ">
              <a href="refund" target="_blank" class="cursor-pointer flex items-center outline-[0] p-[0.65rem_1rem] px-2">Chính sách hoàn tiền</a>
            </li>
            <li class="hover:text-[#009ef7]" style="
                    transition: color 0.2s ease, background-color 0.2s ease;
                  ">
              <a href="cookies" target="_blank" class="cursor-pointer flex items-center outline-[0] p-[0.65rem_1rem] px-2">Cookies</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- ========== End Footer ========== -->

  <div id="vt_scroll_top" class="animate-bounce opacity-30 hover:opacity-100 hidden items-center justify-center fixed w-[36px] h-[36px] bottom-[40px] right-[20px] cursor-pointer z-[100] rounded-[0.475rem] bg-[#009ef7] shadow-[0_0.5rem_1.5rem_0.5rem_rgb(0,0,0,0.08)]">
    <a class="svg-icon">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="white">
        <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="white"></rect>
        <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="white"></path>
      </svg>
    </a>
  </div>
</div>




<?php require_once('./app/views/include/end.php'); ?>



<script>
  // Slider
  var swiper = new Swiper(".mySwiper", {
    cssMode: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",

    },

  });
</script>