<h3>
  <?= $data['title'] ?>
</h3>
<form action="don_hang/chitiet/<?= $san_pham['ma_hd'] ?>" method="POST">
<table class="table table-bordered">
      <tr>
        <th>Mã HD</th>
      <th>Thông tin đơn hàng</th>
      <th>Trạng thái</th>
      <th>Chức năng</th>
      </tr>

    <?php while ($san_pham = mysqli_fetch_array($data["san_pham"])) { ?>
   
      <tr>
        <td><?= $san_pham['ma_hd'] ?></td>
        <td> 
          <a href="don_hang/chitiet/<?= $san_pham['ma_hd'] ?>">Ấn vào để xem</a>

           
        <td><?= $san_pham['ten_trang_thai'] ?></td>
          
           </td> 
       
      <td class = "text-warning">    
Không thể can thiệp vào đơn hàng đã giao thành công</td>

      </tr>
      <?php  } ?>   

      
    </table>
    </form>
    <div class="botton">
</div>