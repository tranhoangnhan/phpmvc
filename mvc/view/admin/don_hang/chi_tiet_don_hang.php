<h3>
  <?= $data['title'] ?>
</h3>

<table class="table table-striped table-hover text-center">
  <thead>
    <?php $gia_tri = mysqli_fetch_array($data["gia_tri"]) ?>

    <th colspan="5">
      <h3>CHI TIẾT CÁC SẢN PHẨM TRONG ĐƠN HÀNG <br/>
        MÃ HÓA ĐƠN: <?= $gia_tri['ma_hd'] ?>
      </h3>
    </th>
  </thead>
  <tr class="table-primary">
    <th>Tên sản phẩm</th>
    <th>Số lượng</th>
    <th>Đơn giá</th>
    <th>Thành tiền</th>
    <th>Size</th>


  </tr>

  <?php while ($san_pham = mysqli_fetch_array($data["san_pham"])) { ?>

  <tbody>
    <tr>
      <td>
        <?php echo $san_pham['ten_sp']; ?>
      </td>
      <td>
        <?= $san_pham['so_luong'] ?>
      </td>
      <td>
        <?= currency_format($san_pham['gia_km']) ?>
      </td>
      <td>
        <?= currency_format($san_pham['thanh_tien']) ?>
      </td>

      <td>


        <?php echo $san_pham['ten_size']; ?>
      </td>

    </tr>
  </tbody>
  <?php } ?>

  <tfoot class="table-dark">
    <th colspan="2">TRẠNG THÁI ĐƠN HÀNG: <?= $gia_tri['ten_trang_thai'] ?>
    <th colspan="8">TỔNG GIÁ TRỊ ĐƠN HÀNG: <?= currency_format($gia_tri['tongtien']) ?>
    </th>

  </tfoot>


</table>
<button type="button" onclick="quay_lai_trang_truoc()" class="btn btn-outline-secondary">Quay lại trang trước</button>

<script>
  function quay_lai_trang_truoc() {
    history.back();
  }
</script>