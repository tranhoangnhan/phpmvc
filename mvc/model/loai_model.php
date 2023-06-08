<?php

class loai_model extends DB {

    public function demsodon(){
        $sql = "SELECT COUNT(ma_hd) AS sodonghang FROM `hoa_don`;";
        return mysqli_query($this->conn,$sql);
    }
    public function get(){
        $sql = "select * from loai";
        return mysqli_query($this->conn,$sql);
    }
    public function adddulieu($ten_loai){
        $sql = "INSERT INTO `loai`( `ten_loai`) VALUES ('$ten_loai')";
        return mysqli_query($this->conn,$sql);
    }

    public function edit($ma_loai) {
        $sql = "SELECT * FROM loai WHERE ma_loai = $ma_loai";
        return mysqli_query($this->conn,$sql);

    }

    public function update($ma_loai,$ten_loai) {
            $sql = "UPDATE loai SET ten_loai = '$ten_loai' WHERE ma_loai =$ma_loai";
            $result = false;
        if (mysqli_query($this->conn,$sql)) {
            $result = true;
        }
        return json_encode($result);

    }
    public function delete($ma_loai) {
        $sql = "DELETE FROM loai WHERE ma_loai = $ma_loai";
        $result = false;
        if (mysqli_query($this->conn,$sql)) {
            $result = true;
        }
        return json_encode($result);
    }
    

}