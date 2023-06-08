<?php
class gio_hang  extends controller{
    var $title = '  người dùng';

    public $sanpham_model;
    public $loai_model;
    public $nguoidung_model;
    public $giohang_model;
    public function __construct() {
        $this->loai_model = $this ->model("loai_model");
        $this->sanpham_model = $this ->model("sanpham_model");
        $this->nguoidung_model = $this ->model("nguoidung_model");
        $this->giohang_model = $this ->model("giohang_model");


    }
    public function product() {
       
      $this->view("masterlayout",[
        "page" => "san_pham/index" ,
        "loai" => $this->loai_model->get(),
        "san_pham" => $this->sanpham_model->get(),
  ]);
    }
    public function add() {
       
        $this->view_client("masterlayout",[
          "page" => "gio_hang/index" ,
          "loai" => $this->loai_model->get(),
          "san_pham" => $this->sanpham_model->get(),
    ]);
      }
  
}

