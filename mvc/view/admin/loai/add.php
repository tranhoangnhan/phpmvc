<h3>
  <?= $data['title'] ?>
</h3>
<form action="" method="post">
  <table class="table table-bordered">

    <tr>
      <th>Mã loại hàng</th>
      <th>Tên loại hàng</th>

    </tr>
    <tr>
      <td>Mã loại tự động thêm</td>
      <td><input class="form-control" type="text" name="ten_loai">
  <?= $data['thong_bao'] ?>
    
    </td>


    </tr>



  </table>
  <div class="botton">
    <button type="submit" class="btn btn-success" name="submit">Thêm mới</button>
    <button type="button" class="btn btn-success">Nhập Lại</button>

    <a href="/mvcda1/loai/show"><button type="button" class="btn btn-success">Danh Sách</button></a>
  </div>
</form>
