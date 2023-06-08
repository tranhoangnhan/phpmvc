<?php
class home extends controller
{
    var $title = ' loại sản phẩm';
    public $sanpham_model;
    public $loai_model;
    public $tin_model;

    public $giohang_model;
    public $timkiem_model;

    public $khachhang_model;
    public $nguoidung_model;
    public $donhang_model;

    public $hoadon_model;
    public $slider_model;

    public function __construct()
    {
        $this->loai_model = $this->model("loai_model");
        $this->sanpham_model = $this->model("sanpham_model");
        $this->giohang_model = $this->model("giohang_model");
        $this->khachhang_model = $this->model("khachhang_model");
        $this->nguoidung_model = $this->model("nguoidung_model");
        $this->hoadon_model = $this->model("hoadon_model");
        $this->donhang_model = $this->model("donhang_model");
        $this->slider_model = $this->model("slider_model");
        $this->timkiem_model = $this->model("timkiem_model");
    }
    public function product()
    {
        $titleh = 'Trang chủ';
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

        $this->view_client("masterlayout", [
            "page" => "trang_chu/index",
            "loai" => $this->loai_model->get(),
            "san_pham" => $this->sanpham_model->get(),
            "san_pham_quan" => $this->sanpham_model->getQuan(),
            "san_pham_ao" => $this->sanpham_model->getAo(),
            "san_pham_pk" => $this->sanpham_model->getPK(),
            "slider" => $this->slider_model->gettt(),
            "slider2" => $this->slider_model->getcount(),
            "timkiem" => $this->timkiem_model->tim_kiem($tu_khoa),
            "timkiem2" => $this->timkiem_model->tim_kiem($tu_khoa),
            'titleh' => $titleh,



        ]);
    }
    public function loaihang()
    {

        $this->view("masterlayout", [
            "page" => "loai/add",
            "loai" => $this->loai_model->get(),
            "sanpham" => $this->sanpham_model->get(),
            'title' => 'Thêm' . $this->title,

        ]);
    }
    public function show()
    {
        $this->view("masterlayout", [
            "page" => "loai/show",
            "loai" => $this->loai_model->get(),
            "sanpham" => $this->sanpham_model->get(),
            'title' => 'Show' . $this->title,

        ]);
    }

    public function viewadd()
    {
        $this->view("masterlayout", [
            "page" => "loai/add",
        ]);
    }
    public function insert()
    {
        if (isset($_POST["submit"])) {
            $ten_loai = $_POST['ten_loai'];
            $kq = $this->loai_model->adddulieu($ten_loai);
            $this->view("masterlayout", [
                "page" => "loai/add",
                "result" => $kq,
                'title' => 'Thêm' . $this->title,

            ]);
        }

    }

    public function chitiet($ma_sp)
    {
        $query = $this->sanpham_model->getChitiet($ma_sp);
        $result = mysqli_fetch_array($query);
        $titleh = $result['ten_sp'].' - Chi tiết sản phẩm';
        if (isset($_POST['timkiem'])) {
            if ($_POST['search_name'] == NULL) {
                echo '<script language="javascript">alert("Bạn chưa nhập sản phẩm tìm kiếm"); window.location="http://localhost/mvcda1/home";</script>';

            } else {
                $tu_khoa = $_POST['search_name'];
                $res = $this->timkiem_model->tim_kiem($tu_khoa);
            }



        } else {
            $tu_khoa = "khongco";
            $res = $this->timkiem_model->tim_kiem($tu_khoa);

        }
        $this->view_client("masterlayout", [
            "page" => "chi_tiet/index",
            "loai" => $this->loai_model->get(),
            "san_pham" => $this->sanpham_model->get(),
            "chi_tiet" => $this->sanpham_model->getChitiet($ma_sp),
            "anh" => $this->sanpham_model->getAnhChitiet($ma_sp),
            "timkiem" => $this->timkiem_model->tim_kiem($tu_khoa),
            "timkiem2" => $this->timkiem_model->tim_kiem($tu_khoa),
            'titleh' => $titleh,


        ]);
    }

    public function addgiohang($ma_sp)
    {
        $result = $this->giohang_model->get($ma_sp);
        // session_destroy();
        if (mysqli_num_rows($result)) {

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $so_luong = $_REQUEST['so_luong'];
                $so_luong_gio = $_REQUEST['so_luong_gio'];

            } else {
                $so_luong = 1;

            }
            while ($row = mysqli_fetch_array($result)) {

                $items = [
                    'ma_sp' => $row["ma_sp"],
                    'ten_sp' => $row["ten_sp"],
                    'hinh_sp' => $row["hinh_sp"],
                    'gia' => ($row["gia"] > 0) ? $row['gia_km'] : $row['gia'],
                    'so_luong' => $so_luong,
                    'gia_goc' => $row["gia"],

                ];

            }
            if (isset($_SESSION["giohang"][$ma_sp])) {
                if (isset($so_luong_gio)) {
                    if ($_SESSION["giohang"][$ma_sp]['so_luong'] < $so_luong_gio) {
                        $_SESSION["giohang"][$ma_sp]['so_luong'] = $so_luong_gio - $so_luong;
                    } else if ($_SESSION["giohang"][$ma_sp]['so_luong'] > $so_luong_gio) {
                        $_SESSION["giohang"][$ma_sp]['so_luong'] = $so_luong_gio + $so_luong;

                    } else {
                        $so_luong_gio = 0;
                    }
                }
                $_SESSION["giohang"][$ma_sp]['so_luong'] += $so_luong;

            } else {

                $_SESSION["giohang"][$ma_sp] = $items;

            }
            header('Location: http://localhost/mvcda1/home/');

        }



    }

    public function xoagio($ma_sp)
    {
        $result = $this->giohang_model->get($ma_sp);
        unset($_SESSION['giohang'][$ma_sp]);
        $this->view_client("masterlayout", [
            "page" => "gio_hang/index",
            "loai" => $this->loai_model->get(),
            "san_pham" => $this->sanpham_model->get(),


        ]);
    }
    public function giohang()
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
        $this->view_client("masterlayout", [
            "page" => "gio_hang/index",
            "loai" => $this->loai_model->get(),
            "san_pham" => $this->sanpham_model->get(),
            "timkiem" => $this->timkiem_model->tim_kiem($tu_khoa),
            "timkiem2" => $this->timkiem_model->tim_kiem($tu_khoa),

        ]);
    }
    public function dathang()
    {
        $titleh = "Thanh toán";

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
        $this->view_client("masterlayout", [
            "page" => "thanh_toan/index",
            "loai" => $this->loai_model->get(),
            "san_pham" => $this->sanpham_model->get(),
            "timkiem" => $this->timkiem_model->tim_kiem($tu_khoa),
            "timkiem2" => $this->timkiem_model->tim_kiem($tu_khoa),
            'titleh' => $titleh,

        ]);
    }
    public function xulidathang()
    {
        $titleh = '';
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
        if (isset($_POST['submit'])) {
            $id = $_SESSION['user'];
            $ten_kh1 = $_POST['ten_kh'];
            $ten_kh = ucwords(trim(str_replace("","",$ten_kh1)));
            $dia_chi = $_POST['dia_chi'];
            $so_dien_thoai = $_POST['so_dien_thoai'];
            $email = $_POST['email'];
            // ADD DỮ LIỆU VÀO BẢNG KHÁCH HÀNG
            $them_kh = $this->giohang_model->them_kh($id, $ten_kh, $dia_chi, $so_dien_thoai, $email);
            // LẤY ID TÀI KHOẢN
            $get = $this->giohang_model->infokh($id);
            $res = mysqli_fetch_array($get);
            $ma_kh = $res['ma_kh'];
            $ngay_lap_hd = date("Y/m/d");
            $date = date('Y-m-j');
            $ngay_nhan_hang = strtotime('+7 day', strtotime($date));
            $ngay_nhan_hang = date('Y-m-j', $ngay_nhan_hang);
            $them_hd = $this->giohang_model->hoa_don($ma_kh, $ngay_lap_hd, $ngay_nhan_hang);
            // LẤY MÃ HÓA ĐƠN
            $gethd = $this->giohang_model->infohd();
            $res2 = mysqli_fetch_array($gethd);
            $ma_hd = $res2['ma_hd'];
            $giohang = $_SESSION['giohang'];
            //LẤY DỮ LIỆU TRONG SESSION GUOR HÀNTG
            foreach ($giohang as $key => $value) {
                $ma_sp = $value['ma_sp'];
                $so_luong = $value['so_luong'];
                $ma_size = 1;
                // ADD DỮ LIÊU VÀO BẢNG CHI TIẾT HÓA ĐƠN
                $them_cthd = $this->giohang_model->cthd($ma_hd, $ma_sp, $so_luong, $ma_size);

            }
            if ($get == true) {
                echo '<script language="javascript">alert("Đặt hàng thành công"); window.location="http://localhost/mvcda1/home/ctdh/' . $ma_hd . '";</script>';
                unset($_SESSION['giohang']);
            }
            // header("Location:http://localhost/mvcda1/home/");

            $this->view_client("masterlayout", [
                "loai" => $this->loai_model->get(),
                "san_pham" => $this->sanpham_model->get(),
                "id" => $this->giohang_model->infokh($id),


            ]);


        }

        $this->view_client("masterlayout", [
            "page" => "thanh_toan/index",
            "loai" => $this->loai_model->get(),
            "san_pham" => $this->sanpham_model->get(),
            "id" => $this->giohang_model->infokh(),
            "timkiem" => $this->timkiem_model->tim_kiem($tu_khoa),
            "timkiem2" => $this->timkiem_model->tim_kiem($tu_khoa),
            'titleh' => $titleh,

        ]);
    }

    public function cua_hang()
    {
        $titleh = "Cửa hàng";
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
        if (isset($_GET['act'])) {
            $act = $_GET['act'];
        } else {
            $act = ['tatca'];
        }


        $this->view_client("masterlayout", [
            "page" => "cua_hang/index",
            "loai" => $this->loai_model->get(),
            "san_pham" => $this->sanpham_model->getcuahang($act),
            "san_pham2" => $this->sanpham_model->getcuahang($act),
            "timkiem" => $this->timkiem_model->tim_kiem($tu_khoa),
            "timkiem2" => $this->timkiem_model->tim_kiem($tu_khoa),
            'titleh' => $titleh,



        ]);
    }
    public function tai_khoan()
    {  if (isset($_POST['timkiem'])) {
        if ($_POST['search_name'] == NULL) {
            echo '<script language="javascript">alert("Bạn chưa nhập sản phẩm tìm kiếm"); window.location="http://localhost/mvcda1/home";</script>';

        } else {
            $tu_khoa = $_POST['search_name'];

        }



    } else {
        $tu_khoa = "khongco";


    }
    $res = $this->timkiem_model->tim_kiem($tu_khoa);
        $titleh = 'Tài khoản của bạn';
        if (!isset($_SESSION['user'])) {
            header("Location: http://localhost/mvcda1/login/");
        }
        $id = $_SESSION['user'];

        $this->view_client("masterlayout", [
            "page" => "tai_khoan/index",
            "loai" => $this->loai_model->get(),
            "tai_khoan" => $this->nguoidung_model->getuser($id),
            "don_hang" => $this->hoadon_model->getuser($id),
            "timkiem" => $this->timkiem_model->tim_kiem($tu_khoa),
            "timkiem2" => $this->timkiem_model->tim_kiem($tu_khoa),
            'titleh' => $titleh,




        ]);
    }
    public function ctdh($ma_hd)
    {
        $titleh = "Chi tiết đơn hàng";
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
        if (!isset($_SESSION['user'])) {
            header("Location: http://localhost/mvcda1/login/");
        }
        $id = $_SESSION['user'];

        $this->view_client("masterlayout", [
            "page" => "chi_tiet/don_hang",
            "loai" => $this->loai_model->get(),
            "tai_khoan" => $this->nguoidung_model->getuser($id),
            "don_hang" => $this->donhang_model->getuser($ma_hd),
            "user" => $this->donhang_model->getuser($ma_hd),
            "trang_thai" => $this->hoadon_model->getcthd($id, $ma_hd),
            "ma" => $this->donhang_model->getuser($ma_hd),
            "timkiem" => $this->timkiem_model->tim_kiem($tu_khoa),
            "timkiem2" => $this->timkiem_model->tim_kiem($tu_khoa),

            'titleh' => $titleh,





        ]);
    }
    public function update_user()
    {
        $titleh = 'Cập nhật tài khoản';
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
        $id = $_SESSION['user'];

        $query = $this->nguoidung_model->getuser($id);
        $res = mysqli_fetch_array($query);
        $thong_bao = '';
       
        
        if (isset($_POST['capnhat'])) {
            $this->upanh(); 
            $hinh_anh = basename($_FILES["fileupload"]["name"]);
            if($hinh_anh == NULL) {
                $hinh_anh = $res['hinh_anh'];
            } 
            if($res['hinh_anh'] == NULL) {
                $hinh_anh = 'avtmacdinh.jpg';
            } 
            $email = $_POST['email'];
            $dia_chi = $_POST['dia_chi'];
            $so_dien_thoai = $_POST['so_dien_thoai'];
    

            
            

            
            $ngay_sinh = $_POST['ngay_sinh'];

            if (
                $email == NULL || $dia_chi == NULL || $so_dien_thoai == NULL ||

                 $ngay_sinh == NULL
            ) {
                $thong_bao = '<span> Vui lòng không để trống thông tin  </span>';
            } 
            $kq = $this->nguoidung_model->update_user($id, $email, $ngay_sinh, $dia_chi, $so_dien_thoai, $hinh_anh);


        }
        $this->view_client("masterlayout", [
            'page' => "tai_khoan/edit",
            "tai_khoan" => $this->nguoidung_model->getuser($id),
            'thong_bao' => $thong_bao,
            "timkiem" => $this->timkiem_model->tim_kiem($tu_khoa),
            "timkiem2" => $this->timkiem_model->tim_kiem($tu_khoa),
            'titleh' => $titleh,





        ]);
    }
    public function doi_mk() {
        $titleh = "Đổi mật khẩu";

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
        if(!isset($_SESSION['user'])) {
            header('Location:http://localhost/mvcda1/home');
        }
        $thong_bao = '';
        $id = $_SESSION['user'];
        if(isset($_POST['doimatkhau'])) {
            $mat_khau = $_POST['mat_khau'];
            $mat_khau = md5($mat_khau);
            $mat_khau_moi = $_POST['mat_khau_moi'];
            $mat_khau_moi = md5($mat_khau_moi);
            $re_mat_khau_moi = $_POST['re_mat_khau_moi'];
            $re_mat_khau_moi = md5($re_mat_khau_moi);

        $query =  $this->nguoidung_model->getuser( $id);
        $res = mysqli_fetch_array($query);
        $mat_khau_db = $res['mat_khau'];
        $partten = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
        if($mat_khau != $mat_khau_db) {
       
            $thong_bao = '<span> Mật khẩu cũ không chính xác </span>';

        }
        else if ($mat_khau_moi != $re_mat_khau_moi) {
            $thong_bao = '<span> Hai mật khẩu không giống nhau </span>';

        }
        else if (!preg_match($partten ,$mat_khau_moi, $matchs)) {
            $thong_bao = '<span> Mật khẩu phải bao gồm: <br>
                            <ul class = "">
                                <li> Cả ký tự chữ cái hoa, thường, chử số, ký tự đặc biệt, dấu chấm </li>
                                <li> Bắt đầu với ký tự in hoa </li>
                                <li> Có từ 6 đến 32 ký tự </li>
                            </ul>
            
            </span> <br>';

        }
        else {
            $thong_bao = '<span> Đổi mật khẩu thành công </span>';

            $kq = $this->nguoidung_model->doi_mk($mat_khau_moi, $id);

        }
        }
        


        $this->view_client("masterlayout", [
            'page' => "tai_khoan/doi_mk",
            'thong_bao' => $thong_bao,
            "timkiem" => $this->timkiem_model->tim_kiem($tu_khoa),
            "timkiem2" => $this->timkiem_model->tim_kiem($tu_khoa),
            'titleh' => $titleh,

        ]);
    }
  public function quen_mk() {
    
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
    $thong_bao = '';

        $titleh = 'Quên mật khẩu';
        if(isset($_POST['quen_mk'])) {
            $email = $_POST['email'];
            $kq = $this->nguoidung_model->get();
            $res2 = mysqli_fetch_array($kq);
            foreach ($kq as $key => $value) {
                $emaildb = $value['email'];
               
                // ADD DỮ LIÊU VÀO BẢNG CHI TIẾT HÓA ĐƠN
                if($email != $emaildb) {
                    $thong_bao = '<span> Email không tồn tại trên hệ thống</span>';
    
                }
                else {
                    $_SESSION['doi_mk'] = $email;
                    header('Location:http://localhost/mvcda1/home/form_quen_mk/'.$emaildb.'');
                 
                }
            }
         
        }
       
      
       
    $this->view_client("masterlayout", [
        'page' => "tai_khoan/quen_mk",
        'thong_bao' => $thong_bao,
        "timkiem" => $this->timkiem_model->tim_kiem($tu_khoa),
        "timkiem2" => $this->timkiem_model->tim_kiem($tu_khoa),
        'titleh' => $titleh,

    ]);
  }
  public function form_quen_mk($email) {
    if(!$_SESSION['doi_mk']) {
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
        $titleh = 'Đặt lại mật khẩu';
    $thong_bao = '';
    if(isset($_POST['doi_mk'])) {
            $mat_khau_moi_chuaxyly = $_POST['mat_khau'];
            $mat_khau_moi = $_POST['mat_khau'];

            $mat_khau_moi = md5($mat_khau_moi);
            $re_mat_khau = $_POST['re_mat_khau'];
            $re_mat_khau = md5($re_mat_khau);

          $partten = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
        
          if ($mat_khau_moi != $re_mat_khau) {
              $thong_bao = '<span> Hai mật khẩu không giống nhau </span>';
  
          }
         if (!preg_match($partten ,$mat_khau_moi_chuaxyly, $matchs)) {
              $thong_bao = '<span> Mật khẩu phải bao gồm: <br>
                              <ul class = "">
                                  <li> Cả ký tự chữ cái hoa, thường, chử số, ký tự đặc biệt, dấu chấm </li>
                                  <li> Bắt đầu với ký tự in hoa </li>
                                  <li> Có từ 6 đến 32 ký tự </li>
                              </ul>
              
              </span> <br>';
  
          }
          else {
              $thong_bao = '<span> Đổi mật khẩu thành công </span>';
                unset($_SESSION['doi_mk']);
              $kq = $this->nguoidung_model->quen_mk($mat_khau_moi, $email);
             
          }


         

          





    }

    $this->view_client("masterlayout", [
        'page' => "tai_khoan/form_quen_mk",
        'thong_bao' => $thong_bao,
        "timkiem" => $this->timkiem_model->tim_kiem($tu_khoa),
        "timkiem2" => $this->timkiem_model->tim_kiem($tu_khoa),
        'titleh' => $titleh,


    ]);
  }
  public function lienhe() {
        $titleh = "Liên hệ";

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
    $this->view_client("masterlayout", [
        'page' => "lien_he/index",
        
        "timkiem" => $this->timkiem_model->tim_kiem($tu_khoa),
        "timkiem2" => $this->timkiem_model->tim_kiem($tu_khoa),
        'titleh' => $titleh,


    ]);
  }
  public function dieukhoan() {
    $titleh = "Điều khoản và chính sách";

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
$this->view_client("masterlayout", [
    'page' => "dieu_khoan/index",
    
    "timkiem" => $this->timkiem_model->tim_kiem($tu_khoa),
    "timkiem2" => $this->timkiem_model->tim_kiem($tu_khoa),
    'titleh' => $titleh,


]);
}
}