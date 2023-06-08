<?php 
  //thêm header
  include './mvc/view/admin/include/header.php';
  //thêm thanh bên trái
  include './mvc/view/admin/include/sidebar.php';
  //controller xử lí view hiển thị ra
  function currency_format($number, $suffix = 'đ') {
    if (!empty($number)) {
        return number_format($number, 0, ',', '.') . "{$suffix}";
    }
}
  require_once "./mvc/view/admin/".$data['page'].".php";
  //add footer
  include './mvc/view/admin/include/footer.php';
  if (!function_exists('currency_format')) {
   
}
 ?>
 
    
    

