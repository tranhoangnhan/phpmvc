<?php

class controller
{

    function view($view, $data = [])
    {
        require_once "./mvc/view/admin/" . $view . ".php";
    }
    function view_client($view, $data = [])
    {
        require_once "./mvc/view/client/" . $view . ".php";
    }

    function model($model)
    {
        require_once "./mvc/model/" . $model . ".php";
        return new $model;
    }

    function upanh()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            // Dữ liệu gửi lên server không bằng phương thức post
            echo "Phải Post dữ liệu";
            die;
        }

        // Kiểm tra có dữ liệu fileupload trong $_FILES không
        // Nếu không có thì dừng
        if (!isset($_FILES["fileupload"])) {
            echo "Dữ liệu không đúng cấu trúc";
            die;
        }

        // Kiểm tra dữ liệu có bị lỗi không
        // if ($_FILES["fileupload"]['error'] != 0) {
        //     echo "Dữ liệu upload bị lỗi";
        //     die;
        // }

        // Đã có dữ liệu upload, thực hiện xử lý file upload

        //Thư mục bạn sẽ lưu file upload
        $target_dir = "./upload/";
        //Vị trí file lưu tạm trong server (file sẽ lưu trong uploads, với tên giống tên ban đầu)
        $target_file = $target_dir . basename($_FILES["fileupload"]["name"]);

        $allowUpload = true;

        //Lấy phần mở rộng của file (jpg, png, ...)
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

        // Cỡ lớn nhất được upload (bytes)
        $maxfilesize = 800000;

        ////Những loại file được phép upload
        $allowtypes = array('jpg', 'png', 'jpeg', 'gif');


        if (isset($_POST["submit"])) {
            //Kiểm tra xem có phải là ảnh bằng hàm getimagesize
            $check = getimagesize($_FILES["fileupload"]["tmp_name"]);
            if ($check !== false) {
                echo "Đây là file ảnh - " . $check["mime"] . ".";
                $allowUpload = true;
            } else {
                echo "Không phải file ảnh.";
                $allowUpload = false;
            }
        }

        // Kiểm tra nếu file đã tồn tại thì không cho phép ghi đè
        // Bạn có thể phát triển code để lưu thành một tên file khác
        // if (file_exists($target_file)) {
        //     echo "Tên file đã tồn tại trên server, không được ghi đè";
        //     $allowUpload = false;
        // }
        // Kiểm tra kích thước file upload cho vượt quá giới hạn cho phép
        if ($_FILES["fileupload"]["size"] > $maxfilesize) {
            echo "Không được upload ảnh lớn hơn $maxfilesize (bytes).";
            $allowUpload = false;
        }


        // Kiểm tra kiểu file
        // if (!in_array($imageFileType, $allowtypes)) {
        //     echo "Chỉ được upload các định dạng JPG, PNG, JPEG, GIF";
        //     $allowUpload = false;
        // }


        if ($allowUpload) {
            // Xử lý di chuyển file tạm ra thư mục cần lưu trữ, dùng hàm move_uploaded_file
            if (move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file)) {

            } 
        } 
    }

   function mutianh() {
    if (($_SERVER['REQUEST_METHOD'] === 'POST') &&
    (isset($_FILES['fileupload']))) {
 //Thư mục bạn sẽ lưu file upload
 $target_dir = "./upload/";
 //Vị trí file lưu tạm trong server (file sẽ lưu trong uploads, với tên giống tên ban đầu)

 $allowUpload = true;

 //Lấy phần mở rộng của file (jpg, png, ...)

 // Cỡ lớn nhất được upload (bytes)
 $maxfilesize = 800000;

 ////Những loại file được phép upload
 $allowtypes = array('jpg', 'png', 'jpeg', 'gif');

    $files = $_FILES['fileupload'];

        $names      = $files['name'];
        $types      = $files['type'];
        $tmp_names  = $files['tmp_name'];
        $errors     = $files['error'];
        $sizes      = $files['size'];


        $numitems = count($names);
        $numfiles = 0;
        for ($i = 0; $i < $numitems; $i ++) {
            //Kiểm tra file thứ $i trong mảng file, up thành công không
            if ($errors[$i] == 0)
            {
                $numfiles++;
                // echo "Bạn upload file thứ $numfiles:<br>";
                // echo "Tên file: $names[$i] <br>";
                // echo "Lưu tại: $tmp_names[$i] <br>";
                // echo "Cỡ file: $sizes[$i] <br><hr>";
                
                //Code xử lý di chuyển file đến thư mục cần thiết ở đây (bạn tự thực hiện)
                //Ví dụ move_uploaded_file($tmp_names[$i], /upload/'.$names[$i]);

            }

            if ($allowUpload) {
                // Xử lý di chuyển file tạm ra thư mục cần lưu trữ, dùng hàm move_uploaded_file
                if (move_uploaded_file($tmp_names[$i],$target_dir.$names[$i])) {
    
                } else {
                    echo "Có lỗi xảy ra khi upload file.";
                }
            } else {
                echo "Không upload được file, có thể do file lớn, kiểu file không đúng ...";
            }
        }
        // echo '<span class="text-center"> Tổng số file upload: " '.$numfiles.' </span>';
}

   }

   
}