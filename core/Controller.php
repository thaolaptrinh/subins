<?php
class Controller
{
  public function model($model)
  {
    # code...
    if (file_exists(_DIR_ROOT . '/app/models/' . $model . '.php')) {
      require_once _DIR_ROOT . '/app/models/' . $model . '.php';
      if (class_exists($model)) {
        $model =  new $model();
        return $model;
      }
    }
    return false;
  }

  public function render($view, $data = [])
  {
    # code...
    extract($data);
    if (file_exists(_DIR_ROOT . '/app/views/' . $view . '.php')) {
      require_once _DIR_ROOT . '/app/views/' . $view . '.php';
    }
  }
}
