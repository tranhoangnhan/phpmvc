<?php

class sanpham_model extends DB {
    public function getcuahang($act){
if($act != "tatca") {
switch ($act) {
  case "$act":
    $sql = "SELECT * FROM loai INNER JOIN san_pham ON loai.ma_loai = san_pham.ma_loai WHERE loai.ma_loai = $act;";
    mysqli_query($this->conn,$sql);
    break;
  
  default:
  $sql = "SELECT * FROM loai INNER JOIN san_pham ON loai.ma_loai = san_pham.ma_loai;";
  mysqli_query($this->conn,$sql);
} 

}
else {
  $sql = "SELECT * FROM loai INNER JOIN san_pham ON loai.ma_loai = san_pham.ma_loai;";
  mysqli_query($this->conn,$sql);
}
        return mysqli_query($this->conn,$sql);
    }
    public function get(){
      
        
          $sql = "SELECT * FROM loai INNER JOIN san_pham ON loai.ma_loai = san_pham.ma_loai;";
     return mysqli_query($this->conn,$sql);
            }
  
    public function getLoai(){
        $sql = "select * from loai";
        return mysqli_query($this->conn,$sql);
    }
    public function getLoaibyID($ma_loai){
        $sql = "select * from loai where ma_loai = $ma_loai";
        return mysqli_query($this->conn,$sql);
    }
    public function adddulieu($ten_sp,$gia,$gia_km,$so_luong,$hinh_sp,$ma_loai,$ngay_nhap,$mo_ta){
        $sql = "
        INSERT INTO `san_pham`( `ten_sp`, `gia`, `gia_km`, `so_luong` , `hinh_sp`, `ma_loai`, `ngay_nhap`, `mo_ta`) 
        VALUES ('$ten_sp',$gia,$gia_km, $so_luong,'$hinh_sp',$ma_loai,'$ngay_nhap','$mo_ta')
        ";
        return mysqli_query($this->conn,$sql);
    }
    //Thêm hình ảnh chi tiết cho sản phẩm
    public function addhinhct($ma_sp, $hinh_sp) {
        $sql = "
        INSERT INTO `sub_img`(`ma_sp`, `anh_chi_tiet`) 
        VALUES ($ma_sp,'$hinh_sp');
        ";
        return mysqli_query($this->conn,$sql);

    }
    public function getanhct($ma_sp) {
        $sql = "
        SELECT * FROM sub_img WHERE ma_sp = $ma_sp
        ";
        return mysqli_query($this->conn,$sql);

    }
public function getTen() {
    $sql = "SELECT ten_sp FROM san_pham;";
    return mysqli_query($this->conn,$sql);

}
//Fn này dùng để get số lượng còn lại và đã bán
    public function showSL () {
        $sql = "
        SELECT *, cthd.so_luong as `da_ban` from san_pham sp INNER JOIN chi_tiet_hoa_don cthd
        ON sp.ma_sp = cthd.ma_sp  GROUP BY sp.ma_sp ; 
        ";
        return mysqli_query($this->conn,$sql);

    }
    public function edit($ma_sp) {
        $sql = "SELECT * FROM san_pham WHERE ma_sp = $ma_sp";
        return mysqli_query($this->conn,$sql);

    }

    public function update($ma_sp,$ten_sp,$gia,$gia_km,$so_luong,$hinh_sp,$ma_loai,$ngay_nhap,$mo_ta) {
            $sql = "UPDATE san_pham SET ten_sp = '$ten_sp' , gia = $gia, gia_km = $gia_km,
                            so_luong = $so_luong,
                            hinh_sp = '$hinh_sp' , ma_loai = $ma_loai,
                             ngay_nhap = '$ngay_nhap' , mo_ta = '$mo_ta' 
             WHERE ma_sp =$ma_sp";
            $result = false;
        if (mysqli_query($this->conn,$sql)) {
            $result = true;
        }
        return json_encode($result);

    }
    public function delete($ma_sp) {
        $sql = "DELETE FROM san_pham WHERE ma_sp = $ma_sp";
        $result = false;
        if (mysqli_query($this->conn,$sql)) {
            $result = true;
        }
        return json_encode($result);
    }

    public function deleteanh($anh) {
        $sql = "DELETE FROM sub_img WHERE anh = $anh";
        $result = false;
        if (mysqli_query($this->conn,$sql)) {
            $result = true;
        }
        return json_encode($result);
    }
    public function getChitiet($ma_sp){
        $sql = "SELECT * FROM san_pham where ma_sp = $ma_sp;";
        return mysqli_query($this->conn,$sql);
    }
    public function getAnhChitiet($ma_sp){
        $sql = "SELECT * FROM sub_img where ma_sp = $ma_sp;";
        return mysqli_query($this->conn,$sql);
    }
    //Get ở trang chủ vì FE code giao diện kiểu data
    public function getAo() {
        $sql = "SELECT * FROM san_pham INNER JOIN loai ON  san_pham.ma_loai = loai.ma_loai WHERE loai.ma_loai = 1 LIMIT 8; ";
        return mysqli_query($this->conn,$sql);

    }
    public function getQuan(){
        $sql = "SELECT * FROM loai INNER JOIN san_pham ON loai.ma_loai = san_pham.ma_loai WHERE san_pham.ma_loai = 3;";
        return mysqli_query($this->conn,$sql);
    }
  
    public function getPK() {
        $sql = "SELECT * FROM san_pham INNER JOIN loai ON  san_pham.ma_loai = loai.ma_loai WHERE loai.ma_loai = 5 LIMIT 8; ";
        return mysqli_query($this->conn,$sql);

    }
   
    
    
}
