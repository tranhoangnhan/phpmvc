<?php 
error_reporting(E_ERROR | E_PARSE);
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Dự án 1 được thực hiện bởi nhóm We Are Special. Tất cả nội dung đều thuộc về We Are Special nghiêm cấm mọi hành vi sao">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $data['titleh']  ?></title>
    <link rel="shortcut icon" type="image/png" href="public/client/img/was.png" >

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
                <li><a href="home/gioithieu">Giới thiệu</a></li>
                <li><a href="home/lienhe">Liên hệ</a></li>
            </ul>
        </nav>
            <!-- end menu -->
    
        <div id="mobile-menu-wrap">
              <div class="header__top__right__social">
                                
                                <?php if(!isset($_SESSION['name'])) {
                                    echo ' <a href="login/"><i class="fa fa-user"></i> Login</a>';
                                } else {
                                    echo 'Xin chào: <a href="home/tai_khoan"> ' . $_SESSION['name']. '  </a>  <a href="login/logout">Đăng xuất</a>';                            } ?>
                                    
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
                                } else {
                                    echo 'Xin chào: <a href="home/tai_khoan"> ' . $_SESSION['name']. '  </a>  <a href="login/logout">Đăng xuất</a>';                            } ?>
                                    
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
                            <li><a href="home/cua_hang&act=tatca">Cửa Hàng</a>
                                
                            </li>
                            <li><a href="home/gioithieu">Giới thiệu</a></li>
                <li><a href="home/lienhe">Liên hệ</a></li>
            </ul>
    
                            
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
    
    <!-- Hero Section Begin -->
 
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                    <!-- tìm kiếm  -->
                    
              <div class="col-12">
              <div class="form">
                 <div style="width: 100%;" class="hero__search">
                        <div style="width: 100%;" class="hero__search__form">
                            <form method="POST">
                             
                                <input type="text" name="search_name" id="search_name" placeholder="Bạn cần tìm gì ?">
                                <button type="submit" name="timkiem" class="site-btn">Tìm</button>
                            </form>
                            </div>
                    </div>
                            <ul class="list-group" id="output_search" style="border: 1px solid #b2b2b2; margin-bottom: 20px;">
                            <?php if(isset($_POST['timkiem']))
                            {
                                $tu_khoa =$_POST['search_name'];
                                echo' <span>Bạn đang tìm sản phẩm theo từ khóa <b> '.$tu_khoa.' </b>.
                                ';
                                if( mysqli_fetch_array($data["timkiem2"]) == NULL) {
                                    echo' <span>Rất tiếc! Không tìm thấy sản phẩm liên quan đến  <b> '.$tu_khoa.' </b></span>';

                                } else {
                                    echo' <span>Đây là các sản phẩm có liên quan tới <b> '.$tu_khoa.' </b></span>
                                    ';
                                }
                            }
                            
                            ?>
                           <?php 
                           while ($timkiem = mysqli_fetch_array($data["timkiem"])) {
                           ?>
                          
                                    <li class="list-group">
                                    <div class="row">
                    
                                    <div class="col-4">
                                      <div class="image">
                                          <a href="home/chitiet/<?=$timkiem['ma_sp']?>">
                                          <img src="upload/<?=$timkiem['hinh_sp']?>" alt="" style="width: 75%;">

                                          </a>
                                      </div>
                                    </div>
                                    <div class="col-4">
                                      <div class="name-product text-red">
                                          <a href="home/chitiet/<?=$timkiem['ma_sp']?>"><?=$timkiem['ten_sp']?></a>
                                      </div>
                                      <div class="price">
                                        <del>  <span><?=currency_format($timkiem['gia'])?></span></del>
                                      </div>
                                      <div class="price">
                                      <span><?=currency_format($timkiem['gia_km'])?></span>

                                      </div>
                                      

                                    </div>
                                   <div class="col-4">
                                   <span><?=$timkiem['mo_ta']?> sản phẩm</span>
                                    <div class="so_luong">
                                        <b>                                        <span>Hiện đang còn: <?=$timkiem['so_luong']?> sản phẩm</span>
</b>
                                    </div>
                                   </div>
                                    </div>
                    
                              </li>
                              <hr>
                             <?php  }  ?>     
                            </ul>
                       
                 </div>
              </div>
                    <!-- end tìm kiếm  -->
                  
                </div>
            </div>
        </div>
    </section>
    