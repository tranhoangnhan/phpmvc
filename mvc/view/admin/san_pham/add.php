<h3>
  <?= $data['title'] ?>

</h3>
<?= $data['thong_bao'] ?>

<form action="" enctype="multipart/form-data" method="POST">
  <table class="table table-bordered">
    <tr>
      <th>Tên sản phẩm</th>
      <th>Gía</th>
      <th>Gía khuyến mãi</th>
      <th>Số lượng</th>
      <th>Hình sản phẩm</th>
      <th>Loại</th>
      <th>Ngày nhập</th>
      <th>Mô tả</th>

    </tr>
    <tr>
      <td><input class="form-control" type="text" name="ten_sp" min="0"></td>
      <td><input class="form-control" type="number" name="gia" min="0"></td>
      <td><input class="form-control" type="number" name="gia_km" min="0"></td>
      <td><input class="form-control" type="number" name="so_luong" min="1"></td>

      <td><input class="form-control" type="file" name="fileupload" id="fileupload"></td>
      <td>
      <select name="ma_loai" id="">
          <?php while($loai = mysqli_fetch_array($data["loai"])) { ?>
          <option value="<?php echo $loai['ma_loai']; ?>">
          <?php echo $loai['ten_loai']; ?>
            </option>
            <?php  } ?>
          </select> 

      </td>
      <td><input class="form-control" type="date" name="ngay_nhap"></td>
      <td><input class="form-control" type="text" name="mo_ta"></td>


    </tr>



  </table>
  <div class="botton">
    <button type="submit" class="btn btn-success" name="submit">Thêm mới</button>
    <button type="button" class="btn btn-success">Nhập Lại</button>

    <a href="/mvcda1/san_pham/show"><button type="button" class="btn btn-success">Danh Sách</button></a>
  </div>
</form>
