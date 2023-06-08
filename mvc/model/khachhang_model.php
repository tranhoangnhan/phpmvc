<?php

class khachhang_model extends DB {
    public function get(){
        $sql = "select * from khach_hang";
        return mysqli_query($this->conn,$sql);
    }
  

    public function delete($ma_kh) {
        $sql = "DELETE FROM khach_hang WHERE ma_kh = $ma_kh";
        $result = false;
        if (mysqli_query($this->conn,$sql)) {
            $result = true;
        }
        return json_encode($result);
    }
    public function infokhh(){
        $sql = "
        SELECT ma_kh FROM khach_hang WHERE id = 6  ORDER BY ma_kh DESC LIMIT 1;
        ";
       return mysqli_query($this->conn,$sql);
    }

}