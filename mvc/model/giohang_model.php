<?php
class giohang_model extends DB {
 
 

    public function get($ma_sp) {
        $sql = "SELECT * FROM san_pham  WHERE ma_sp = $ma_sp ";
        return mysqli_query($this->conn,$sql);

    }
    public function them_kh($id, $ten_kh, $dia_chi, $so_dien_thoai, $email) {
        $sql = "
        INSERT INTO `khach_hang`( `id`, `ten_kh`, `dia_chi`, `so_dien_thoai`, `email`) 
        VALUES 
        ('$id','$ten_kh','$dia_chi',$so_dien_thoai,'$email')
        ";
         mysqli_query($this->conn,$sql);

    }
    public function hoa_don($ma_kh, $ngay_lap_hd, $ngay_nhan_hang) {
        $sql = "
        INSERT INTO `hoa_don`( `ma_kh`, `ngay_lap_hd`, `ngay_nhan_hang`, `ma_ttdh`) 
        VALUES ($ma_kh,'$ngay_lap_hd','$ngay_nhan_hang',1);
        ";
         mysqli_query($this->conn,$sql);

    }
    public function cthd($ma_hd, $ma_sp, $so_luong, $ma_size) {
        $sql = "
        INSERT INTO `chi_tiet_hoa_don`( `ma_hd`, `ma_sp`, `so_luong`, `ma_size`) 
        VALUES ($ma_hd,$ma_sp,$so_luong,$ma_size)
        ";
         mysqli_query($this->conn,$sql);

    }
    public function infokh($id){
        $sql = "
        SELECT ma_kh FROM khach_hang WHERE id = $id  ORDER BY ma_kh DESC LIMIT 1;
        ";
       return mysqli_query($this->conn,$sql);
    }
    public function infohd(){
        $sql = "
        SELECT ma_hd FROM hoa_don ORDER BY ma_hd DESC LIMIT 1;
        ";
       return mysqli_query($this->conn,$sql);
    }
}