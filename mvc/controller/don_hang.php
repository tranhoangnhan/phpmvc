<?php
class don_hang  extends controller{
    var $title = '  - Đơn hàng';

    public $sanpham_model;
    public $donhang_model;
    

    public function __construct() {
        $this->sanpham_model = $this ->model("sanpham_model");
        $this->donhang_model = $this ->model("donhang_model");

    }
    public function product() {
       
      $this->view("masterlayout",[
        // Page này gọi bên file kia để lấy tên trang, muốn lấy view file nào thì gọi tên file đó ra
        "page" => "san_pham/index" , 
        "don_hang" => $this->donhang_model->getSP(),
  ]);
    }
   
    public function choxacnhan() {
        $this->view("masterlayout",[
            "page" => "don_hang/show_choxacnhan" ,
            
            "san_pham" => $this->donhang_model->choxacnhan(),
            
            'title' => 'Danh sách chờ xác nhận' . $this->title,
    
        ]);         
    }
    public function up_daxacnhan($ma_hd) {
    $kq = $this->donhang_model->up_daxacnhan($ma_hd);

        $this->view("masterlayout",[
            "page" => "don_hang/show_choxacnhan" ,
            
            "san_pham" => $this->donhang_model->choxacnhan(),
            
            'title' => 'Danh sách chờ xác nhận' . $this->title,
    
        ]);         
    }
    public function up_danggiao($ma_hd) {
        $kq = $this->donhang_model->up_danggiao($ma_hd);
    
            $this->view("masterlayout",[
                "page" => "don_hang/show_danggiao" ,
                
                "san_pham" => $this->donhang_model->daxacnhan(),
                
                'title' => 'Danh sách chờ xác nhận' . $this->title,
        
            ]);         
        }
        public function up_dagiao($ma_hd) {
            $kq = $this->donhang_model->up_dagiao($ma_hd);
        
                $this->view("masterlayout",[
                    "page" => "don_hang/show_danggiao" ,
                    
                    "san_pham" => $this->donhang_model->danggiao(),
                    
                    'title' => 'Danh sách chờ xác nhận' . $this->title,
            
                ]);         
            }
    public function daxacnhan() {
        $this->view("masterlayout",[
            "page" => "don_hang/show_daxacnhan" ,
            
            "san_pham" => $this->donhang_model->daxacnhan(),
        
            'title' => 'Danh sách đã xác nhận' . $this->title,
    
        ]);         
    }
    public function danggiao() {
        $this->view("masterlayout",[
            "page" => "don_hang/show_danggiao" ,
            
            "san_pham" => $this->donhang_model->danggiao(),
        
            'title' => 'Danh sách đang giao' . $this->title,
    
        ]);         
    }
    public function dagiao() {
        $this->view("masterlayout",[
            "page" => "don_hang/show_dagiao" ,
            
            "san_pham" => $this->donhang_model->dagiao(),
        
            'title' => 'Danh sách đã giao' . $this->title,
    
        ]);         
    }
    public function tongquan() {
        $this->view("masterlayout",[
            "page" => "don_hang/show_tongquan" ,
            
            "san_pham" => $this->donhang_model->get(),
        
            'title' => 'Danh sách' . $this->title,
    
        ]);         
    }

   
  public function danhthu() {
    $kq = $this->donhang_model->getDanhThu();
    $this->view("masterlayout",[
        "page" => "danh_thu/show" ,
        'title' => 'Danh thu' . $this->title,
        "san_pham" => $this->donhang_model->getDanhThu(),
        "tong" =>$this->donhang_model->getTongDanhThu(),

    ]);
  }

  public function chitiet($ma_hd) {
    $kq = $this->donhang_model->getChiTiet($ma_hd);
    $this->view("masterlayout",[
        "page" => "don_hang/chi_tiet_don_hang" ,
        'title' => 'Thông tin chi tiết' . $this->title,
        "san_pham" => $this->donhang_model->getChiTiet($ma_hd),
        "gia_tri"=>  $this->donhang_model->tongGiaTri($ma_hd),
    ]);
  }
}

