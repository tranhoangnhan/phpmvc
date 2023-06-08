<?php

class nguoidung_model extends DB {
    public function get(){
        $sql = "select * from tai_khoan";
        return mysqli_query($this->conn,$sql);
    }
  
    public function getuser($id){
        $sql = "select * from tai_khoan where id = $id";
        return mysqli_query($this->conn,$sql);
    }
  
 
   
    public function adddulieu($ten_dang_nhap,$mat_khau,$email,$ngay_sinh,$dia_chi,$so_dien_thoai,$hinh_anh,$trang_thai,$vai_tro){
        $sql = "
        INSERT INTO `tai_khoan`(`ten_dang_nhap`, `mat_khau`, `email`, `ngay_sinh`, `dia_chi`, 
        `so_dien_thoai`, `hinh_anh`, `trang_thai`, `vai_tro`)
         VALUES ('$ten_dang_nhap','$mat_khau','$email','$ngay_sinh','$dia_chi',
         '$so_dien_thoai','$hinh_anh',$trang_thai,$vai_tro)
        ";
        return mysqli_query($this->conn,$sql);
    }

    public function edit($id) {
        $sql = "SELECT * FROM tai_khoan WHERE id = $id";
        return mysqli_query($this->conn,$sql);

    }

    public function update($id,$ten_dang_nhap,$mat_khau,$email,$ngay_sinh,$dia_chi,$so_dien_thoai,$hinh_anh,$trang_thai,$vai_tro) {
            $sql = "
            UPDATE `tai_khoan` SET `ten_dang_nhap`='$ten_dang_nhap',`mat_khau`='$mat_khau',`email`='$email',
            `ngay_sinh`='$ngay_sinh',`dia_chi`='$dia_chi',`so_dien_thoai`='$so_dien_thoai',`hinh_anh`='$hinh_anh',
            `trang_thai`=$trang_thai,`vai_tro`=$vai_tro

             WHERE id =$id";
            $result = false;
        if (mysqli_query($this->conn,$sql)) {
            $result = true;
        }   
        return json_encode($result);

    }
    public function delete($id) {
        $sql = "DELETE FROM tai_khoan  WHERE id = $id";
        $result = false;
        if (mysqli_query($this->conn,$sql)) {
            $result = true;
        }
        return json_encode($result);
    }

    public function update_user($id,$email,$ngay_sinh,$dia_chi,$so_dien_thoai,$hinh_anh) {
        $sql = "
        UPDATE `tai_khoan` SET `email`='$email',
        `ngay_sinh`='$ngay_sinh',`dia_chi`='$dia_chi',`so_dien_thoai`='$so_dien_thoai',`hinh_anh`='$hinh_anh'
         WHERE id =$id";
      
         return mysqli_query($this->conn,$sql);
    

}
    public function doi_mk($mat_khau_moi, $id) {
        $sql = "
        UPDATE `tai_khoan` SET `mat_khau`= '$mat_khau_moi' WHERE id = $id
        ";
        return mysqli_query($this->conn,$sql);

    }
    public function quen_mk($mat_khau_moi, $email) {
        $sql = "
        UPDATE `tai_khoan` SET `mat_khau`= '$mat_khau_moi' WHERE email = '$email'
        ";
        return mysqli_query($this->conn,$sql);

    }
}