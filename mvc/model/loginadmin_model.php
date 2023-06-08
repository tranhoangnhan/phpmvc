<?php
class loginadmin_model extends DB {
    public function login($ten_dang_nhap) {
        $sql = "SELECT * FROM tai_khoan WHERE ten_dang_nhap = '$ten_dang_nhap'";
        return mysqli_query($this->conn,$sql);
        
    }
}