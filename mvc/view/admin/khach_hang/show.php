<h3>
  <?= $data['title'] ?>
</h3>

<table class="table table-bordered">
      <tr>
        <th><input type="checkbox" id="check-all" class="flat"></th>
        <th>Mã KH</th>
    <th>ID tài khoản</th>
      <th>Tên khách hàng</th>
      <th>Địa chỉ</th>
      <th>Số điện thoại</th>
    
      <th>Chức năng</th>
      </tr>

    <?php while ($khach_hang = mysqli_fetch_array($data["khach_hang"])) { ?>
   
      <tr>
        <td><input type="checkbox" name="" id="" value = ">"></td>
        <td><?= $khach_hang['ma_kh'] ?></td>
        <td><?= $khach_hang['id'] ?></td>
        <td><?= $khach_hang['ten_kh'] ?></td>
        <td><?= $khach_hang['dia_chi'] ?></td>
        <td><?= $khach_hang['so_dien_thoai'] ?></td>
       
      <td>        <a href="skhach_hang/delete/<?= $khach_hang['ma_kh'] ?>"> <button type="button" class="btn btn-danger">Xóa</button></a></td>
</td>

      </tr>
      <?php  } ?>   

      
    </table>
    <div class="botton">
</div>