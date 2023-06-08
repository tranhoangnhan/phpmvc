<h3>
  <?= $data['title'] ?>
</h3>
<form action="don_hang/chitiet/<?= $san_pham['ma_hd'] ?>" method="POST">
<table class="table table-bordered">
      <tr>
        <th><input type="checkbox" id="check-all" class="flat"></th>
        <th>Mã HD</th>
      <th>Tên khách hàng</th>
      <th>Địa chỉ</th>
      <th>Số điện thoại</th>
      <th>Ngày đặt hàng</th>
    
    
      <th>Chức năng</th>
      </tr>

    <?php while ($san_pham = mysqli_fetch_array($data["san_pham"])) { ?>
   
      <tr>
        <td><input type="checkbox" name="" id="" value = ">"></td>
        <td><?= $san_pham['ma_hd'] ?></td>
        <td> 
          <?php echo $san_pham['ten_kh']; ?>
           </td>  
                 <td><?= $san_pham['dia_chi'] ?></td>
                 <td><?= $san_pham['so_dien_thoai'] ?></td>
                 <td><?= $san_pham['ngay_lap_hd'] ?></td>

         
       
      <td>    
      <a href="don_hang/chitiet/<?= $san_pham['ma_hd'] ?>"> <button type="button" class="btn btn-danger">Xem hóa đơn</button></a></td>
</td>

      </tr>
      <?php  } ?>   

      
    </table>
    </form>
    <div class="botton">
</div>