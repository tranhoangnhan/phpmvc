<h3>
  <?= $data['title'] ?>
</h3>

<table class="table table-bordered">
      <tr>
        <th><input type="checkbox" id="check-all" class="flat"></th>
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
      
      <th>Chức năng</th>
      </tr>

    <?php while ($nguoi_dung = mysqli_fetch_array($data["nguoi_dung"])) { ?>
   
      <tr>
        <td><input type="checkbox" name="" id=""></td>
        <td><?= $nguoi_dung['id'] ?></td>
        <td><?= $nguoi_dung['ten_dang_nhap'] ?></td>
        <td><?= $nguoi_dung['mat_khau'] ?></td>
        <td><?= $nguoi_dung['email'] ?></td>
        <td><?= $nguoi_dung['ngay_sinh'] ?></td>
        <td><?= $nguoi_dung['dia_chi'] ?></td>
        <td><?= $nguoi_dung['so_dien_thoai'] ?></td>
        <td><img src="./upload/<?= $nguoi_dung['hinh_anh'] ?>" alt=""></td>  
        <td><?= $nguoi_dung['trang_thai'] ?></td>
        <td><?= $nguoi_dung['vai_tro'] ?></td>









      





       
        <td><a href="nguoi_dung/edit/<?php echo $nguoi_dung["id"]?>"><button type="button" class="btn btn-success">Sửa</button> </a>|
        <a href="nguoi_dung/delete/<?php echo $nguoi_dung["id"]?>"> <button type="button" class="btn btn-danger">Xóa</button></a></td>
      </tr>
      <?php  } ?>   

      
    </table>
    <div class="botton">
<a href="nguoi_dung/insert"><button type="button" class="btn btn-success">Thêm Mới</button></a>
</div>