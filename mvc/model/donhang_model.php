<?php

class donhang_model extends DB {
    public function get(){
        $sql = "select *, (san_pham.gia_km * chi_tiet_hoa_don.so_luong) as `thanh_tien` from ((san_pham 
        INNER JOIN chi_tiet_hoa_don ON san_pham.ma_sp = chi_tiet_hoa_don.ma_sp) 
        INNER JOIN size ON chi_tiet_hoa_don.ma_size = size.ma_size
        INNER JOIN hoa_don ON hoa_don.ma_hd = chi_tiet_hoa_don.ma_hd
        INNER JOIN trang_thai_don_hang ON hoa_don.ma_ttdh = trang_thai_don_hang.ma_ttdh)  

		INNER JOIN khach_hang ON khach_hang.ma_kh = hoa_don.ma_kh  
        GROUP BY chi_tiet_hoa_don.ma_hd 
        ORDER BY chi_tiet_hoa_don.ma_hd DESC;";
        return mysqli_query($this->conn,$sql);
    }

    public function getChiTiet($ma_hd){
        $sql = "select *, (san_pham.gia_km * chi_tiet_hoa_don.so_luong) as `thanh_tien` from ((san_pham 
        INNER JOIN chi_tiet_hoa_don ON san_pham.ma_sp = chi_tiet_hoa_don.ma_sp) 
        INNER JOIN size ON chi_tiet_hoa_don.ma_size = size.ma_size
        INNER JOIN hoa_don ON hoa_don.ma_hd = chi_tiet_hoa_don.ma_hd
        INNER JOIN trang_thai_don_hang ON hoa_don.ma_ttdh = trang_thai_don_hang.ma_ttdh)  

		INNER JOIN khach_hang ON khach_hang.ma_kh = hoa_don.ma_kh   
        WHERE chi_tiet_hoa_don.ma_hd = $ma_hd
        
        ORDER BY chi_tiet_hoa_don.ma_hd DESC;";
        return mysqli_query($this->conn,$sql);
    }

    public function getuser ($ma_hd) {
        $sql = "SELECT * from (hoa_don INNER JOIN chi_tiet_hoa_don ON hoa_don.ma_hd = chi_tiet_hoa_don.ma_hd)
        INNER JOIN khach_hang on hoa_don.ma_kh = khach_hang.ma_kh
        INNER JOIN san_pham ON san_pham.ma_sp = chi_tiet_hoa_don.ma_sp
         WHERE hoa_don.ma_hd = $ma_hd;";
        return mysqli_query($this->conn,$sql);

    }
    public function choxacnhan(){
        $sql = "SELECT * FROM hoa_don INNER JOIN trang_thai_don_hang ON hoa_don.ma_ttdh = trang_thai_don_hang.ma_ttdh
        WHERE hoa_don.ma_ttdh = 1;";
        return mysqli_query($this->conn,$sql);
    }
    public function daxacnhan(){
        $sql = "SELECT * FROM hoa_don INNER JOIN trang_thai_don_hang ON hoa_don.ma_ttdh = trang_thai_don_hang.ma_ttdh
        WHERE hoa_don.ma_ttdh = 5;";
        return mysqli_query($this->conn,$sql);
    }
    public function danggiao(){
        $sql = "SELECT * FROM hoa_don INNER JOIN trang_thai_don_hang ON hoa_don.ma_ttdh = trang_thai_don_hang.ma_ttdh
        WHERE hoa_don.ma_ttdh = 3;";
        return mysqli_query($this->conn,$sql);
    }
    public function dagiao(){
        $sql = "SELECT * FROM hoa_don INNER JOIN trang_thai_don_hang ON hoa_don.ma_ttdh = trang_thai_don_hang.ma_ttdh
        WHERE hoa_don.ma_ttdh = 4;";
        return mysqli_query($this->conn,$sql);
    }
 
  
    public function delete($ma_cthd) {
        $sql = "DELETE FROM chi_tiet_hoa_don WHERE ma_cthd = $ma_cthd";
        $result = false;
        if (mysqli_query($this->conn,$sql)) {
            $result = true;
        }
        return json_encode($result);
    }
    public function up_daxacnhan($ma_hd) {
        $sql = "UPDATE hoa_don SET ma_ttdh = 5 WHERE ma_hd = $ma_hd";
        $result = false;
        if (mysqli_query($this->conn,$sql)) {
            $result = true;
        }
        return json_encode($result);
    }
    public function up_danggiao($ma_hd) {
        $sql = "UPDATE hoa_don SET ma_ttdh = 3 WHERE ma_hd = $ma_hd";
        $result = false;
        if (mysqli_query($this->conn,$sql)) {
            $result = true;
        }
        return json_encode($result);
    }
    public function up_dagiao($ma_hd) {
        $sql = "UPDATE hoa_don SET ma_ttdh = 4 WHERE ma_hd = $ma_hd";
        $result = false;
        if (mysqli_query($this->conn,$sql)) {
            $result = true;
        }
        return json_encode($result);
    }
    public function tongGiaTri($ma_hd) {
        $sql = "select *, (san_pham.gia_km * chi_tiet_hoa_don.so_luong) as `thanh_tien` , SUM(san_pham.gia_km * chi_tiet_hoa_don.so_luong) as `tongtien` from ((san_pham 
        INNER JOIN chi_tiet_hoa_don ON san_pham.ma_sp = chi_tiet_hoa_don.ma_sp) 
        INNER JOIN size ON chi_tiet_hoa_don.ma_size = size.ma_size
        INNER JOIN hoa_don ON hoa_don.ma_hd = chi_tiet_hoa_don.ma_hd
        INNER JOIN trang_thai_don_hang ON hoa_don.ma_ttdh = trang_thai_don_hang.ma_ttdh)  

		INNER JOIN khach_hang ON khach_hang.ma_kh = hoa_don.ma_kh   
        WHERE chi_tiet_hoa_don.ma_hd = $ma_hd
        ORDER BY chi_tiet_hoa_don.ma_hd DESC;
    ";
    return mysqli_query($this->conn,$sql);

    }
}