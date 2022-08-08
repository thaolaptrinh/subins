<?php
// include $_SERVER['DOCUMENT_ROOT'] . '/subins' . '/configs/Database.php';
date_default_timezone_set('Asia/Ho_Chi_Minh');

$DB = new DB;

$base_url = 'http://' . $_SERVER['SERVER_NAME'] . '/' . 'subins/';

// Redirect path

function redirect($path)
{
  header("Location: " . $path);
  exit;
}



function typepass($str)
{
  return base64_encode(md5(base64_encode(md5($str))));
  // return base64_encode(urlencode(md5(urlencode(base64_encode(base64_encode(md5(md5(md5(md5(base64_encode(md5(base64_encode(md5(base64_encode(json_encode(array("user" => base64_encode($str), "admin" => "Nguyễn Văn Thảo")))))))))))))))));
}




class API
{

  private $api = 'dc1931d6c73315e9828e9037f57a958d';
  private $url = 'https://wiq.ru/api/?key=';
  private $create = '&action=create&';
  private $service = 'service=310&';

  function order($quality, $link)
  {
    return (($this->url . $this->api . $this->create . $this->service . 'quantity=' . $quality . '&link=' . $link));
  }
}

$API =  new API;


// $DB->insert("users", [
//   'id' => 1,
//   'username'      => 'thaolaptrinh',
//   'name'          => 'Nguyen Van Thao',
//   'email'         => 'thaolaptrinh@gmail.com',
//   'password'      => '160723Thao@',
//   'capbac'        => 3,
//   'sodu'         => 10000,
//   'tongnap'       => 10000,
//   'tongtru'       => 0,
//   'date'          => get_time()
// ]);

// $DB->dis_connect();

function BASE_URL($url)
{
  global $base_url;
  return $base_url . $url;
}


function checkVaild($vaildArR)
{
  foreach ($vaildArR as $key => $value) {
    json_encode($value);
  }
}


function encode_arr($arr)
{
  foreach ($arr as $key => $value) {
    json_encode($value);
  }
}



function check_username($data)
{
  if (preg_match('/^[a-zA-Z0-9_-]{3,16}$/', $data, $matches)) {
    return true;
  } else {
    return false;
  }
}
function check_email($data)
{
  if (preg_match('/^.+@.+$/', $data, $matches)) {
    return true;
  } else {
    return false;
  }
}

function check_link($link)

{

  $regex = '/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:tiktok\.com\/@\w.*\/video|v)/';
  if (preg_match($regex, $link, $matches)) {
    return true;
  } else {
    return false;
  }
}








function check_number($data)
{
  return is_numeric($data);
}




function check_string($data)
{
  return (trim(htmlspecialchars(addslashes($data))));
}




function count_string($data)
{
  return strlen(check_string($data));
}


function format_date($time)
{
  return date("d-m-Y H:i:s", $time);
}


function get_time()
{
  return date('d-m-Y H:i:s', time());
}


function format_money($number)
{
  return number_format($number);
}



function levelmem($number)
{
  if ($number == 0) {
    return 'Thành viên';
  } elseif ($number == 1) {
    return 'Cộng tác viên';
  } elseif ($number == 2) {
    return 'Đại lý';
  } elseif ($number == 3) {
    return 'Admin';
  } else {
    #
  }
}




function format_cash($price)
{
  return str_replace(",", ".", number_format($price));
}


function random($string, $int)
{
  return substr(str_shuffle($string), 0, $int);
}


function XoaDauCach($text)
{
  return trim(preg_replace('/\s+/', ' ', $text));
}







function get_ip()
{
  return $_SERVER['REMOTE_ADDR'];
}


function findidfb($urlfind)
{
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://findidfb.com/',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array('url' => $urlfind),
    CURLOPT_HTTPHEADER => array(
      'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36',
      'origin: https://findidfb.com',
      'referer: https://findidfb.com/'
    ),
  ));

  $response = curl_exec($curl);

  curl_close($curl);
  return $response;
}

//xóa dấu tiếng việt, và chuyển chữ viết hoa
function xoa_dau($str = null)
{
  $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
  $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
  $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
  $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
  $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
  $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
  $str = preg_replace("/(đ)/", 'd', $str);
  $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'a', $str);
  $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ|E)/", 'e', $str);
  $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'i', $str);
  $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'o', $str);
  $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ|U)/", 'u', $str);
  $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ|Y)/", 'y', $str);
  $str = preg_replace("/(Đ)/", 'd', $str);
  $str = preg_replace("/(Q)/", 'q', $str);
  $str = preg_replace("/(R)/", 'r', $str);
  $str = preg_replace("/(T)/", 't', $str);
  $str = preg_replace("/(Y)/", 'y', $str);
  $str = preg_replace("/(I)/", 'i', $str);
  $str = preg_replace("/(O)/", 'o', $str);
  $str = preg_replace("/(P)/", 'p', $str);
  $str = preg_replace("/(A)/", 'a', $str);
  $str = preg_replace("/(S)/", 's', $str);
  $str = preg_replace("/(D)/", 'd', $str);
  $str = preg_replace("/(F)/", 'f', $str);
  $str = preg_replace("/(G)/", 'g', $str);
  $str = preg_replace("/(H)/", 'h', $str);
  $str = preg_replace("/(J)/", 'j', $str);
  $str = preg_replace("/(K)/", 'k', $str);
  $str = preg_replace("/(L)/", 'l', $str);
  $str = preg_replace("/(Z)/", 'z', $str);
  $str = preg_replace("/(X)/", 'x', $str);
  $str = preg_replace("/(C)/", 'c', $str);
  $str = preg_replace("/(V)/", 'v', $str);
  $str = preg_replace("/(B)/", 'b', $str);
  $str = preg_replace("/(N)/", 'n', $str);
  $str = preg_replace("/(M)/", 'm', $str);
  $str = preg_replace("/(W)/", 'w', $str);
  $str = preg_replace("/( )/", '', $str);
  return $str;
}
