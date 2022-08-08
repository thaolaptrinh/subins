<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <!-- <a href="index3.html" class="brand-link">
    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a> -->

  <!-- Sidebar -->
  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">

      <div class="info">
        <a href="#" class="d-block">SUBINS.TECH</a>
      </div>
    </div>


    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="./" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard

            </p>
          </a>

        </li>


        <!-- <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Tables
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">


          </ul>
        </li> -->


        <li class="nav-header">Quản trị</li>
        <li class="nav-item">
          <a href="<?= BASE_URL('admin/setting') ?>" class="nav-link">
            <i class="nav-icon fa fa-wrench"></i>
            <p>
              Cài Đặt Website
            </p>
          </a>
        </li>



        <li class="nav-item">
          <a href="<?= BASE_URL('admin/banned') ?>" class="nav-link">
            <i class="nav-icon fa fa-user-lock"></i>
            <p>
              Chặn Người Dùng
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= BASE_URL('admin/users') ?>" class="nav-link">
            <i class="nav-icon fa fa-user"></i>
            <p>
              Thành Viên Hệ Thống
              <!-- <span class="badge badge-info right">2</span> -->
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= BASE_URL('admin/notify') ?>" class="nav-link">
            <i class="nav-icon fa fa-bell"></i>
            <p>
              Cài Đặt Thông Báo
            </p>
          </a>
        </li>


        <li class="nav-item">
          <a href="<?= BASE_URL('admin/recharge') ?>" class="nav-link">
            <i class="nav-icon fa fa-cash-register"></i>
            <p>
              Cài Đặt Nạp Tiền
            </p>
          </a>
        </li>



        <li class="nav-item">
          <a href="<?= BASE_URL('admin/m_recharge') ?>" class="nav-link">
            <i class="nav-icon fa fa-money-bill"></i>
            <p>
              Quản Lý Nạp Tiền
            </p>
          </a>
        </li>


        <li class="nav-item">
          <a href="<?= BASE_URL('admin/m_orders') ?>" class="nav-link">
            <i class="nav-icon fa fa-list"></i>
            <p>
              Quản Lý Đơn Hàng
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= BASE_URL('admin/m_support') ?>" class="nav-link">
            <i class="nav-icon fa fa-question"></i>
            <p>
              Quản Lý Hỗ Trợ
            </p>
          </a>
        </li>









      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>