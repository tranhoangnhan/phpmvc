<?php
class slider_model extends DB {
  

    public function get() {
        $sql = "SELECT * FROM anh_slider";
        return mysqli_query($this->conn,$sql);

    }

    public function gettt() {
        $sql = "SELECT * FROM anh_slider WHERE trang_thai = 1";
        return mysqli_query($this->conn,$sql);

    }
    public function getcount() {
        $sql = "SELECT COUNT(ma_slider) as `tong` FROM anh_slider WHERE trang_thai = 1";
        return mysqli_query($this->conn,$sql);

    }
    public function getid($ma_slider) {
        $sql = "SELECT * FROM anh_slider WHERE ma_slider = $ma_slider";
        return mysqli_query($this->conn,$sql);

    }

    public function trang_thai($trang_thai , $ma_slider) {
        $sql = "UPDATE `anh_slider`
        SET `trang_thai`=$trang_thai WHERE ma_slider = $ma_slider
        ";
        return mysqli_query($this->conn,$sql);

    }
    public function them($hinh_anh) {
        $sql = "INSERT INTO `anh_slider`( `hinh_anh`) 
        VALUES ('$hinh_anh')
        ";
        return mysqli_query($this->conn,$sql);

    }
    public function xoa($ma_slider) {
        $sql = " DELETE FROM anh_slider WHERE ma_slider = $ma_slider
        ";
        return mysqli_query($this->conn,$sql);

    }
}