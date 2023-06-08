
   <h3>
  <?= $data['title'] ?>
</h3>
<?php while($sp = mysqli_fetch_array($data["edit"])) {?>
  
<form action="san_pham/update/<?php echo $sp['ma_sp']; ?>" enctype="multipart/form-data" method="POST">
   <table class="table table-bordered">
    <tr>
    <th>Mã SP</th>
    <th>Tên sản phẩm</th>
      <th>Gía</th>
      <th>Gía khuyến mãi</th>
      <th>Số lượng</th>
      <th>Hình sản phẩm</th>
      <th>Mã loại</th>
      <th>Ngày nhập</th>
      <th>Mô tả</th>
      </tr>
      <tr>
      <td><input class="form-control" type="text" name="ma_sp" value="<?php echo $sp["ma_sp"]?>" disabled></td>
        <td><input class="form-control" type="text" name="ten_sp" value="<?php echo $sp["ten_sp"]?>" ></td>
        <td><input class="form-control" type="text" name="gia" value="<?php echo $sp["gia"]?>"></td>
        <td><input class="form-control" type="text" name="gia_km" value="<?php echo $sp["gia_km"]?>"></td>
        <td><input class="form-control" type="text" name="so_luong" value="<?php echo $sp["so_luong"]?>"></td>

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
        <td><input class="form-control" type="text" name="ngay_nhap" value="<?php echo $sp["ngay_nhap"]?>"></td>
        <td><input class="form-control" type="text" name="mo_ta" value="<?php echo $sp["mo_ta"]?>"></td>
       
      </td>
      </tr>

    
      
    </table>
   
    <div class="botton">
    <button type="submit" class="btn btn-success" name="submit">Cập nhật</button>
        <button type="button" class="btn btn-success">Nhập Lại</button>
<a href="san_pham/show"><button type="button" class="btn btn-success">Danh Sách</button></a>

</div>
</form>
    <?php } ?>
   
  
