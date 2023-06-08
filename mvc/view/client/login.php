
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="public/client/img/was.png" >

    <title>Đăng nhập</title>
    <base href="http://localhost/mvcda1/">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b96c239a77.js" crossorigin="anonymous"></script>
    <!-- Css Styles -->
    <link rel="stylesheet" href="public/client/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="public/client/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="public/client/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="public/client/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="public/client/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="public/client/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="public/client/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="public/client/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    
    <!-- header mô bai -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="home/"><img  style="height: auto; justify-content: center; width:50px ;margin-left: 90px;" src="public/client/img/Was.png" alt=""></a>
           
        </div>
        
            <!-- menu mobile -->
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="home/">Trang chủ</a></li>
                <li><a href="sanpham.html">Cửa Hàng</a>
                   
                </li>
                <li><a href="lienhe.html">Giới thiệu</a></li>
                <li><a href="lienhe.html">Liên hệ</a></li>
            </ul>
        </nav>
            <!-- end menu -->
    
        <div id="mobile-menu-wrap">
            <div style="margin-left: 30px;" class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Người Dùng</a>
            </div>
        </div>
    </div>
    <!-- header mobile End -->
    
    <!-- Header destop -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i>  was@localbrand.com</li>
                                <li>Miển phí giao hàng với đơn hàng trên 500.000</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <!-- icon  -->
                            <div class="header__top__right__social">
                                
                                <?php if(!isset($_SESSION['name'])) {
                                    echo ' <a href="login/"><i class="fa fa-user"></i> Login</a>';
                                   
                                }                       ?>
                                    
                            </div>
                            <!-- end icon  -->
                            <!-- login  -->
                            <div class="header__top__right__auth">
                                <a href="home/giohang/"><i class="fa-solid fa-cart-shopping"></i>
                                    (<?php if(isset($_SESSION['giohang'])) {
                                        echo  count($_SESSION['giohang']);
                                      } else {echo 0;}   ?>)
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-1.5">
                    <div class="header__logo">
                        <a href="home/"><img src="public/client/img/was.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <!-- menu ngang -->
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="home/">Trang Chủ</a></li>
                            <li><a href="sanpham.html">Cửa Hàng</a>
                                
                            </li>
                            <li><a href="gioithieu.html>Giới thiệu</a>
                               
                            </li>
                          
                            <li><a href="lienhe.html">Liên Hệ</a></li>
    
                            
                        </ul>
                    </nav>
                    
                    <!-- end menu  -->
                </div>
                    <!-- phone ho trợ  -->
                <div style="padding-top: 20px;" class="hero__search__phone">
                    <div class="hero__search__phone__icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="hero__search__phone__text">
                        <h5>+849815901</h5>
                        <span>Hổ trợ 24/7 </span>
                    </div>
                </div>
                <!-- end phone  -->
            </div>
            
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header destop End -->
    
    

<!-- Hero Section End -->

<!-- form dang nhap -->
<div class="container">
    <h3 style="text-align: center;">Đăng nhập tài khoản</h3>
   
    <!-- điền thông tin đăng nhập  -->
    <form class="dnmb"  action="login/login" method="POST">
        <div  class="form-group">
          <label for="email">Email :</label>
          <input type="text"placeholder="Nhập tên đăng nhập" name="ten_dang_nhap" class="form-control form-control-lg" id="email">
        </div>
        <div class="form-group">
          <label for="pwd">Mật Khẩu:</label>
          <input type="password" placeholder="Nhập mật khẩu" name="mat_khau" class="form-control form-control-lg" id="pwd">
        </div>
      <!-- end điền thông tin -->
                                        <?= $data['thong_bao']  ?>
      <!-- button dang nhap  -->
      <div class="row">
      <button  type="submit" name="submit" class="btn btn-dark ">Đăng nhập</button>
      
    </div>
    </form>
      <!-- end button  -->
      <!-- quên mật khẩu  -->
      <div class="row">
        <a class="qmk" href="home/quen_mk">Quên mật khẩu?</a>  
      </div>
      <!-- end quên mat khau -->
      <div class="row">
        <p style="margin: 0 auto;margin-top: 15px;margin-bottom: 15px;">Bạn chưa có tài khoản?.Đăng kí ngay<a class="tkm" href="reg/">Tại đây</a>  </p>
      </div>
</div>
   <!-- end form dang nhap  -->

    <!-- Footer destop -->
    <footer class="footer spad footerdestop">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                        <a href="home/"><img style="width: 100%;height: 50px;" src="public/client/img/Was.png" alt="#"></a>
                        </div>
                        <ul>
                            <li>Địa Chỉ: VJ3H+G4 Quận 12, Thành phố Hồ Chí Minh, Việt Nam</li>
                            <li>Số Điện Thoại: +939.815.901</li>
                            <li>Email: was@localbrand.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Liên Kết Hữu Ích</h6>
                        <ul>
                            <li><a href="#">Về Chúng tôi</a></li>
                            <li><a href="#">Về Cửa Hàng Của Chúng Tôi</a></li>
                            <li><a href="#">Mua Sắm An Toàn</a></li>
                            <li><a href="#">Thông Tin Giao Hàng</a></li>
                            <li><a href="#">Chính Sách Bảo Mật</a></li>
                            <li><a href="#">Sơ Đồ Trang WEB</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Chúng ta là ai</a></li>
                            <li><a href="#">Dịch vụ của chúng tôi</a></li>
                            <li><a href="#">Dự án</a></li>
                            <li><a href="#"> Sự đổi mới</a></li>
                            <li><a href="#"> Tiếp xúc</a></li>
                            <li><a href="#">Lời chứng thực</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Tham gia bản tin của chúng tôi ngay bây giờ</h6>
                        <p>Nhận thông tin cập nhật qua email về cửa hàng mới nhất của chúng tôi và các ưu đãi đặc biệt.</p>
                        <form action="#">
                            <input type="text" placeholder="Nhập Thư Của Bạn">
                            <button type="submit" class="site-btn">Gửi Ngay</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->


<!-- footer mobile  -->
<footer class="footer spad foomobile">
    <div class="container">
        <div class="row">
           
            <div class="col-lg-4 col-md-12">
                <div class="footer__widget">
                    <h6>Tham gia bản tin của chúng tôi ngay bây giờ</h6>
                    <p>Nhận thông tin cập nhật qua email về cửa hàng mới nhất của chúng tôi và các ưu đãi đặc biệt.</p>
                    <form action="#">
                        <input type="text" placeholder="Nhập Thư Của Bạn">
                        <button type="submit" class="site-btn">Gửi Ngay</button>
                    </form>
                    <div class="footer__widget__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <ul>
                        <li>Địa Chỉ: VJ3H+G4 Quận 12, Thành phố Hồ Chí Minh, Việt Nam</li>
                        <li>Số Điện Thoại: +939.815.901</li>
                        <li>Email: was@localbrand.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end footer  -->

    <!-- Js Plugins -->
    <script src="public/client/js/jquery-3.3.1.min.js"></script>
    <script src="public/client/js/bootstrap.min.js"></script>
    <script src="public/client/js/jquery.nice-select.min.js"></script>
    <script src="public/client/js/jquery-ui.min.js"></script>
    <script src="public/client/js/jquery.slicknav.js"></script>
    <script src="public/client/js/mixitup.min.js"></script>
    <script src="public/client/js/owl.carousel.min.js"></script>
    <script src="public/client/js/main.js"></script>



</body>

</html>