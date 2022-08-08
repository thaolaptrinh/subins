<?php
abstract class Model extends DB
{

  protected $DB;

  public function __construct()
  {
    $this->DB  = new DB();
  }
}
