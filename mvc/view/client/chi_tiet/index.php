<?php $chi_tiet = mysqli_fetch_array($data["chi_tiet"]) ?>

   <!-- Hero Section Begin -->
  
        <section class="breadcrumb-section set-bg" data-setbg="public/client/img/qaq.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="breadcrumb__text">
                            <h2>Chi Tiết Sản Phẩm</h2>
                            <div class="breadcrumb__option">
                                <a href="./index.html">Trang Chủ</a>
                                <span>Chi Tiết</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner End -->
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <!-- ảnh sản phẩm -->
                    <div class="col-lg-6 col-md-6">
                        <div class="product__details__pic">
                            <div class="product__details__pic__item">
                                <img class="product__details__pic__item--large"
                                    src="upload/<?= $chi_tiet['hinh_sp'] ?>
" alt="">
                            </div>
                            <div class="product__details__pic__slider owl-carousel">
                        <?php while ( $anh = mysqli_fetch_array($data["anh"])) { ?>

                                <img data-imgbigurl="upload/<?= $anh['anh_chi_tiet'] ?>"
                                    src="upload/<?= $anh['anh_chi_tiet'] ?>" alt="">
                            <?php  }  ?>
                            </div>
                        </div>
                    </div>
                    <!-- end -->

                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <!-- tên sản phẩm -->
                        <h3>
                            <?= $chi_tiet['ten_sp'] ?>
                        </h3>
                        <!-- end -->
                        <!-- giá -->
                        <div class="product__details__price ">
                        <del><?= currency_format($chi_tiet['gia']) ?> </del>

                        </div>
                        <div class="product__details__price ">
                        <?= currency_format($chi_tiet['gia_km']) ?>

                        </div>
                        <!-- end -->
                        <form action="home/addgiohang/<?= $chi_tiet['ma_sp'] ?>" method="POST">

                        <!-- chọn size -->
                        <div class="select-swap">  
		                        <div data-value="XS" class="n-sd swatch-element xs ">
                                <input class="variant-0" id="swatch-0-xs" type="radio" name="size" value="1" data-vhandle="xs" checked="">
                                <label for="swatch-0-xs" class="sd">
                                    <span>XS</span>
                                </label>
                            </div>
                         <div data-value="S" class="n-sd swatch-element s ">
                                <input class="variant-0" id="swatch-0-s" type="radio" name="size" value="2" data-vhandle="s">
                                
                                <label for="swatch-0-s" class="">
                                    <span>S</span>
                                </label>
                                
                            </div>
                          <div data-value="M" class="n-sd swatch-element m ">
                                <input class="variant-0" id="swatch-0-m" type="radio" name="size" value="3" data-vhandle="m">
                                
                                <label for="swatch-0-m" class="">
                                    <span>M</span>
                                </label>
                                
                            </div>
                        <div data-value="L" class="n-sd swatch-element l ">
                                <input class="variant-0" id="swatch-0-l" type="radio" name="size" value="4" data-vhandle="l">
                                
                                <label for="swatch-0-l" class="">
                                    <span>L</span>
                                </label>    
                            </div>
                            <div data-value="XL" class="n-sd swatch-element xl ">
                                <input class="variant-0" id="swatch-0-xl" type="radio" name="size" value="5" data-vhandle="xl"> 
                                <label for="swatch-0-xl" class="">
                                    <span>XL</span>
                                </label>
                            </div>
                        </div>
                        <!-- end -->
                    
                        <!--    Mô tả -->
                        <div class="jumbotron">
                        <h2>Mô tả</h2>
                            <p>
                            <?= $chi_tiet['mo_ta'] ?>

                            </p>
                     
                            <!-- end -->

                       
                        <!-- end -->
                            <!-- chọn số lượng -->
                            <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="number" name="so_luong" value="1">
                                    <input type="hidden" name="ma_sp" value=" <?= $chi_tiet['ma_sp'] ?>">
                                </div>
                            </div>
                        </div>
                        <button name="submit" type="submit" class="primary-btn">
                        Thêm vào giỏ hàng
                        </button>
                        </form>
                        <!-- end -->
                    </div>
                    </div>
                </div>
                <!-- Bình luận destop -->
                <div class="col-lg-12 danhgiadt">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item ">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">Mô tả chi tiết</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                    aria-selected="false">Đánh Giá</a>
                            </li>
                          
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Thông tin sản phẩm</h6>
                                    <p>BỘ SẢN PHẨM BAO GỒM
                                        1x Áo Thun LYOS Droplet - Màu Đen
                                        
                                        ĐẶC ĐIỂM NỔI BẬT
                                        
                                        Chất liệu: 100% Heavy cotton.
                                        
                                        Màu sắc: màu đen
                                        
                                        Xuất xứ: Việt Nam
                                        
                                        Chất vải Heavy Cotton mang những điểm mạnh tiêu biểu, thường được sử dụng trong các loại
                                         quần áo có thiên hướng cao cấp. Với đặc tính bền chặt của sợi vải, giúp cho quần áo được giữ form dáng tốt,
                                          độ bền cao trong suốt quá trình sử dụng mà không lo bị bai nhão hay biến dạng. Bên cạnh đó, với chất vải Heavy Cotton,
                                           quần áo sẽ luôn được giữ trong trạng thái hoàn hảo nhất, không lo về vấn đề bị nhăn, bị nhàu và bị biến dạng bởi các nếp gấp.
                                        
                                        QUY ĐỔI KÍCH THƯỚC
                                        
                                        SIZE: S/M/L/XL
                                        
                                        Thông số: ngang x dài:
                                        
                                        Hướng dẫn chọn size NAM
                                        
                                        - Size S: (56x74): 1m55 - 1m65, 45 - 55kg
                                        
                                        - Size M: (58x76): 1m60 - 1m72, 50 - 70kg
                                        
                                        - Size L: (60x78): 1m70 - 1m85, 60 - 95kg
                                        
                                        - Size XL: (62x80): 1m75 - 1m90, 65 - 100kg
                                        
                                        Hướng dẫn chọn size NỮ
                                        
                                        - Size S: (56x74): 1m50 - 1m65, 40 - 55kg
                                        
                                        - Size M: (58x76): 1m55 - 1m70, 50 - 65kg
                                        
                                        - Size L: (60x78): 1m65 - 1m80, 50 - 85kg
                                        
                                        - Size XL: (62x80): 1m70 - 1m85, 60 - 95kg
                                        
                                        Sai số: ± 2cm
                                        
                                        Bạn cao 180 cm - nặng 70Kg mặc size L (oversized).
                                        
                                        THÔNG TIN THƯƠNG HIỆU
                                        
                                        Với mục đích thoả mãn niềm đam mê của bản thân và chung tay cùng xây dựng cộng đồng 
                                        Streetwear Việt Nam, LYOS là cái tên được team chọn với ý nghĩa """"Lift-Your-Own-Style"""". 
                                        LYOS mong muốn đóng góp một phần nào đó hỗ trợ các bạn update tủ đồ và outfit theo chính phong 
                                        cách của các bạn. LYOS hướng tới phong cách tinh tế và một chút Hi-end, một chút nhấn nhá nhưng không 
                                        rườm rà, cầu kì. Nét vẽ mang hơi hướng hội hoạ phóng khoáng hơn, không thiêng về tả thực thường được xuất hiện
                                         trong các sản phẩm của LYOS để có thể thoả mãn mong muốn làm cho sản phẩm có chiều sâu hơi, cũng như có những câu chuyện giá
                                          trị đằng sau mỗi thiết kế."</p>
                                </div>
                            </div>

                            <!-- form binh luận  -->
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <div class="jumbotron">
                                        <div class="form-group">
                                            <label for="comment">Nhập Ý Kiến Của Bạn:</label>
                                            <textarea class="form-control" rows="5" id="comment"></textarea>
                                          </div>
                                        <div class="form-group">
                                            <label for="usr">Tên Của Bạn:</label>
                                            <input type="text" class="form-control" id="name">
                                          </div>
                                          <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input type="email" class="form-control" id="email">
                                          </div>
                                          <div class="checkbox">
                                            <label><input type="checkbox" value="">Lưu tên và Email của tôi vào trang web trong trình duyệt này cho lần bình luận kế tiếp của tôi.</label>
                                          </div>
                                          <button type="button" class="btn btn-success">Gửi Đi</button>
                                    </div>
                                </div>
                            </div>
                            <!-- end -->

                        </div>
                    </div>
                </div>
                <!-- bình luận destop end  -->

                 <!-- Bình luận mobile -->
                 <div class="col-lg-12 danhgiamb">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                Đánh Giá
                            </li>
                          
                        </ul>
                            <!-- form binh luận  -->
                            <div class="tab-pane">
                                <div class="product__details__tab__desc">
                                    <div class="jumbotron">
                                        <div class="form-group">
                                            <label for="comment">Nhập Ý Kiến Của Bạn:</label>
                                            <textarea class="form-control" rows="5" id="comment"></textarea>
                                          </div>
                                        <div class="form-group">
                                            <label for="usr">Tên Của Bạn:</label>
                                            <input type="text" class="form-control" id="name">
                                          </div>
                                          <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input type="email" class="form-control" id="email">
                                          </div>
                                          <div class="checkbox">
                                            <label><input type="checkbox" value="">Lưu tên và Email của tôi vào trang web trong trình duyệt này cho lần bình luận kế tiếp của tôi.</label>
                                          </div>
                                          <button type="button" class="btn btn-success">Gửi Đi</button>
                                    </div>
                                </div>
                            </div>
                            <!-- end -->

                        
                    </div>
                </div>
                <!-- bình luận destop end  -->

            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    <!-- sản phẩm liên quan -->
    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>Sản Phẩm Liên Quan</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="public/client/img/product/dg1.webp">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">LYOS Futu Logo T-Shirt ( Green )
                                </a></h6>
                            <h5>380,000₫</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="public/client/img/product/dg5.webp">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">LYOS Futu Logo T-Shirt ( Black )
                                </a></h6>
                            <h5>380,000₫</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="public/client/img/product/dg3.webp">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Basic Polo
                                </a></h6>
                            <h5>350,000₫</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="public/client/img/product/dg4.webp">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">5 Rams T-Shirt ( Black )
                              </a></h6>
                            <h5>  399,000₫</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sản phẩm liên quan end -->
