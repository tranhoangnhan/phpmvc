
   <h3>
  <?= $data['title'] ?>
</h3>
<?php while($nguoi_dung = mysqli_fetch_array($data["edit"])) {?>
  
<form action="nguoi_dung/update/<?php echo $nguoi_dung['id']; ?>" enctype="multipart/form-data" method="POST">
   <table class="table table-bordered">
    <tr>
    <th>ID</th>
      <th>Tên đăng nhập</th>
      <th>Mật khẩu</th>
      <th>Email</th>
      <th>Ngày sinh</th>
      <th>Địa chỉ</th>
      <th>Số điện thoại</th>
      <th>Hình ảnh</th>
      <th>Trạng thái</th>
      <th>Vai trò</th>
    
      </tr>
      <tr>
      <td><input class="form-control" type="text" name="id" value="<?php echo $nguoi_dung["id"]?>" disabled></td>
        <td><input class="form-control" type="text" name="ten_dang_nhap" value="<?php echo $nguoi_dung["ten_dang_nhap"]?>" ></td>
        <td><input class="form-control" type="text" name="mat_khau" value="<?php echo $nguoi_dung["mat_khau"]?>"></td>
        <td><input class="form-control" type="text" name="email" value="<?php echo $nguoi_dung["email"]?>"></td>
        <td><input class="form-control" type="text" name="ngay_sinh" value="<?php echo $nguoi_dung["ngay_sinh"]?>"></td>
        <td><input class="form-control" type="text" name="dia_chi" value="<?php echo $nguoi_dung["dia_chi"]?>"></td>
        <td><input class="form-control" type="text" name="so_dien_thoai" value="<?php echo $nguoi_dung["so_dien_thoai"]?>"></td>
        <td><input class="form-control" type="file" name="fileupload" id="fileupload"></td>
        <td><select name="trang_thai" id="">
         <option value="0">Chưa kích hoạt</option>

          <option value="1">Đang kích hoạt</option>
        </select></td>
        <td> <select name="vai_tro" id="">
          <option value="0">Người dùng</option>
          <option value="1">Admin</option>
        </select>
      </td>


       


      </tr>

    
      
    </table>
   
    <div class="botton">
    <button type="submit" class="btn btn-success" name="submit">Cập nhật</button>
        <button type="button" class="btn btn-success">Nhập Lại</button>
<a href="nguoi_dung/show"><button type="button" class="btn btn-success">Danh Sách</button></a>

</div>
</form>
    <?php } ?>
   
  
