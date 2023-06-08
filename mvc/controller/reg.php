<?php

class reg extends controller
{

    public $loai_model;
    public $sanpham_model;
    public $loginadmin_model;
    public $nguoidung_model;

    public $login_model;
    public $timkiem_model;
    public function __construct()
    {
        $this->loai_model = $this->model("loai_model");
        $this->sanpham_model = $this->model("sanpham_model");
        $this->loginadmin_model = $this->model("loginadmin_model");
        $this->nguoidung_model = $this->model("nguoidung_model");
        $this->timkiem_model = $this->model("timkiem_model");
        $this->login_model = $this->model("login_model");


    }
    public function product()
    {
        if(isset($_SESSION['user'])) {
            header('Location:http://localhost/mvcda1/home');
        }
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

        $this->view_client("reg", [
            'thong_bao' => $thong_bao,
            "timkiem" => $this->timkiem_model->tim_kiem($tu_khoa),
            "timkiem2" => $this->timkiem_model->tim_kiem($tu_khoa),

        ]);
    }

    public function reg()
    {
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

        // Vì tên button submit là do-register nên ta sẽ kiểm tra nếu
// tồn tại key này trong biến toàn cục $_POST thì nghĩa là người 
// dùng đã click register(submit)
        if (isset($_POST['dangky'])) {
            $this->upanh();
            // Lấy thông tin
            // Để an toàn thì ta dùng hàm mssql_escape_string để
            // chống hack sql injection
            $ten_dang_nhap = $_POST['ten_dang_nhap'];
            $mat_khau = $_POST['mat_khau'];
            $mat_khau_input = $_POST['mat_khau'];
            $hinh_anh = basename($_FILES["fileupload"]["name"]);
            if ($hinh_anh == NULL) {
                $hinh_anh = 'avtmacdinh.jpg';
            }
            $re_mat_khau = $_POST['re_mat_khau'];

            $mat_khau = md5($mat_khau);
            $re_mat_khau = md5($re_mat_khau);

            $email = $_POST['email'];
            $so_dien_thoai = $_POST['so_dien_thoai'];
            $dia_chi = $_POST['dia_chi'];
            $ngay_sinh = $_POST['ngay_sinh'];
            $partten = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
            $kq = $this->nguoidung_model->get();
            $res2 = mysqli_fetch_array($kq);
            
            $check = 0;
         foreach ($kq as $key => $value) {
            $emaildb = $value['email'];
            $sdtdb = $value['so_dien_thoai'];

          
            if ($emaildb == $email || $sdtdb == $so_dien_thoai) {
                $thong_bao = '<span> Email hoặc số điện thoại đã tồn tại  </span>';
                $check = 1;

            } 


    
        }
            
            if ($ten_dang_nhap == NULL || $mat_khau == NULL || $re_mat_khau == NULL || $email == NULL || $so_dien_thoai == NULL || $dia_chi == NULL || $ngay_sinh == NULL) {
                $thong_bao = '<span> Các thông tin không được để trống  </span> <br>';

            }
          
            $ngay = date("20y-m-d");
             if ($ngay_sinh > $ngay ) {
                $thong_bao = '<span> Ngày sinh '.$ngay_sinh.'   không hợp lệ vì lớn hơn ngày hiện tại </span>';
        
            }
            if(strlen($so_dien_thoai) < 10) {
                $thong_bao = '<span> Số điện thoại phải từ 10 số trở lên </span> <br>';

            }
            else if($email == $res2['email'] || $so_dien_thoai == $res2['so_dien_thoai']) {
                $thong_bao = '<span> Email hoặc số điện thoại đã tồn tại  </span> <br>';
            }
            
            else if (!preg_match($partten ,$mat_khau_input, $matchs)) {
                $thong_bao = '<span> Mật khẩu phải bao gồm: <br>
                                <ul class = "">
                                    <li> Cả ký tự chữ cái hoa, thường, chử số, ký tự đặc biệt, dấu chấm </li>
                                    <li> Bắt đầu với ký tự in hoa </li>
                                    <li> Có từ 6 đến 32 ký tự </li>
                                </ul>
                
                </span> <br>';

            }
            else if (strlen($ten_dang_nhap) < 3 && $ten_dang_nhap != NULL) {
                $thong_bao = '<span>    Tên đăng nhập phải từ 3 kí tự  </span> <br>';

            } else if (strlen($mat_khau) < 6 && $mat_khau != NULL && !preg_match("/^[a-zA-Z ]*$/", $mat_khau)) {
                $thong_bao = '<span>    Mật khẩu phải trên 6 kí tự  </span> <br>';

            } else if ($re_mat_khau != $mat_khau) {
                $thong_bao = '<span>    Mật khẩu nhập lại không trùng với mật khẩu đã nhập  </span> <br>';

            }
            // Validate Thông Tin Username và Email có bị trùng hay không
            else {

                if ($check == 0) {
                    $result2 = $this->login_model->login($ten_dang_nhap);

                    // Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
                    if (mysqli_num_rows($result2)) {
                        // Sử dụng javascript để thông báo
                        echo '<script language="javascript">alert("Tài khoản đã tồn tại trên hệ thống"); window.location="reg";</script>';

                        // Dừng chương trình
                        die();
                    }

                    $result = $this->login_model->get($ten_dang_nhap, $mat_khau, $email, $ngay_sinh, $dia_chi, $so_dien_thoai, $hinh_anh);
                    if ($result == true) {
                        echo '<script language="javascript">alert("Đăng ký thành công"); window.location="http://localhost/mvcda1/login";</script>';
                    } else {
                        echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="reg";</script>';
                    }
                }
            }
        }
        $this->view_client("reg", [
            'thong_bao' => $thong_bao,
            "timkiem" => $this->timkiem_model->tim_kiem($tu_khoa),
            "timkiem2" => $this->timkiem_model->tim_kiem($tu_khoa),

        ]);

    }


}