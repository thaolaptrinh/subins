<?php

class Login extends Controller
{
  public $model_home;

  public function __construct()
  {
    $this->model_home = $this->model('LoginModel');
  }

  public function index()
  {    # code...

    $this->model_home->login();
    $this->render('auth/Login', $this->model_home->data);

    // echo $this->model_home->message;
  }

  // function run()
  // {
  //   $this->model_home->run();
  // }

  // public function logout()
  // {
  //   # code...

  //   session_destroy();
  //   header('Location: Login');
  //   exit;
  // }
}
