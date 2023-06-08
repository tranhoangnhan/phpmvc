<br>

<div class="col-12 col-lg-12 text-center">
<div class="breadcrumb__text">
        <h4>Chi tiết đơn hàng đã đặt</h4>
        </div>
    </div>
    <br>
    <div class=" col-12 col-lg-12 text-center">
    <?php 
            $user = mysqli_fetch_array($data["user"]);
            $trang_thai = mysqli_fetch_array($data["trang_thai"]);
            $ma = mysqli_fetch_array($data["ma"]);


            ?>
            <span>Trạng thái đơn hàng: <b><?= $trang_thai['ten_trang_thai']  ?> |</b></span> 
            <span>Mã đơn: <b><?= $ma['ma_hd']  ?></b></span>
    </div>

    <br>
        <div class="col-12 col-lg-10 cg">
            <h5 class="text-center">Thông tin người đặt</h5><br>
        <table class="table table-striped">
           
            
            <thead>
                <th>Tên người nhận</th>
                <th>Số điện thoại</th>
                <th>Ngày đặt hàng</th>
                <th>Dự kiến nhận hàng</th>
                <th>Email</th>
                <th>Địa chỉ</th>
            </thead>
            <tr>
            <td><?=$user['ten_kh']?></td>
            <td><?=$user['so_dien_thoai']?></td>
            <td><?=$user['ngay_lap_hd']?></td>
            <td><?=$user['ngay_nhan_hang']?></td>
            <td><?=$user['email']?></td>
            <td><?=$user['dia_chi']?></td>

                </td>
            </tr>
        </table>
            

</div><br>

<div  class="col-12 col-lg-10 text-center cg">
<h5 class="text-center">Thông tin đơn hàng</h5><br>

            <tr>
            <table class="table table-striped">
            <thead>
              <th>Tên sản Phẩm</th>
              <th>Số lượng</th>
              <th>Gía đặt</th>
          
                <th>Tổng cộng</th>
            </thead>
            </tr>
            <?php
             $tongthanhtoan = 0;

            while($don_hang = mysqli_fetch_array($data["don_hang"])) { 
                currency_format($tongthanhtoan += $don_hang ['gia_km'] * $don_hang [8]);
                ?>

            <tr>

              <td><?=$don_hang['ten_sp']?></td>
              <td><?=$don_hang[8]?></td>
              <td><?=currency_format($don_hang['gia_km'])?></td>

              <td><?php echo currency_format($don_hang['gia_km'] * $don_hang[8])?></td>
            </tr>
            <?php } ?>
           
            <tr>
              <th></th>
              <th></th>
                
                <th>Tổng thành tiền :</th>
               <th><?= currency_format($tongthanhtoan) ?></th>
           

            </tr>
            <th><a href="#"><button type="button" class="btn btn-success"> < Trở lại</button></a></th>
        </table>
    </div>

