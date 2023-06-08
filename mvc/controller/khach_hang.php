<?php
class khach_hang  extends controller{
    var $title = '  khách hàng';

    public $sanpham_model;
    public $loai_model;
    public $khachhang_model;
    public function __construct() {
        $this->loai_model = $this ->model("loai_model");
        $this->khachhang_model = $this ->model("khachhang_model");

    }
    public function product() {
       
      $this->view("masterlayout",[
        "page" => "san_pham/index" ,
        "loai" => $this->loai_model->get(),
        "khach_hang" => $this->sanpham_model->get(),
  ]);
    }
   
    public function show() {
        $this->view("masterlayout",[
            "page" => "khach_hang/show" ,
            "loai" => $this->loai_model->get(),
            "khach_hang" => $this->khachhang_model->get(),
            'title' => 'Danh sách' . $this->title,
    
        ]);         
    }

public function viewadd(){
    $this->view("masterlayout",[
        "page" => "san_pham/add",
    ]);
}

   public function delete($ma_sp) {
    $kq = $this->sanpham_model->delete($ma_sp);

    $this->view("masterlayout",[
        "page" => "san_pham/show" ,
        'title' => 'Show' . $this->title,
        

    ]);
   }
}

