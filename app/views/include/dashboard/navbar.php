<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row ">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a class="navbar-brand brand-logo me-5" href="<?= BASE_URL('home') ?>"><img src=" <?= BASE_URL('assets/images/logo_replace.png'); ?>" class=" me-2" alt="logo" /></a>
    <a class="navbar-brand brand-logo-mini" href="<?= BASE_URL('home') ?>"><img src="<?= BASE_URL('assets/images/logo-mini.png') ?>" alt="logo" /></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="ti-view-list"></span>
    </button>

    <div class="hover-cursor">
      <i class="bx bx-sm bx-moon icon-in-bg"></i>
    </div>

    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item dropdown">
        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
          <i class="ti-bell mx-0"></i>
          <span class="count"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
          <p class="mb-0 font-weight-normal float-left dropdown-header">Thông báo </p>
          <a class="dropdown-item">
            <div class="item-thumbnail">
              <div class="item-icon bg-success">
                <i class="ti-info-alt mx-0"></i>
              </div>
            </div>
            <div class="item-content">
              <h6 class="font-weight-normal">.....</h6>
              <p class="font-weight-light small-text mb-0 text-muted">
                Hôm nay
              </p>
            </div>
          </a>
        </div>
      </li>



      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">

          <img src="https://ui-avatars.com/api/?background=random&name=<?= $my_name ?>" alt=" profile" />

        </a>

        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">

          <a class="dropdown-item">
            <div class="item-thumbnail">
              <div class="item-icon bg-success">
                <img src="https://ui-avatars.com/api/?background=random&name=<?= $my_name ?>" alt=" profile" />
              </div>
            </div>
            <div class="item-content">
              <h6 class="font-weight-normal"><?= $my_user ?></h6>
              <p class="font-weight-light small-text mb-0 text-muted">
                Số dư: <span><?= $my_sodu ?> coin</span> </p>
            </div>
          </a>


          <?php
          if ($my_capbac == 3) { ?>
            <a class="dropdown-item" href="<?= BASE_URL('admin') ?>">
              <i class="ti-settings text-primary"></i>
              Quản trị website
            </a>

          <?php } ?>
          <a class="dropdown-item" href="<?= BASE_URL('profile/info') ?>">
            <i class="ti-user text-primary"></i>
            Tài khoản của tôi
          </a>

          <a class="dropdown-item" href="<?= BASE_URL('recharge/banking') ?>">
            <i class="ti-credit-card text-primary"></i>
            Nạp tiền tài khoản
          </a>
          <a class="dropdown-item" href="<?= BASE_URL('dashboard/logout') ?>">
            <i class="ti-power-off text-primary"></i>
            Đăng xuất
          </a>
        </div>
      </li>
    </ul>


    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="ti-view-list"></span>
    </button>
  </div>
</nav>