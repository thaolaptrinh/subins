<?php

define('HOSTNAME', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DATABASE', 'fikotlja_subins');
define('PORT', '3306');

class DB
{
  private $ketnoi;
  function connect()
  {
    if (!$this->ketnoi) {
      $this->ketnoi = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE, PORT) or die('Hệ thống đang bảo trì, xin lỗi các bạn vì sự cố này!');
      mysqli_query($this->ketnoi, "set names 'utf8'");
    }
  }


  function dis_connect()
  {
    if ($this->ketnoi) {
      mysqli_close($this->ketnoi);
    }
  }



  function getUsers($data)
  {
    $this->connect();
    $row = $this->ketnoi->query("SELECT * FROM `users` WHERE `username` = '" . $_SESSION['username'] . "' ")->fetch_array();
    return $row[$data];
  }

  function query($sql)
  {
    $this->connect();
    $row = $this->ketnoi->query($sql);
    return $row;
  }


  function cong($table, $data, $sotien, $where)
  {
    $this->connect();
    $row = $this->ketnoi->query("UPDATE `$table` SET `$data` = `$data` + '$sotien' WHERE $where ");
    return $row;
  }
  function tru($table, $data, $sotien, $where)
  {
    $this->connect();
    $row = $this->ketnoi->query("UPDATE `$table` SET `$data` = `$data` - '$sotien' WHERE $where ");
    return $row;
  }

  function insert($table, $data)
  {
    $this->connect();
    $field_list = '';
    $value_list = '';
    foreach ($data as $key => $value) {
      $field_list .= ",$key";
      $value_list .= ",'" . mysqli_real_escape_string($this->ketnoi, $value) . "'";
    }
    $sql = 'INSERT INTO ' . $table . '(' . trim($field_list, ',') . ') VALUES (' . trim($value_list, ',') . ')';

    return mysqli_query($this->ketnoi, $sql);
  }
  function update($table, $data, $where)
  {
    $this->connect();
    $sql = '';
    foreach ($data as $key => $value) {
      $sql .= "$key = '" . mysqli_real_escape_string($this->ketnoi, $value) . "',";
    }
    $sql = 'UPDATE ' . $table . ' SET ' . trim($sql, ',') . ' WHERE ' . $where;
    return mysqli_query($this->ketnoi, $sql);
  }
  function update_value($table, $data, $where, $value1)
  {
    $this->connect();
    $sql = '';
    foreach ($data as $key => $value) {
      $sql .= "$key = '" . mysqli_real_escape_string($this->ketnoi, $value) . "',";
    }
    $sql = 'UPDATE ' . $table . ' SET ' . trim($sql, ',') . ' WHERE ' . $where . ' LIMIT ' . $value1;
    return mysqli_query($this->ketnoi, $sql);
  }
  function remove($table, $where)
  {
    $this->connect();
    $sql = "DELETE FROM $table WHERE $where";
    return mysqli_query($this->ketnoi, $sql);
  }

  function get_list($sql)
  {
    $this->connect();
    $result = mysqli_query($this->ketnoi, $sql);
    if (!$result) {
      die('Lỗi kết nối database');
    }
    $return = array();
    while ($row = mysqli_fetch_assoc($result)) {
      $return[] = $row;
    }
    mysqli_free_result($result);
    return $return;
  }
  function get_row($sql)
  {
    $this->connect();
    $result = mysqli_query($this->ketnoi, $sql);
    if (!$result) {
      die('Lỗi kết nối database');
    }
    $row = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    if ($row) {
      return $row;
    }
    return false;
  }


  function num_rows($sql)
  {
    $this->connect();
    $result = mysqli_query($this->ketnoi, $sql);
    if (!$result) {
      die('Lỗi kết nối database 2');
    }
    $row = mysqli_num_rows($result);
    mysqli_free_result($result);
    if ($row) {
      return $row;
    }
    return false;
  }
}


if (isset($_SESSION['username'])) {
  $DB = new DB;

  $getUser = $DB->get_row(" SELECT * FROM `users` WHERE `username` = '" . $_SESSION['username'] . "' ");
  $my_name = $getUser['name'];
  $my_user  = $getUser['username'];
  $my_email  = $getUser['email'];
  $my_pass = $getUser['password'];
  $my_sodu = $getUser['sodu'];
  $my_capbac = $getUser['capbac'];
  $my_date = $getUser['date'];

  if (!$getUser) {
    session_start();
    session_destroy();
    header('location: /home');
  }
} else {
  $my_sodu = 0;
}
