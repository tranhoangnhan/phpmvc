
<!-- form dang nhap -->
<div class="container">
    <h3 style="text-align: center;">Đặt lại mật khẩu</h3>
    <p style="text-align: center;">Mật khẩu mới </p>
   
    <!-- điền thông tin đăng kí  -->
    <form class="dnmb"  action="" method="POST">
        <div class="form-group">
            <label for="pwd">Mật Khẩu Mới:</label>
            <input type="password"placeholder="Nhập mật khẩu mới" name="mat_khau" class="form-control form-control-lg" id="pwd">
          </div>

          <div class="form-group">
            <label for="pwd">Nhập Lại Mật Khẩu:</label>
            <input type="password"placeholder="Nhập Lại mật khẩu mới" name="re_mat_khau" class="form-control form-control-lg" id="pwd">
          </div>
      <!-- end điền thông tin -->
    <?= $data['thong_bao']?>
      <!-- button dang kí  -->
      <div class="row">
   <button  type="submit" name="doi_mk" class="btn btn-dark ">Đổi mật khẩu mới</button>
</form>
    </div>
      <!-- end button  -->

      <!-- đăng nhâp  -->
      <div class="row">
        <a class="qmk" href="#"> Quay lại</a>  
      </div>
      <!-- end dăng nhap -->
</div>
   <!-- end form dang nhap  -->
