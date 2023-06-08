

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
                <form action="home/xulidathang" method="POST">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                            <div class="col-lg-6">
                                 
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Họ tên<span>*</span></p>
                                        <input type="text" name="ten_kh">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                                                <p>Địa chỉ<span>*</span></p>
                                        <input type="text" name="dia_chi">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Số điện thoại<span>*</span></p>
                                <input type="text" name="so_dien_thoai">
                            </div>
                            
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text" name="email">
                                    </div>
                                </div>
                            </div>
                           
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Đơn của bạn</h4>
                                <div class="checkout__order__products">Các sản phẩm <span>Tổng cộng</span></div>
                                <ul>
                                    <li>Vegetable’s Package <span>$75.99</span></li>
                                    <li>Fresh Vegetable <span>$151.99</span></li>
                                    <li>Organic Bananas <span>$53.99</span></li>
                                </ul>
                                <div class="checkout__order__subtotal">Tạm tính <span>$750.99</span></div>
                                <div class="checkout__order__total">Tổng cộng <span>$750.99</span></div>
                                <div class="checkout__input__checkbox">
                                    <label for="acc-or">
                                        Tạo một tài khoản?
                                        <input type="checkbox" id="acc-or">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <p>Cảm ơn bạn đã tin tưởng chúng tôi, chúng tôi rất mong được phục vụ các bạn.</p>
                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                       Thanh toán trực tiếp
                                        <input type="checkbox" id="payment">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="paypal">
                                        Paypal
                                        <input type="checkbox" id="paypal">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <button type="submit" class="site-btn" name="submit">ĐẶT HÀNG</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- end thong tin thanh toán -->
