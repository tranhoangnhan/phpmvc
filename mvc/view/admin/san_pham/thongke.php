<h3>
  <?= $data['title'] ?>
</h3>

<table class="table table-bordered">
      <tr>
        <th><input type="checkbox" id="check-all" class="flat"></th>
        <th>Mã SP</th>
    <th>Tên sản phẩm</th>
      <th>Số lượng có</th>
      <th>Số lượng đã bán</th>
      <th>Còn lại</th>
      
      
      </tr>

    <?php while ($san_pham = mysqli_fetch_array($data["san_pham"])) { ?>
        <?php $thongke =mysqli_fetch_array($data["thongke"]) ?>
      <tr>
        <td><input type="checkbox" name="" id="" value = "<?= $san_pham['ma_sp'] ?>"></td>
        <td><?= $san_pham['ma_sp'] ?></td>
        <td><?= $san_pham['ten_sp'] ?></td>
      
        <td><?= $san_pham['so_luong'] ?></td>
      
        <td>  <?php if(!isset($thongke['da_ban'])) {
        echo $daban = 0;
        } else {
         echo $daban = $thongke['da_ban'];
        } ?></td>

        <td><?=
         
        
        $san_pham['so_luong'] - $daban

        
       ?></td>






       
        
      </tr>
      <?php  }  ?>   

      
    </table>
    <div class="botton">
</div>