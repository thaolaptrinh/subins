<?php
if (isset($_SESSION['username'])) {
  header('Location: dashboard');
}

?>

<?php
class LoginModel extends Model
{

  public $data = [];


  public function login()
  {


    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {

      if (empty(check_string($_POST['username'])) || empty(check_string($_POST['password']))) {

        $this->data = [
          'error' => $error = true,
          'message' => $message = "Vui lòng nhập đầy đủ các trường còn thiếu !",
          'data' => $data = '<small class="text-danger text-[1.1rem] font-semibold">' . $message . ' </small>'
        ];
      } elseif (!check_username(check_string($_POST['username']))) {
        $this->data  = [
          'error' => $error = true,
          'message' => $message = "Vui lòng nhập định dạng tài khoản hợp lệ !",
          'data' => $data = '<small class="text-danger text-[1.1rem] font-semibold">' . $message . ' </small>'
        ];
      } elseif (!$this->DB->get_row("SELECT * FROM `users` WHERE `username` = '" . check_string($_POST['username']) . "'")) {

        $this->data = [
          'error' => $error = true,
          'message' => $message = "Tên đăng nhập không tồn tại trên hệ thống !",
          'data' => $data = '<small class="text-danger text-[1.1rem] font-semibold">' . $message . ' </small>'
        ];
      } elseif (!$this->DB->get_row(" SELECT * FROM `users` WHERE `username` = '" . check_string($_POST['username']) . "' AND `password` = '" . check_string(typepass($_POST['password'])) . "' ")) {
        $this->data = [
          'error' => $error = true,
          'message' => $message = "Mật khẩu bạn nhập không chính xác !",
          'data' => $data = '<small class="text-danger text-[1.1rem] font-semibold">' . $message . ' </small>'
        ];
      } else {


        $this->data = [
          'error' => $error = false,
          'message' => $message = "Đăng nhập thành công !",
          'data' => $data = '<small class="text-success text-[1.1rem] font-semibold">' . $message . "<strong><span id='countdown'> 2s </span>chuyển trang</strong>" . ' </small>'
        ];

        $_SESSION['username'] = check_string($_POST['username']);
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
          window.location.href = '<?= BASE_URL('Dashboard')  ?>'
        }, 1000)
      }

    }, 1000)
  </script>

<?php  }; ?>