
<h3>
  <?= $data['title'] ?>
</h3>
<form action="" enctype="multipart/form-data" method="post">
  <table class="table table-bordered">

    <tr>
      <th>Mã slides</th>
      <th>Hình ảnh</th>
      <th>Trạng thái</th>

    </tr>
    <?php $slider = mysqli_fetch_array($data["slider"]) ?>

    <tr>
      <td><?= $slider['ma_slider']  ?></td>
      <td><img class="w-100 h-auto"  src="upload/<?= $slider['hinh_anh'] ?>" alt=""></td>
      <td>
      <select name="trang_thai" id=""  class="custom-select mr-sm-2" id="inlineFormCustomSelect">
          <?php 
            if ( $slider['trang_thai'] == 0 ) {
              echo '
          <option value="0">Ẩn</option>
          <option value="1">Hiện</option>

          ';
            } else echo '
          <option value="1">Hiện</option>
          <option value="0">Ẩn</option>

            
            '
          ?>
        </select>
      </td>


    </tr>



  </table>
  <div class="botton">
    <button type="submit" class="btn btn-success" name="submit">Cập nhật</button>
   
    <a href="/mvcda1/slider/update"><button type="button" class="btn btn-success">Danh Sách</button></a>
  </div>
</form>
