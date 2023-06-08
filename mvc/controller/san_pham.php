<?php
class san_pham  extends controller{
    var $title = '  sản phẩm';
    
    public $sanpham_model;
    public $loai_model;
    public function __construct() {
        $this->loai_model = $this ->model("loai_model");
        $this->sanpham_model = $this ->model("sanpham_model");

    }
    public function product() {
       
      $this->view("masterlayout",[
        "page" => "san_pham/index" ,
        "loai" => $this->loai_model->get(),
        "san_pham" => $this->sanpham_model->get(),
  ]);
    }
   
    public function show() {
        $this->view("masterlayout",[
            "page" => "san_pham/show" ,
            "san_pham" => $this->sanpham_model->get(),
            'title' => 'Show' . $this->title,
    
        ]);         
    }

public function viewadd(){
    $this->view("masterlayout",[
        "page" => "san_pham/add",
    ]);
}
public function insert() {
    $thong_bao = "";
    if  (isset($_POST["submit"])) {
    
    
    


    $ten_sp = $_POST['ten_sp'];
    $gia = $_POST['gia'];
    $gia_km = $_POST['gia_km'];
    $so_luong = $_POST['so_luong'];
    $hinh_sp = basename( $_FILES["fileupload"]["name"]);
    $ma_loai = $_POST['ma_loai'];
    $ngay_nhap = $_POST['ngay_nhap'];
    $mo_ta = $_POST['mo_ta'];
    
    if($ten_sp == NULL || $gia == NULL || $gia_km == NULL || $so_luong == NULL || $hinh_sp == null
        || $ma_loai == NULL || $ngay_nhap == NULL || $mo_ta == NULL
    ) {
        $thong_bao = '<span>Tát cả dữ liệu không được để trống  </span>';

    }
    if($so_luong == -0) {
        $thong_bao = '<span>Số lượng không hợp lệ  </span>';

    }
    $ngay = date("20y-m-d");
    if ($ngay_nhap > $ngay ) {
        $thong_bao = '<span> Ngày nhập '.$ngay_nhap.'   không hợp lệ vì lớn hơn ngày hiện tại </span>';

    }

    $kq = $this->sanpham_model->adddulieu($ten_sp,$gia,$gia_km,$so_luong,$hinh_sp,$ma_loai,$ngay_nhap,$mo_ta);
       
    } 
    $this->view("masterlayout",[
        "page" => "san_pham/add" ,
        "san_pham" => $this->sanpham_model->get(),
        "loai" => $this->loai_model->get(),
        'thong_bao' => $thong_bao,
        'title' => 'Thêm' . $this->title,
    ]);
       
    }
    public function insertct($ma_sp) {
        if  (isset($_POST["submit"])) {
            $this->mutianh();
            $i = COUNT($_FILES["fileupload"]["name"]) - 1;
            $names =  $_FILES['fileupload']['name'];
            
            for ($x = 0; $x <= $i; $x++) {
               
                $hinh_sp = $names[$x];
                $kq = $this->sanpham_model->addhinhct($ma_sp, $hinh_sp);

            }
    
         
        } 
        $this->view("masterlayout",[
            "page" => "san_pham/anh_chi_tiet" ,
            "san_pham" => $this->sanpham_model->get(),
            "loai" => $this->loai_model->get(),
            'show' => $this->sanpham_model->edit($ma_sp),
            'showanh' => $this->sanpham_model->getanhct($ma_sp),
            
            'title' => 'Thêm' . $this->title,
        ]);
           
        }
public function edit($ma_sp) {
    

    $this->view("masterlayout",[
        "page" => "san_pham/edit" ,
        "loai" => $this->loai_model->get(),
        'title' => 'Cập nhật' . $this->title,
        'edit' => $this->sanpham_model->edit($ma_sp),
    ]);


}
public function update($ma_sp) {
    $result_mess = false;
        if(isset($_POST["submit"])) {

            if(empty($_POST["ten_sp"])) {
                $this->view("masterlayout",[
                    "page" => "loai/edit" ,
                    'title' => 'Cập nhật' . $this->title,
                    "result" => $result_mess,
                    'edit' => $this->sanpham_model->edit($ma_sp),

                ]);
            }
           

         else {
            $this->upanh();

            $ten_sp = $_POST['ten_sp'];
            $gia = $_POST['gia'];
            $gia_km = $_POST['gia_km'];
            $so_luong = $_POST['so_luong'];

            $hinh_sp = basename( $_FILES["fileupload"]["name"]);
            $ma_loai = $_POST['ma_loai'];
            $ngay_nhap = $_POST['ngay_nhap'];
            $mo_ta = $_POST['mo_ta'];
            $kq = $this->sanpham_model->update($ma_sp,$ten_sp,$gia,$gia_km,$so_luong,$hinh_sp,$ma_loai,$ngay_nhap,$mo_ta);
          
         }

              
            }
            $this->view("masterlayout",[
                "page" => "san_pham/edit" ,
                'title' => 'Cập nhật' . $this->title,
                "result" => $kq,
            "loai" => $this->loai_model->get(),

                'edit' => $this->sanpham_model->edit($ma_sp),

            ]);
  }
   public function delete($ma_sp) {
    $kq = $this->sanpham_model->delete($ma_sp);

    $this->view("masterlayout",[
        "page" => "san_pham/show" ,
        'title' => 'Show' . $this->title,
        
            "san_pham" => $this->sanpham_model->get(),
        

    ]);
    
   }
   public function deleteanh($anh) {
   
    $kq = $this->sanpham_model->deleteanh($anh);
    
    $this->view("masterlayout",[
        
        'title' => 'Show' . $this->title,
            "page" => "san_pham/show",
            "san_pham" => $this->sanpham_model->get(),
        

    ]);}
   
   public function thongke() {
    
    $kq = $this->sanpham_model->showSL();
    $so_luong = 0;
    $this->view("masterlayout",[
        "page" => "san_pham/thongke" ,

        'title' => 'Show' . $this->title,
        "thongke" => $this->sanpham_model->showSL(),
        "san_pham" => $this->sanpham_model->get(),

    ]);
   }
}

