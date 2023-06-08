<?php 
  //thêm header
  include './mvc/view/client/include/header.php';
  //thêm thanh bên trái
  //controller xử lí view hiển thị ra
  function currency_format($number, $suffix = 'đ') {
    if (!empty($number)) {
        return number_format($number, 0, ',', '.') . "{$suffix}";
    }
}
  require_once "./mvc/view/client/".$data['page'].".php";

  //add footer
  include './mvc/view/client/include/footer.php';
  if (!function_exists('currency_format')) {
   
}
 ?>
 
    
    

