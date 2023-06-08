
<h3>
  <?= $data['title'] ?>
</h3>

<table class="table table-bordered">
      <tr>
        <th><input type="checkbox" id="check-all" class="flat"></th>
        <th>Mã SP</th>
    <th>Tên sản phẩm</th>
      <th>Gía</th>
      <th>Gía khuyến mãi</th>
      <th>Hình sản phẩm</th>
      <th>Số lượng</th>
      <th>Mã loại</th>
      <th>Ngày nhập</th>
      <th>Mô tả</th>
      
      <th>Chức năng</th>
      </tr>

    <?php while ($san_pham = mysqli_fetch_array($data["san_pham"])) { ?>
   
      <tr>
        <td><input type="checkbox" name="" id="" value = "<?= $san_pham['ma_sp'] ?>"></td>
        <td><?= $san_pham['ma_sp'] ?></td>
        <td><?= $san_pham['ten_sp'] ?></td>
        <td><?= currency_format($san_pham['gia']) ?></td>
        <td><?= currency_format($san_pham['gia_km']) ?></td>
        <td><img src="./upload/<?= $san_pham['hinh_sp'] ?>" alt=""></td>  
        <td><a href="san_pham/thongke"><?= $san_pham['so_luong'] ?></a></td>
        <td> 
        <?= $san_pham['ten_loai'] ?>
      </td>
        <td><?= $san_pham['ngay_nhap'] ?></td>
        <td><?= $san_pham['mo_ta'] ?></td>






       
        <td><a href="san_pham/edit/<?php echo $san_pham["ma_sp"]?>"><button type="button" class="btn btn-success">Sửa</button> </a>|
        <a href="san_pham/delete/<?= $san_pham['ma_sp'] ?>"> <button type="button" class="btn btn-danger">Xóa</button></a> |
        <a href="san_pham/insertct/<?= $san_pham['ma_sp'] ?>"> <button type="button" class="btn btn-info">Hình chi tiết</button></a>

      </td>
      </tr>
      <?php  } ?>   

      
    </table>
    <div class="botton">
<a href="san_pham/insert"><button type="button" class="btn btn-success">Thêm Mới</button></a>
</div>