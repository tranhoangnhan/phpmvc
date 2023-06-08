<?php

class login extends controller {

    public $loai_model;
    public $sanpham_model;
    public $login_model;
    public $nguoidung_model;
    public $timkiem_model;
    public function __construct() {
        $this->loai_model = $this ->model("loai_model");
        $this->sanpham_model = $this ->model("sanpham_model");
        $this->login_model = $this ->model("login_model");
        $this->nguoidung_model = $this ->model("nguoidung_model");
        $this->timkiem_model = $this ->model("timkiem_model");



    }
    public function product() {
        if(isset($_SESSION['user'])) {
            header('Location:http://localhost/mvcda1/home');
        }
        $thong_bao = "";
        if (isset($_POST['timkiem'])) {
            if ($_POST['search_name'] == NULL) {
                echo '<script language="javascript">alert("Bạn chưa nhập sản phẩm tìm kiếm"); window.location="http://localhost/mvcda1/home";</script>';

            } else {
                $tu_khoa = $_POST['search_name'];

            }



        } else {
            $tu_khoa = "khongco";


        }
        $res = $this->timkiem_model->tim_kiem($tu_khoa);
      $this->view_client("login",[
    'thong_bao' => $thong_bao,
    "timkiem" => $this->timkiem_model->tim_kiem($tu_khoa),
    "timkiem2" => $this->timkiem_model->tim_kiem($tu_khoa),

  ]);
    }

    public function login() {
        if (isset($_POST['timkiem'])) {
            if ($_POST['search_name'] == NULL) {
                echo '<script language="javascript">alert("Bạn chưa nhập sản phẩm tìm kiếm"); window.location="http://localhost/mvcda1/home";</script>';

            } else {
                $tu_khoa = $_POST['search_name'];

            }



        } else {
            $tu_khoa = "khongco";


        }
        $res = $this->timkiem_model->tim_kiem($tu_khoa);
        $thong_bao = "";
        if(isset($_POST['submit'])) {
            $ten_dang_nhap = $_POST['ten_dang_nhap'];
            $mat_khau_input = $_POST['mat_khau'];

            if ($ten_dang_nhap == NULL || $mat_khau_input == null){
                $thong_bao = '<span> Tên đăng nhập hoặc mật khẩu không được để trống  </span> <br>';
               
            }
            

if (!preg_match("/^[a-zA-Z ]*$/",$ten_dang_nhap) && $ten_dang_nhap != NULL) {
    $thong_bao = '<span> Tên đăng nhập không được chứa  kí tự đặc biệt  </span> <br>';

            }
        
            if (strlen($ten_dang_nhap) <3 && $ten_dang_nhap != NULL) {
                $thong_bao = '<span>    Tên đăng nhập phải từ 3 kí tự  </span> <br>';

            }
            if (strlen($mat_khau_input) <6 && $mat_khau_input != NULL) {
                $thong_bao = '<span>    Mật khẩu phải trên 6 kí tự  </span> <br>';

            }
            
            $result =  $this->login_model->login($ten_dang_nhap);
            if(mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_array($result)) {
                    $id = $row["id"];
                    $ten_dang_nhap_db = $row["ten_dang_nhap"];
                    $mat_khau = $row["mat_khau"];
                }
            
            if (md5($mat_khau_input) == $mat_khau && $ten_dang_nhap == $ten_dang_nhap_db) {
                    $_SESSION['user'] = $id;
                    $_SESSION['name'] = $ten_dang_nhap;
                  
                    header('location: http://localhost/mvcda1/home');
            } 
            
            
            else {
                $thong_bao = '<span>   Sai mật khẩu hoặc tên đăng nhập  </span> <br>';
                
                $this->view_client("login",[
                    'thong_bao' => $thong_bao,
                    "timkiem" => $this->timkiem_model->tim_kiem($tu_khoa),
                    "timkiem2" => $this->timkiem_model->tim_kiem($tu_khoa),
        
            ]);

            }
          
            }
          
        }

        $this->view_client("login",[
            'thong_bao' => $thong_bao,
            "timkiem" => $this->timkiem_model->tim_kiem($tu_khoa),
            "timkiem2" => $this->timkiem_model->tim_kiem($tu_khoa),

    ]);
    }
    public function logout() {
        if (isset($_POST['timkiem'])) {
            if ($_POST['search_name'] == NULL) {
                echo '<script language="javascript">alert("Bạn chưa nhập sản phẩm tìm kiếm"); window.location="http://localhost/mvcda1/home";</script>';

            } else {
                $tu_khoa = $_POST['search_name'];

            }



        } else {
            $tu_khoa = "khongco";


        }
        $res = $this->timkiem_model->tim_kiem($tu_khoa);
        unset($_SESSION["user"]);
        unset($_SESSION["name"]);
        $thong_bao = '<span>  Bạn đã đăng xuất thành công  </span> <br>';

        // session_destroy();
        $this->view_client("login",[
            'thong_bao' => $thong_bao,
            "timkiem" => $this->timkiem_model->tim_kiem($tu_khoa),
            "timkiem2" => $this->timkiem_model->tim_kiem($tu_khoa),
    
        ]); 
    }
}