<?php
class hoa_don  extends controller{
    var $title = '  hóa đơn';

    public $sanpham_model;
    public $donhang_model;
    public $hoadon_model;

    public function __construct() {
        $this->sanpham_model = $this ->model("sanpham_model");
        $this->donhang_model = $this ->model("donhang_model");
        $this->hoadon_model = $this ->model("hoadon_model");


    }
    public function product() {
       
      $this->view("masterlayout",[
        // Page này gọi bên file kia để lấy tên trang, muốn lấy view file nào thì gọi tên file đó ra
        "page" => "san_pham/index" , 
        "don_hang" => $this->donhang_model->getSP(),
  ]);
    }
   
    public function show() {
        $this->view("masterlayout",[
            "page" => "hoa_don/show" ,
            
            "hoa_don" => $this->hoadon_model->get(),
        
            'title' => 'Thông tin' . $this->title,
    
        ]);         
    }

   
   public function delete($ma_cthd) {
    $kq = $this->donhang_model->delete($ma_cthd);

    $this->view("masterlayout",[
        "page" => "hoa_don/show" ,
        'title' => 'Show' . $this->title,
        "san_pham" => $this->donhang_model->getSP(),
        

    ]);
   }

   
   
}

