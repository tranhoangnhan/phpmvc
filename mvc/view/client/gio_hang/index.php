
  <?php $giohang = (isset($_SESSION['giohang']))? $_SESSION['giohang'] : []; 

  ?>

  
  
                
                    <div class="col-lg-12 text-center">
                        <div class="breadcrumb__text">
                            <h2 style="color:black ;">Giỏ Hàng</h2>
                            <div class="breadcrumb__option">
                                <a href="./index.html">Trang Chủ</a>
                                <span>Chi Tiết</span>
                            </div>
                        </div>
                    </div>
           
            
        
        <!-- banner End -->
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- sản phẩm trong giỏ hàng -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    
                                    <th style="float: left;">Tên sản phẩm</th>
                                    <th>Hình ảnh</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th></th>
                                    <th>Tổng cộng</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- các sản phẩm  -->
                                <!-- sản phẩm 1 -->

               <?php 
                $tongthanhtoan = 0;
               foreach ($giohang as $key => $value): 
                currency_format($tongthanhtoan += $value ['gia'] * $value ['so_luong']);
               ?>
                                                    <form action="home/dathang" method="POST">

                                <tr>
                                    
                                <td class="shoping__cart__item">
                                        <h5 name="ten_sp"><?= $value ['ten_sp'] ?></h5>
                                    </td>
                                    <td>
                                        <img src="upload/<?= $value ['hinh_sp'] ?>" alt="" name="hinh_sp">
                                    </td>
                                    
                                    <td class="shoping__cart__price">
                                        <p name="gia_km"><del style="color: red;" name="gia">  <?= currency_format($value ['gia_goc'])   ?></del>  <?= currency_format($value ['gia'])   ?></p>
                                      
                                    </td>
                                    <!-- <td class="shoping__cart__price"><?= $value['size'] ?></td> -->
                                    <td class="shoping__cart__quantity">
                                                <label for="" name="so_luong_gio"><?= $value ['so_luong'] ?></label>
                                                <!-- <input type="number" disabled  name="so_luong_gio" value="<?= $value ['so_luong'] ?>"> -->
                                                <input type="hidden" name="ma_sp" value=" <?= $chi_tiet['ma_sp'] ?>">
                                            <td shoping__cart__price>
                                    <!-- <button class="btn btn-info" style="width:100px ;" type="submit" name="submit2">Cập nhật</button> -->
                                    </td>

                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                    <?= currency_format($value ['gia'] * $value ['so_luong'])  ?>
                                    </td>
                                    <td class="shoping__cart__item__close">
                                      <a href="home/xoagio/<?=$value ['ma_sp']?>"><span class="icon_close"></span></a>  
                                    </td>
                                </tr>
                                <!-- end san phẩm 1  -->
                               
                            <?php endforeach ?>
                                <!-- end các sản phẩm  -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                     
                        
                    </div>
                    <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5></h5>
                        <ul>
                            <li>Tổng cộng <span><?= currency_format($tongthanhtoan) ?></span></li>
                        </ul>
                        <?php  
                            if(isset($_SESSION['user'])) {
                                echo '
                                <button type="submit" class="primary-btn" name="submit">Thanh Toán</button>
                               
                                ';
                            } else {
                                echo 'Vui lòng  <a href="login/"> đăng  nhập </a> để tiếp tục';
                            }
                        
                        ?>
                        
                    </div>
                </div>
                    </form>
                    <!-- <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Cập nhật giỏ hàng</a> -->
                </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Mã giảm giá</h5>
                            <form action="#">
                                <input type="text" placeholder="Nhập mã giảm giá">
                                <button type="button" class="site-btn" onclick="alert('Mã giảm giá hiện không khả dụng')">Áp dụng</button>
                            </form>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->
