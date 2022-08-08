<?php



class Register extends Controller
{
  public $model_home;

  public function __construct()
  {
    $this->model_home = $this->model('RegisterModel');
  }

  public function index()
  {    # code...


    $this->model_home->register();
    $this->render('auth/Register', $this->model_home->data);
  }
}
