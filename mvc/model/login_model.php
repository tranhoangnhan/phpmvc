<?php
class login_model extends DB {
    public function login($ten_dang_nhap) {
        $sql = "SELECT * FROM tai_khoan WHERE ten_dang_nhap = '$ten_dang_nhap'";
        return mysqli_query($this->conn,$sql);
        
    }

    public function get($ten_dang_nhap, $mat_khau, $email, $ngay_sinh,$dia_chi,$so_dien_thoai,$hinh_anh) {
        $sql = "INSERT INTO
         `tai_khoan`( `ten_dang_nhap`, `mat_khau`, `email`, `ngay_sinh`, `dia_chi`, `so_dien_thoai`, `hinh_anh` , `trang_thai`, `vai_tro`) 
        VALUES 
        ('$ten_dang_nhap','$mat_khau','$email','$ngay_sinh','$dia_chi','$so_dien_thoai', '$hinh_anh',1,0)";
        return mysqli_query($this->conn,$sql);

    }
}