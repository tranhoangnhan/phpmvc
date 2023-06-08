<h3>
  <?= $data['title'] ?>
</h3>

<table class="table table-bordered">
      <tr>
        <th><input type="checkbox" id="check-all" class="flat"></th>
      <th>Mã loại hàng</th>
      <th>Tên loại hàng</th>
      
      <th>Chức năng</th>
      </tr>

    <?php while ($loai = mysqli_fetch_array($data["loai"])) { ?>
   
      <tr>
        <td><input type="checkbox" name="" id="" value = "<?= $loai['ma_loai'] ?>"></td>
        <td><?= $loai['ma_loai'] ?></td>
        <td><?= $loai['ten_loai'] ?></td>
        
       
        <td><a href="loai/edit/<?php echo $loai["ma_loai"]?>"><button type="button" class="btn btn-success">Sửa</button> </a>|
        <a href="loai/delete/<?= $loai['ma_loai'] ?>"> <buttontype="button" class="btn btn-danger">Xóa</button></a></td>
      </tr>
      <?php  } ?>   

      
    </table>
    <div class="botton">
<a href=" loai/insert"><button type="button" class="btn btn-success">Thêm Mới</button></a>
</div>