
   <h3>
  <?= $data['title'] ?>
</h3>
<?php while($loai = mysqli_fetch_array($data["edit"])) {?>
<form action="loai/update/<?php echo $loai['ma_loai']; ?>" method="post">
   <table class="table table-dark table-striped">
    <tr>
      <th>Mã loại</th>
      <th>Tên hiện tại</th>
      <th>Tên mới</th>
    
      </tr>
      <tr>
        <td><input class="form-control" type="text" name="ma_loai" value="<?php echo $loai["ma_loai"]?>" disabled></td>
        <td><input class="form-control" type="text" name="ten_loai_cu" value="<?php echo $loai["ten_loai"]?>" disabled></td>
        <td><input class="form-control" type="text" name="ten_loai" >
  <?= $data['thong_bao'] ?>
      
      </td>

       
      </td>
      </tr>

    
      
    </table>
   
    <div class="botton">
    <button type="submit" class="btn btn-success" name="submit">Cập nhật</button>
        <button type="button" class="btn btn-success">Nhập Lại</button>
<a href="?ctl=loai&act=ds_admin"><button type="button" class="btn btn-success">Danh Sách</button></a>

</div>
</form>
    <?php } ?>
   
  
