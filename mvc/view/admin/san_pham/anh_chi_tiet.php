<?php $san_pham = mysqli_fetch_array($data["show"]) ?>
  <h2>Bạn đang thêm mới ảnh chi tiết cho sản phẩm: <span style="color:red ;"><?= $san_pham['ten_sp'] ?></span></h2>
  <img style="width: auto; height: 250px;" src="upload/<?= $san_pham['hinh_sp'] ?>" alt="">
  <h2>Ảnh đang có</h2>
  <?php 
    while  ($show = mysqli_fetch_array($data["showanh"])) {
        
  ?> 
  <img style="width: auto; height: 100px;" src="upload/<?= $show['anh_chi_tiet'] ?>" alt="">
  <button style="background-color: red;" class="btn btn-success"><a style="color: black;" href="san_pham/deleteanh/<?=$show['anh']?>">Xóa</a></button>



  <?php } ?>





  <h2>Up nhiều ảnh bằng cách chọn nhiều file một lượt </h2>



<form action="" enctype="multipart/form-data" method="POST">
<input class="form-control" type="file" name="fileupload[]" id="fileupload" multiple="multiple">
<br>
<button  type="submit" class="btn btn-success " name="submit">Xác nhận thêm ảnh</button>

</form>
<br>