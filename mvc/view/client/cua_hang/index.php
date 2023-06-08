
    <!-- Hero Section End -->

    <!-- Product Section Begin -->
    
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <!-- danh mục sản phẩm -->
                        <div class="sidebar__item danhmucmb" >
                            <h4>Danh Mục Sản Phẩm</h4>
                            <ul>
                                <?php while ($loai = mysqli_fetch_array($data["loai"])) { ?>
                                    <li><a href="home/cua_hang&act=<?=$loai['ma_loai']?>"><?= $loai['ten_loai'] ?></a></li>

                                            <?php } ?>
                            </ul>
                        </div>
                        <!-- end -->

                        
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <!-- sản phẩm giảm giá -->
                    <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>Giảm Giá</h2>
                        </div>
                        <div class="row">
                            <div class="product__discount__slider owl-carousel">
                                <!-- sản phẩm -->
                                <?php while ($san_pham = mysqli_fetch_array($data["san_pham"])) { ?>

                                <div class="col-6 col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="upload/<?= $san_pham['hinh_sp'] ?>">
                                            <div class="product__discount__percent"><?=round( 100 - round(($san_pham['gia_km'] * 100 / $san_pham['gia']))) ?>%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="home/addgiohang/<?= $san_pham['ma_sp'] ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                           
                                            <h5><a href="home/chitiet/<?= $san_pham['ma_sp'] ?>"><?= $san_pham['ten_sp'] ?>
                                                </a></h5>
                                            <div class="product__item__price"><?= currency_format($san_pham['gia']) ?><span><?= currency_format($san_pham['gia_km']) ?> </span></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end -->
                                <?php } ?>
                              
                                <!-- end -->

                            </div>
                        </div>
                    </div>
                    <!-- end -->

                   

                    
                </div>
            </div>
        </div>
    
    <!-- xem thêm trang end -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-5">

                
<!-- chọn lọc  -->
<div class="filter__item" >
    <div class="section-title product__discount__title "style="text-align: center;">
        <h2 >Các sản phẩm</h2>
    </div>
    <div class="row">

        
        <div class="col-lg-4 col-md-3">
            <div class="filter__sort">
                <span>Sắp Xếp Theo</span>
                <select>
                    <option value="0">Mặt Định</option>
                    <option value="0">Mới Nhất</option>
                    <option value="0">Cũ Nhất</option>
                   
                </select>
            </div>
        </div>
        <div class="col-lg-4 col-md-3">
            <div class="filter__found">
                <h6><span>16</span> Sản Phẩm Được Tìm Thấy</h6>
            </div>
        </div>
       <!-- thanh chọn giá -->

       <div class="col-lg-4 col-md-3" >
        <div class="filter__sort" >
            <span>Sắp Xếp Giá</span>
            <select>
                <option value="0">Mặt Định</option>
                <option value="0">Dưới 500 ngàn</option>
                <option value="0">Trên 500 ngàn</option>
                <option value="0">Trên 1 triệu</option>
               
            </select>
        </div>
</div>
    <!-- end -->
    </div>
</div>
<!-- chọn lọc end  -->

<!-- mục sản phẩm -->
<div class="row">
    <!-- san pham -->
    <?php while ($san_pham = mysqli_fetch_array($data["san_pham2"])) { ?>

    <div class="col-6 col-lg-3 col-md-6 col-xs-6">
        <div class="product__item">
            <div class="product__item__pic set-bg" data-setbg="upload/<?= $san_pham['hinh_sp'] ?>">
                <ul class="product__item__pic__hover">
                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                    <li><a href="home/addgiohang/<?= $san_pham['ma_sp'] ?>"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <div class="product__item__text">
                <h6><a href="home/chitiet/<?= $san_pham['ma_sp'] ?>"><?= $san_pham['ten_sp'] ?>
                    </a></h6>
                <h5><?= currency_format($san_pham['gia_km']) ?></h5>
            </div>
        </div>
    </div>
    <?php } ?>
    <!-- end -->
</div>

  <!-- Xem thêm trang  -->
  <div class="product__pagination">
    <a href="#">1</a>
    <a href="#">2</a>
    <a href="#">3</a>
    <a href="#"><i class="fa fa-long-arrow-right"></i></a>
</div>
  <!-- mục sản phẩm end  -->
            </div>
        </div>
    </div>
<br>