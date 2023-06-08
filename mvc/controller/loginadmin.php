<?php

class loginadmin extends controller {

    public $loai_model;
    public $sanpham_model;
    public $loginadmin_model;
    public $nguoidung_model;
    public function __construct() {
        $this->loai_model = $this ->model("loai_model");
        $this->sanpham_model = $this ->model("sanpham_model");
        $this->loginadmin_model = $this ->model("loginadmin_model");
        $this->nguoidung_model = $this ->model("nguoidung_model");



    }
    public function product() {
       $thong_bao = '';
      $this->view("login",[
        'thong_bao' => $thong_bao,
  ]);
    }

    public function login() {
        if(isset($_POST['submit'])) {
            $ten_dang_nhap = $_POST['ten_dang_nhap'];
            $mat_khau_input = $_POST['mat_khau'];

            if ($ten_dang_nhap < 5 ){
               $thong_bao = "<span> Tên đăng nhập phải trên 5 kí tự  </span>";
            }
            
            $result =  $this->loginadmin_model->login($ten_dang_nhap);
            if(mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_array($result)) {
                    $id = $row["id"];
                    $ten_dang_nhap_db = $row["ten_dang_nhap"];
                    $mat_khau = $row["mat_khau"];
                    $vai_tro = $row['vai_tro'];
                }
                if($vai_tro != 1) {
                    $thong_bao = "<span> Tài khoản không đủ quyền để đăng nhập </span>";
                    $this->view("login",[
                        'thong_bao' => $thong_bao,
            
                ]);
                }
            if (md5($mat_khau_input) == $mat_khau && $ten_dang_nhap == $ten_dang_nhap_db && $vai_tro == 1) {
                    $_SESSION['id'] = $id;
                    $this->view("masterlayout", [
                        "page" => "dash/index" ,
                       
                    ]);
            } 

            
          
            }
            $thong_bao = "<span> Sai tài khoản hoặc mật khẩu </span>";
            
            $this->view("login",[
                'thong_bao' => $thong_bao,
    
        ]);
        }
        $thong_bao = '';
        $this->view("login",[
            'thong_bao' => $thong_bao,

    ]);
    }
    public function logout() {
        $thong_bao = 'Bạn đã đăng xuất thành công';
        unset($_SESSION["id"]);
        session_destroy();
        $this->view("login",[
            'thong_bao' => $thong_bao,
                     
        ]); 
    }
}