<h3>
  <?= $data['title'] ?>
</h3>
<form action="" method="post">
<table class="table table-striped table-hover text-center">
<div class="input-group">
  <span class="input-group-text">Chọn ngày</span>
  <input type="date" aria-label="ngaybatdau" name="ngaybatdau" class="form-control">
  <input type="date" aria-label="ngayketthuc" name="ngayketthuc" class="form-control">
  <input type="submit" value="Kiểm tra" name="submit" class="btn btn-outline-secondary">

</div>
  
  <thead class="table-dark">
    <th colspan="8">TỔNG DANH THU TỪ <?=  $data['ngaybatdau'] ?> đến <?=  $data['ngayketthuc'] ?>: 
    <div class="badge bg-primary text-wrap" style="width: 6rem;">
    <?php $tong = mysqli_fetch_array($data["tong"]);
    echo currency_format($tong['tongtien']); ?></th>
</div>
    
  </thead>
      <tr class="table-primary">
        
        <th>Mã HD</th>
      <th>Thông tin hóa đơn</th>
      <th>Ngày lập hóa đơn</th>
      <th>Trạng thái</th>
  
    
      </tr>

    <?php while ($san_pham = mysqli_fetch_array($data["san_pham"])

    
    ) {

      ?>
      <tr>
        <td><?= $san_pham['ma_hd'] ?></td>
        <td>
        <a href="don_hang/chitiet/<?= $san_pham['ma_hd'] ?>">Ấn vào để xem</a>

        </td>

        <td> 
          <?php echo $san_pham['ngay_lap_hd']; ?>
           </td>  
           <td><?= $san_pham['ten_trang_thai'] ?></td>

      </tr>
      <?php  } ?>   

      
    </table></form>
    <div class="botton">
</div>