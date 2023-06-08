
<!-- form dang kí -->
<div class="container">
    <h3 style="text-align: center;">Đổi thông tin</h3>
    <p style="text-align: center;">Đổi thông tin của bạn</p>
<?= $tai_khoan =mysqli_fetch_array($data["tai_khoan"]);?>
   
    <!-- điền thông tin đăng kí  -->
    <form action="" enctype="multipart/form-data" method="POST">
        <div  class="form-group">
          <label for="tendn">Tên đăng nhập :</label>
          <input type="tendn"placeholder="Nhập tên đăng nhập" name="ten_dang_nhap" disabled class="form-control form-control-lg" id="tendn" value="<?=$tai_khoan['ten_dang_nhap']?>">
        </div>
       
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email"placeholder="Nhập Email" name="email" class="form-control form-control-lg" id="email" value="<?=$tai_khoan['email']?>">
          </div>
          <div class="form-group">
            <label for="ns">Ngày sinh:</label>
            <input type="date"placeholder="Ngày sinh" name="ngay_sinh" class="form-control form-control-lg" id="ns" value="<?=$tai_khoan['ngay_sinh']?>">
          </div>
           <div class="form-group">
            <label for="dc">Địa chỉ:</label>
            <input type="dc"placeholder="Địa chỉ" name="dia_chi" class="form-control form-control-lg" id="dc" value="<?=$tai_khoan['dia_chi']?>">
          </div>
        <div class="form-group">
            <label for="dt">Số Điện Thoại:</label>
            <input type="dt"placeholder="Số Điện Thoại" name="so_dien_thoai" class="form-control form-control-lg" id="dt" value="<?=$tai_khoan['so_dien_thoai']?>">
          </div>

          <div class="form-group">
            <label for="dt">Ảnh đại diện:</label>
            <input class="form-control" type="file"  name="fileupload" id="fileupload" ><?=$tai_khoan['hinh_anh']?>
          </div>
          
          
      <!-- end điền thông tin -->
    <?= $data['thong_bao'] ?>
      <!-- button dang kí  -->
      <div class="row">
      <button  type="submit" name="capnhat" class="btn btn-dark ">Cập nhật</button>
      </div>
    </form>
    </div>
      <!-- end button  -->
<br>
     

   <!-- end form dang nhap  -->
