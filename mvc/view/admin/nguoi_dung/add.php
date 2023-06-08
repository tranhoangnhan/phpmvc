<h3>
  <?= $data['title'] ?>
</h3>
<form action="" method="post" enctype="multipart/form-data" method="POST">
  <table class="table table-bordered">
    <tr>
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
    <td><input class="form-control" type="text" name="ten_dang_nhap" ></td>
        <td><input class="form-control" type="text" name="mat_khau" ></td>
        <td><input class="form-control" type="text" name="email"></td>
        <td><input class="form-control" type="date" name="ngay_sinh"></td>
        <td><input class="form-control" type="text" name="dia_chi"></td>
        <td><input class="form-control" type="text" name="so_dien_thoai"></td>
        <td><input class="form-control" type="file" name="fileupload" id="fileupload"></td>
        <td><input class="form-control" type="text" name="trang_thai"></td>
        <td><input class="form-control" type="text" name="vai_tro" ></td>

    </tr>



  </table>
  <div class="botton">
    <button type="submit" class="btn btn-success" name="submit">Thêm mới</button>
    <button type="button" class="btn btn-success">Nhập Lại</button>

    <a href="nguoi_dung/show"><button type="button" class="btn btn-success">Danh Sách</button></a>
  </div>
</form>
