<?php

class Admin extends Controller
{
  public $data = [];
  public $model_home;


  public function __construct()
  {
    $this->model_home = $this->model('AdminModel');
  }

  public function index()
  {    # code...

    $this->data['title'] = 'Dashboard Admin';
    $this->data['content'] = 'admin/pages/home';
    $this->render('admin/index', $this->data);
  }

  public function setting()
  {    # code...
    $this->data['title'] = 'Admin - Setting';
    $this->data['content'] = 'admin/pages/setting';
    $this->render('admin/index', $this->data);
  }



  public function banned()
  {    # code...
    $this->data['title'] = 'Admin - Chặn Người Dùng';
    $this->data['content'] = 'admin/pages/banned';
    $this->render('admin/index', $this->data);
  }

  public function users()
  {    # code...
    $this->data['title'] = 'Admin - Thành Viên Hệ Thống';
    $this->data['content'] = 'admin/pages/users';
    $this->render('admin/index', $this->data);
  }


  public function notify()
  {    # code...
    $this->data['title'] = 'Admin - Cài Đặt Thông Báo';
    $this->data['content'] = 'admin/pages/notify';
    $this->render('admin/index', $this->data);
  }

  public function recharge()
  {    # code...
    $this->data['title'] = 'Admin - Cài Đặt Nạp Tiền';
    $this->data['content'] = 'admin/pages/recharge';
    $this->render('admin/index', $this->data);
  }



  public function m_recharge()
  {    # code...
    $this->data['title'] = 'Admin - Quản Lý Nạp Tiền';
    $this->data['content'] = 'admin/pages/m_recharge';
    $this->render('admin/index', $this->data);
  }


  public function m_orders()
  {    # code...
    $this->data['title'] = 'Admin - Quản Lý Đơn Hàng';
    $this->data['content'] = 'admin/pages/m_orders';
    $this->render('admin/index', $this->data);
  }

  public function m_support()
  {    # code...
    $this->data['title'] = 'Admin - Quản Lý Hỗ Trợ';
    $this->data['content'] = 'admin/pages/m_support';
    $this->render('admin/index', $this->data);
  }



  public function logout()
  {    # code...

    session_start();
    session_destroy();
    header('location: ../');
  }
}
