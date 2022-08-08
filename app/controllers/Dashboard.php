<?php

class Dashboard extends Controller
{
  public $model_home;

  public function __construct()
  {
    $this->model_home = $this->model('DashboardModel');
  }

  public function index()
  {    # code...

    $this->render('dashboard/index');
  }


  public function info()
  {    # code...

    $this->render('dashboard/profile/info');
  }

  public function history()
  {    # code...

    $this->render('dashboard/profile/history');
  }

  public function upgrade()
  {    # code...

    $this->render('dashboard/profile/upgrade');
  }


  public function banking()
  {    # code...

    $this->render('dashboard/recharge/banking');
  }


  public function logout()
  {    # code...

    session_start();
    session_destroy();
    header('location: ../');
  }
}
