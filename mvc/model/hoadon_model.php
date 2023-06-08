<?php

class hoadon_model extends DB {
    public function get(){
        $sql = "SELECT * from (hoa_don INNER JOIN khach_hang ON hoa_don.ma_kh = khach_hang.ma_kh) 
        INNER JOIN tai_khoan ON tai_khoan.id = khach_hang.id;";
        return mysqli_query($this->conn,$sql);
    }
  
    public function getuser($id){
        $sql = "SELECT * from (hoa_don INNER JOIN khach_hang ON hoa_don.ma_kh = khach_hang.ma_kh) 
        INNER JOIN tai_khoan ON tai_khoan.id = khach_hang.id 
        INNER JOIN trang_thai_don_hang ON trang_thai_don_hang.ma_ttdh = hoa_don.ma_ttdh WHERE tai_khoan.id = $id
        ORDER BY ma_hd DESC
        ; ";
        return mysqli_query($this->conn,$sql);
    }
    public function getcthd($id , $ma_hd){
        $sql = "SELECT * from (hoa_don INNER JOIN khach_hang ON hoa_don.ma_kh = khach_hang.ma_kh) 
        INNER JOIN tai_khoan ON tai_khoan.id = khach_hang.id 
        INNER JOIN trang_thai_don_hang ON trang_thai_don_hang.ma_ttdh = hoa_don.ma_ttdh WHERE tai_khoan.id = $id
        AND hoa_don.ma_hd = $ma_hd
        ; ";
        return mysqli_query($this->conn,$sql);
    }
    public function delete($ma_hd) {
        $sql = "DELETE FROM hoa_don WHERE ma_hd = $ma_hd";
        $result = false;
        if (mysqli_query($this->conn,$sql)) {
            $result = true;
        }
        return json_encode($result);
    }
   
   }