<h3>
  <?= $data['title'] ?>
</h3>

<table class="table table-bordered">
      <tr>
        <th><input type="checkbox" id="check-all" class="flat"></th>
        <th>Mã HD</th>
      <th>Mã khách hàng</th>
      <th>Tài khoản đặt mua</th>
      <th>Tên khách hàng</th>
      <th>Địa chỉ</th>
      <th>Email</th>
      <th>Số điện thoại</th>
    
      <th>Chức năng</th>
      </tr>

    <?php while ($hoa_don = mysqli_fetch_array($data["hoa_don"])) { ?>
   
      <tr>
        <td><input type="checkbox" name="" id="" value = ">"></td>
        <td><?= $hoa_don['ma_hd'] ?></td>
        <td><?= $hoa_don['ma_kh'] ?></td>

        <td> 
          <?php echo $hoa_don['ten_dang_nhap']; ?>
           </td>  
                 <td><?= $hoa_don['ten_kh'] ?></td>
                 <td> 
         
          <?php echo $hoa_don['dia_chi']; ?>
           </td> 

           <td><?= $hoa_don['email'] ?></td>

           <td> 
           <?php echo $hoa_don['so_dien_thoai']; ?>

           </td> 
       
      <td>    
      <a href="hoa_don/delete/<?= $hoa_don['ma_hd'] ?>"> <button type="button" class="btn btn-danger">Xóa</button></a></td>
</td>

      </tr>
      <?php  } ?>   

      
    </table>
    <div class="botton">
</div>