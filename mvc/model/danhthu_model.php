<?php
class danhthu_model extends DB {
   
    public function getDanhThu($ngaybatdau , $ngayketthuc){
        $sql = "select *, (san_pham.gia_km * chi_tiet_hoa_don.so_luong) as `thanh_tien` from ((san_pham 
        INNER JOIN chi_tiet_hoa_don ON san_pham.ma_sp = chi_tiet_hoa_don.ma_sp) 
        INNER JOIN size ON chi_tiet_hoa_don.ma_size = size.ma_size
        INNER JOIN hoa_don ON hoa_don.ma_hd = chi_tiet_hoa_don.ma_hd
        INNER JOIN trang_thai_don_hang ON hoa_don.ma_ttdh = trang_thai_don_hang.ma_ttdh)  

		INNER JOIN khach_hang ON khach_hang.ma_kh = hoa_don.ma_kh 
        WHERE hoa_don.ngay_lap_hd BETWEEN '$ngaybatdau' AND '$ngayketthuc' AND hoa_don.ma_ttdh = 4
 
        GROUP BY chi_tiet_hoa_don.ma_hd 
        ORDER BY chi_tiet_hoa_don.ma_hd DESC;";
        return mysqli_query($this->conn,$sql);
    }
  
    public function tongGiaTri($ngaybatdau , $ngayketthuc) {
        $sql = "select *, (san_pham.gia_km * chi_tiet_hoa_don.so_luong) as `thanh_tien` , SUM(san_pham.gia_km * chi_tiet_hoa_don.so_luong) as `tongtien` from ((san_pham 
        INNER JOIN chi_tiet_hoa_don ON san_pham.ma_sp = chi_tiet_hoa_don.ma_sp) 
        INNER JOIN size ON chi_tiet_hoa_don.ma_size = size.ma_size
        INNER JOIN hoa_don ON hoa_don.ma_hd = chi_tiet_hoa_don.ma_hd
        INNER JOIN trang_thai_don_hang ON hoa_don.ma_ttdh = trang_thai_don_hang.ma_ttdh)  
        
		INNER JOIN khach_hang ON khach_hang.ma_kh = hoa_don.ma_kh   
        WHERE hoa_don.ngay_lap_hd BETWEEN '$ngaybatdau' AND '$ngayketthuc'  AND hoa_don.ma_ttdh = 4
        ORDER BY chi_tiet_hoa_don.ma_hd DESC;
    ";
    return mysqli_query($this->conn,$sql);

    }
   
}