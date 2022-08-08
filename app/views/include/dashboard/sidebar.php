<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="<?= BASE_URL('dashboard') ?>">
        <i class="ti-home menu-icon"></i>
        <span class="menu-title">Trang chủ</span>
      </a>
    </li>


    <li class="nav-item">
      <a class="nav-link" href="<?= BASE_URL('dashboard/info') ?>">
        <i class="ti-user menu-icon"></i>
        <span class="menu-title">Tài khoản của tôi</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="<?= BASE_URL('dashboard/banking') ?>">
        <i class="ti-credit-card menu-icon"></i>
        <span class="menu-title">Nạp tiền tài khoản</span>
      </a>
    </li>


    <li class="nav-item">
      <a class="nav-link" href="<?= BASE_URL('dashboard/history') ?>">
        <i class="ti-timer menu-icon"></i>
        <span class="menu-title">Lịch sử tài khoản</span>
      </a>
    </li>


    <li class="nav-item">
      <a class="nav-link" href="<?= BASE_URL('dashboard/upgrade') ?>">
        <i class="ti-crown menu-icon"></i>
        <span class="menu-title">Cấp bậc tài khoản</span>
      </a>
    </li>


    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#tiktok" aria-expanded="false" aria-controls="tiktok">
        <i class="ti-tumblr menu-icon"></i>
        <span class="menu-title">Dịch vụ Tiktok</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="tiktok">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a href="<?= BASE_URL('service/tiktok/view') ?>" class="nav-link">Tăng view</a></li>
        </ul>
      </div>
    </li>


    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#instagram" aria-expanded="false" aria-controls="instagram">
        <i class="ti-instagram menu-icon"></i>
        <span class="menu-title">Dịch vụ Instagram</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="instagram">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a href="" class="nav-link">Tăng like bài viết</a>
          </li>
          <li class="nav-item"><a href="" class="nav-link">Tăng theo dõi</a></li>
        </ul>
      </div>
    </li>


    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#contact" aria-expanded="false" aria-controls="contact">
        <i class="ti-headphone-alt menu-icon"></i>
        <span class="menu-title">Liên hệ & hỗ trợ</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="contact">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a href="https://www.facebook.com/thaotoiday" target="_blank" class="nav-link">Facebook</a></li>
          <li class="nav-item"><a href="https://www.facebook.com/thaotoiday" target="_blank" class="nav-link">Zalo</a>
          </li>
          <li class="nav-item"><a href="https://www.facebook.com/thaotoiday" target="_blank" class="nav-link">Telegram</a></li>
        </ul>
      </div>
    </li>

  </ul>
</nav>