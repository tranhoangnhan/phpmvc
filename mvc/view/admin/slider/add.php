
<h3>
  <?= $data['title'] ?>
</h3>
<form action="" enctype="multipart/form-data" method="post">
  <table class="table table-bordered">

    <tr>
      <th>Mã slides</th>
      <th>Chọn ảnh</th>

    </tr>
    <tr>
      <td>Mã tự động thêm</td>
      <td><input class="form-control" type="file" name="fileupload" id="fileupload"></td>


    </tr>



  </table>
  <div class="botton">
    <button type="submit" class="btn btn-success" name="submit">Thêm mới</button>
   
    <a href="/mvcda1/slider/show"><button type="button" class="btn btn-success">Danh Sách</button></a>
  </div>
</form>
