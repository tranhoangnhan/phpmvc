
<!-- form dang nhap -->
<div class="container">
    <h3 style="text-align: center;">Đặt lại mật khẩu</h3>
    <p style="text-align: center;">Nhập email để đặt lại mật khẩu </p>
    
    <!-- điền thông tin đăng kí  -->
    <form class="dnmb"  action="" method="POST">
          <div class="form-group">
            <input type="email"placeholder="Nhập Email" name="email" class="form-control form-control-lg" id="email">
          </div>
      <!-- end điền thông tin -->
    <?= $data['thong_bao'] ?>

      <!-- button dang kí  -->
      <div class="row">
     <button  type="submit" name="quen_mk" class="btn btn-dark ">Lấy lại tài khoản</button>
</form>
    </div>
      <!-- end button  -->

      <!-- đăng nhâp  -->
      <div class="row">
        <a class="qmk" href="dangnhap.html"> Quay lại</a>  
      </div>
      <!-- end dăng nhap -->
</div>
   <!-- end form dang nhap  -->
