

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                    <!-- tìm kiếm  -->
                    <div style="width: 100%;" class="hero__search">
                        <div style="width: 100%;" class="hero__search__form">
                            <form action="#">
                                <div style="width: 15%;" class="hero__search__categories">
                                   Các danh mục
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="Bạn cần tìm gì ?">
                                <button type="submit" class="site-btn">Tìm Kiếm</button>
                            </form>
                        </div>
                    </div>
                    <!-- end tìm kiếm  -->
                  
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->



<!-- form dang kí -->
<div class="container">
    <h3 style="text-align: center;">Đổi thông tin</h3>
    <p style="text-align: center;">Đổi thông tin của bạn</p>
   
    <!-- điền thông tin đăng kí  -->
    <form class="dnmb"  action="" method="POST">
        <div class="form-group">
            <label for="pwd">Mật khẩu cũ:</label>
            <input type="password"placeholder="Nhập mật khẩu"name="mat_khau" class="form-control form-control-lg" id="pwd">
          </div>

          <div class="form-group">
            <label for="pwd">Mật khẩu mới:</label>
            <input type="password"placeholder="Nhập mật khẩu" name="mat_khau_moi" class="form-control form-control-lg" id="pwd">
          </div>

          <div class="form-group">
            <label for="pwd">Xác nhận mật khẩu:</label>
            <input type="password"placeholder="Nhập mật khẩu" name="re_mat_khau_moi" class="form-control form-control-lg" id="pwd">
          </div>
          
          
      <!-- end điền thông tin -->
    <?= $data['thong_bao']?>
      <!-- button dang kí  -->
      <div class="row">
      <button  type="submit" name="doimatkhau" class="btn btn-dark ">Cập nhật</button>
      </div>
    </form>
    </div>
      <!-- end button  -->
<br>
     

   <!-- end form dang nhap  -->

