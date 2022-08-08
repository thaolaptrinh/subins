<?php



class RegisterModel extends Model
{



  public $data = [];

  public function register()
  {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      if (empty(check_string($_POST['fullname'])) || empty(check_string($_POST['email'])) || empty(check_string($_POST['username'])) || empty(check_string($_POST['password'])) || empty(check_string($_POST['repassword']))) {
        $this->data  = ([
          'error' => $error = true,
          'message' => $message = "Vui lòng nhập đầy đủ các trường còn thiếu !",
          'data' => $data = '<small class="text-danger text-[1.1rem] font-semibold">' . $message . ' </small>'
        ]);
      } elseif (!check_username(check_string($_POST['username']))) {
        $this->data  = ([
          'error' => $error = true,
          'message' => $message = "Vui lòng nhập định dạng tài khoản hợp lệ !",
          'data' => $data = '<small class="text-danger text-[1.1rem] font-semibold">' . $message . ' </small>'
        ]);
      } elseif ($this->DB->get_row("SELECT * FROM `users` WHERE `username` = '" . check_string($_POST['username']) . "'")) {

        $this->data = ([
          'error' => $error = true,
          'message' => $message = "Tên đăng nhập đã tồn tại trên hệ thống !",
          'data' => $data = '<small class="text-danger text-[1.1rem] font-semibold">' . $message . ' </small>'
        ]);
      } elseif (check_email(check_string($_POST['email'])) == false) {
        $this->data = ([
          'error' => $error = true,
          'message' => $message = "Vui lòng nhập định dạng email hợp lệ !",
          'data' => $data = '<small class="text-danger text-[1.1rem] font-semibold">' . $message . ' </small>'
        ]);
      } elseif ($this->DB->get_row("SELECT * FROM `users` WHERE `email` = '" . check_string($_POST['email']) . "'")) {
        $this->data  = ([
          'error' => $error = true,
          'message' => $message = "Email đã tồn tại trên hệ thống !",
          'data' => $data = '<small class="text-danger text-[1.1rem] font-semibold">' . $message . ' </small>'
        ]);
      } elseif (count_string($_POST['password']) < 6) {

        $this->data = ([
          'error' => $error = true,
          'message' => $message = "Mật khẩu phải có tối thiểu 6 ký tự !",
          'data' => $data = '<small class="text-danger text-[1.1rem] font-semibold">' . $message . ' </small>'
        ]);
      } elseif (check_string($_POST['username']) === check_string($_POST['password'])) {
        $this->data = ([
          'error' => $error = true,
          'message' => $message = "Tài khoản không được trùng với mật khẩu !",
          'data' => $data = '<small class="text-danger text-[1.1rem] font-semibold">' . $message . ' </small>'
        ]);
      } elseif (check_string($_POST['password']) != check_string($_POST['repassword'])) {
        $this->data = ([
          'error' => $error = true,
          'message' => $message = "Mật khẩu phải trùng với nhau !",
          'data' => $data = '<small class="text-danger text-[1.1rem] font-semibold">' . $message . ' </small>'
        ]);
      } else {

        $this->data = ([
          'error' => $error = false,
          'message' => $message = "Đăng ký thành công !",
          'data' => $data = '<small class="text-success text-[1.1rem] font-semibold">' . $message . "<strong><span id='countdown'> 2s </span>chuyển trang</strong>" . ' </small>'
        ]);



        $this->DB->insert("users", [
          'username'      => xoa_dau(check_string($_POST['username'])),
          'name'          => check_string($_POST['fullname']),
          'email'         => check_string($_POST['email']),
          'password'      => typepass(check_string($_POST['password'])),
          'capbac'        => 0,
          'sodu'         => 0,
          'tongnap'       => 0,
          'tongtru'       => 0,
          'date'          => get_time()
        ]);
        $this->DB->dis_connect();
      }
    }


    // echo '<small class="text-danger text-[1.1rem] font-semibold">' . (isset($message) ?  $message : false) . ' </small>';
  }
}
?>


<?php

global $error;
if (!$error) {;
?>

  <script>
    let count = 2;
    const coutDown = setInterval(() => {
      count--;
      document.getElementById("countdown").innerHTML = ' ' + count + 's ';
      if (count == 0) {
        clearInterval(coutDown);
        setTimeout(() => {
          window.location.href = '<?= BASE_URL('Login')  ?>'
        }, 1000)
      }

    }, 1000)
  </script>

<?php  }; ?>