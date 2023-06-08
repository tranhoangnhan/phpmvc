<?php
class danh_thu  extends controller{
    var $title = '  - Đơn hàng';

    public $sanpham_model;
    public $donhang_model;
    public $danhthu_model;
    

    public function __construct() {
        $this->sanpham_model = $this ->model("sanpham_model");
        $this->donhang_model = $this ->model("donhang_model");
        $this->danhthu_model = $this ->model("danhthu_model");


    }
    public function product() {
       
      $this->view("masterlayout",[
        // Page này gọi bên file kia để lấy tên trang, muốn lấy view file nào thì gọi tên file đó ra
        "page" => "san_pham/index" , 
        "don_hang" => $this->donhang_model->getSP(),
  ]);
    }
   
  public function danhthu() {
    if  (isset($_POST["submit"])) {
      $ngaybatdau = $_POST['ngaybatdau'];
      $ngayketthuc = $_POST['ngayketthuc'];

      $kq = $this->danhthu_model->getDanhThu($ngaybatdau , $ngayketthuc);


     
  } 
  else {
    $ngaybatdau = date("Y/m/01");
  $ngayketthuc = date("Y/m/31");
  
  }
    $this->view("masterlayout",[
        "page" => "danh_thu/show" ,
        'title' => 'Danh thu' . $this->title,
        "san_pham" => $this->danhthu_model->getDanhThu($ngaybatdau , $ngayketthuc),
        "tong" =>$this->danhthu_model->tongGiaTri($ngaybatdau , $ngayketthuc),
        "ngaybatdau" => $ngaybatdau,
        "ngayketthuc" => $ngayketthuc,
      
    ]);
  }

  
}

