<h3>
  <?= $data['title'] ?>
</h3>

<table class="table table-bordered">
      <tr>
        <th><input type="checkbox" id="check-all" class="flat"></th>
        <th>Mã Slider</th>
      <th >Hình ảnh</th>
      <th>Trạng thái</th>
      
    
      <th>Chức năng</th>
      </tr>

    <?php while ($slider = mysqli_fetch_array($data["slider"])) { ?>
   
      <tr>
        <td><input type="checkbox" name="" id="" value = ">"></td>
        <td><?= $slider['ma_slider'] ?></td>
        <td ><img class="w-100 h-auto" src="upload/<?= $slider['hinh_anh'] ?>" alt=""></td>
      <td>
        <form  action="" method="POST">
          <?php 
            if ( $slider['trang_thai'] == 0 ) {
              echo '
          <option value="0">Ẩn</option>

          ';
            } else echo '
          <option value="1">Hiện</option>

            
            '
          ?>
      </td>
       
      <td>    
      <a href="slider/edit/<?= $slider['ma_slider'] ?>"> <button type="button"class="btn btn-success">Sửa trạng thái</button></a>
      <a href="slider/delete/<?= $slider['ma_slider'] ?>"> <button type="button" class="btn btn-danger">Xóa</button></a>

</td>
</form>
      </tr>
      <?php  } ?>   

      
    </table>
    <div class="botton">
      <button  type="submit" name="" class="btn btn-success"><a style="color: black;" href="slider/add">Thêm mới</a></button>
</div>
<br>