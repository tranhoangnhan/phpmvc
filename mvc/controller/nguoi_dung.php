<?php
class nguoi_dung  extends controller{
    var $title = '  người dùng';

    public $sanpham_model;
    public $loai_model;
    public $nguoidung_model;
    public function __construct() {
        $this->loai_model = $this ->model("loai_model");
        $this->sanpham_model = $this ->model("sanpham_model");
        $this->nguoidung_model = $this ->model("nguoidung_model");

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
            "page" => "nguoi_dung/show" ,
            "nguoi_dung" => $this->nguoidung_model->get(),
            'title' => 'Danh sách' . $this->title,

    
        ]);         
    }

public function viewadd(){
    $this->view("masterlayout",[
        "page" => "san_pham/add",
    ]);
}
public function insert() {
    
    if  (isset($_POST["submit"])) {
        
        $this->upanh();
        $ten_dang_nhap = $_POST['ten_dang_nhap'];
        $email = $_POST['email'];
        $mat_khau = $_POST['mat_khau'];
        $mat_khau = md5($mat_khau);

        $dia_chi = $_POST['dia_chi'];
        $so_dien_thoai = $_POST['so_dien_thoai'];
        $hinh_anh = basename( $_FILES["fileupload"]["name"]);
        $trang_thai = $_POST['trang_thai'];
        $vai_tro = $_POST['vai_tro'];
        $ngay_sinh = $_POST['ngay_sinh'];


        $kq = $this->nguoidung_model->adddulieu($ten_dang_nhap,$mat_khau,$email,$ngay_sinh,$dia_chi,$so_dien_thoai,$hinh_anh,$trang_thai,$vai_tro);
       
    } 
    $this->view("masterlayout",[
        "page" => "nguoi_dung/add" ,
        "loai" => $this->loai_model->get(),
        "nguoi_dung" => $this->nguoidung_model->get(),
        
        'title' => 'Thêm' . $this->title,
    ]);
       
    }

public function edit($id) {
    
    $this->view("masterlayout",[
        "page" => "nguoi_dung/edit" ,
        "nguoi_dung" => $this->nguoidung_model->get(),
        'title' => 'Cập nhật' . $this->title,
        'edit' => $this->nguoidung_model->edit($id),
    ]);

}
public function update($id) {
    $result_mess = false;
        if(isset($_POST["submit"])) {

            if(empty($_POST["ten_dang_nhap"])) {
                $this->view("masterlayout",[
                    "page" => "nguoi_dung/show" ,
                    'title' => 'Cập nhật' . $this->title,
                    "result" => $result_mess,
                    'edit' => $this->nguoidung_model->edit($id),

                ]);
                header('location: nguoi_dung/show ');

            }
           

         else {
             $this->upanh();
            
            $ten_dang_nhap = $_POST['ten_dang_nhap'];
            $email = $_POST['email'];
            $mat_khau = $_POST['mat_khau'];
              $mat_khau = md5($mat_khau);

            $dia_chi = $_POST['dia_chi'];
            $so_dien_thoai = $_POST['so_dien_thoai'];
            $hinh_anh = basename( $_FILES["fileupload"]["name"]);

            $trang_thai = $_POST['trang_thai'];
            $vai_tro = $_POST['vai_tro'];
            $ngay_sinh = $_POST['ngay_sinh'];


            $kq = $this->nguoidung_model->update($id,$ten_dang_nhap,$mat_khau,$email,$ngay_sinh,$dia_chi,$so_dien_thoai,$hinh_anh,$trang_thai,$vai_tro);
          
         }

              
            }
            $this->view("masterlayout",[
                "page" => "nguoi_dung/index" ,
                'title' => 'Cập nhật' . $this->title,
                "result" => $kq,
            "loai" => $this->loai_model->get(),

                'edit' => $this->nguoidung_model->edit($id),

            ]);
  }
   public function delete($id) {
    
    if($id == $_SESSION['id']) {
        echo '<script language="javascript">alert("Bạn không thể xóa chính bạn"); window.location="http://localhost/mvcda1/nguoi_dung/show";</script>';

    } else {
        $kq = $this->nguoidung_model->delete($id);

    }
    $this->view("masterlayout",[
        "page" => "nguoi_dung/show" ,
        'title' => 'Show' . $this->title,
        'result' => $kq,
        "nguoi_dung" => $this->nguoidung_model->get(),

    ]);
   
    
   }
}

