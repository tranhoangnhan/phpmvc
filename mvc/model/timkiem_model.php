<?php
class timkiem_model extends DB {
  

    public function tim_kiem($tu_khoa) {
        $sql = "SELECT * FROM `san_pham` WHERE ten_sp LIKE '%$tu_khoa%' ORDER BY ma_sp DESC;  ";
        return mysqli_query($this->conn,$sql);

    }

}