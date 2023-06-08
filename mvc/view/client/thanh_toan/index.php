
  <?php $giohang = (isset($_SESSION['giohang']))? $_SESSION['giohang'] : []; 

?>
    <div class="col-lg-12 text-center">
        <div class="breadcrumb__text">
            <h2>Thanh Toán</h2>
            <div class="breadcrumb__option">
                <a href="./index.html">Trang Chủ</a>
                <span>Chi Tiết</span>
            </div>
        </div>
    </div>

    <!-- Thông tin thanh toán -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
               <hr>
                <form action="home/xulidathang/"method="POST">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="checkout__input">
                                        <p>Tên khách hàng<span>*</span></p>
                                        <input type="text" name="ten_kh">
                                    </div>
                                </div>
                            
                            </div>
                            <div class="checkout__input">
                                <p>Địa chỉ<span>*</span></p>
                                <input type="text"name="dia_chi" placeholder="Số nhà,Đường" class="checkout__input__add">
                               
                            </div>
                            
                           
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Số Điện Thoại<span>*</span></p>
                                        <input type="number"name="so_dien_thoai">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="email"name="email">
                                    </div>
                                </div>
                            </div>
                          
                         
                        </div>
                      
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Đơn của bạn</h4>
                                <div class="checkout__order__products">Các sản phẩm <span>Tổng cộng</span></div>
                                <?php 
                      $tongthanhtoan = 0;

                          foreach ($giohang as $key => $value): 
                            currency_format($tongthanhtoan += $value ['gia'] * $value ['so_luong']);
                           ?>
                        
                                <ul>
                                    <li><img style="width: 50px;" src="upload/<?= $value['hinh_sp'] ?>" alt=""><?= $value['ten_sp'] ?>  x <?= $value['so_luong'] ?>
                                    
                                    <span><?= currency_format($value ['gia'] * $value ['so_luong']) ?></span></li>
                                    
                                </ul>
                             
                                <div class="checkout__input__checkbox">
                                  
                                </div>

                                <?php endforeach ?>
                                <div class="checkout__order__total">Tổng cộng <span><?= currency_format($tongthanhtoan) ?></span></div>

                                <p>Cảm ơn bạn đã tin tưởng chúng tôi, chúng tôi rất mong được phục vụ các bạn.</p>
                               
                                <button type="submit"name="submit" class="site-btn">ĐẶT HÀNG</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- end thong tin thanh toán -->

   