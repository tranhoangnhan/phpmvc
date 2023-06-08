


<!-- form dang nhap -->

    <h3 style="text-align: center;">Tài khoản của bạn</h3>
    <div style="margin-top: 20px;" class="container">
        <div class="row">
        <?php $tai_khoan = mysqli_fetch_array($data["tai_khoan"]) ?>


            <div class="col-lg-3 col-xs-12">
                <p>Ảnh đại diện</p>
                <div style="width:250px ;">
                <img style="border-radius:30% ;width:80% ;height: auto;" src="upload/<?= $tai_khoan['hinh_anh'] ?>" alt="">
            </div>
            </div>


            <div class="col-lg-4 col-xs-12">
                <h5 style="text-align: center;font-weight:  bold;margin-bottom: 10px;">Thông tin tài khoản</h5>
                <table class="table table-condensed">
                    <tr>
                        <td><h5>Tên đăng nhập:</h5><p><?= $tai_khoan['ten_dang_nhap'] ?> </p></td>
                      </tr>

                      <tr>

                        <td><h5>Email:</h5><p><?= $tai_khoan['email'] ?></p></td>
                      </tr>
                      <tr>
                        <td><h5>Ngày sinh:</h5><p><?= $tai_khoan['ngay_sinh'] ?> </p></td>
                      </tr>

                      <tr>
                        <td><h5>Địa Chỉ:</h5><p><?= $tai_khoan['dia_chi'] ?> </p></td>
                      </tr>
                      <tr>
                        <td><h5>Số Điện Thoại:</h5><p><?= $tai_khoan['so_dien_thoai'] ?></p></td>
                      </tr>

                     <td> <a href="home/update_user/<?=$_SESSION['user']?>"> <button type="button" class="btn btn-success bt">Thay đổi thông tin</button></a></td>
                     <td> <a href="home/doi_mk/<?=$_SESSION['user']?>"> <button type="button" class="btn btn-success bt">Đổi mật khẩu</button></a></td>


                  </table>

            </div>



            <div class="col-lg-5 col-xs-12">
                <h5 style="text-align: center;font-weight:  bold;margin-bottom: 10px;">Đơn hàng của bạn</h5>
<!--            <table class="table table-condensed">-->
<!--               -->
<!--               -->
<!--                  <tr>-->
<!--                    <th>Mã đơn</th>-->
<!--                    <th>Trạng thái</th>-->
<!--                    <th>Ngày dự kiến nhận hàng</th>-->
<!--                  </tr>-->
<!--                  --><?php //while($don_hang = mysqli_fetch_array($data["don_hang"])) { ?>
<!---->
<!--                  <tr>-->
<!--                    <td>--><?//= $don_hang['ma_hd'] ?><!--</td>-->
<!--                    <td>--><?//= $don_hang['ten_trang_thai'] ?><!--</td>-->
<!--                    <td>--><?//= $don_hang['ngay_nhan_hang'] ?><!--<a style=" float: right;" href="home/ctdh/--><?//= $don_hang['ma_hd'] ?><!--">Chi tiết</a></td>-->
<!--                  </tr>-->
<!--               --><?php // } ?>
<!--              -->
<!--              </table>-->
        </div>

        </div>
    </div>


