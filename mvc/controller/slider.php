<?php
class slider  extends controller{
    var $title = ' slider';
    
    public $slider_model;
    public $tin_model;
    public $sanpham_model;
    public function __construct() {
        $this->slider_model = $this ->model("slider_model");
        $this->sanpham_model = $this ->model("sanpham_model");

    }
    public function product() {
       
      $this->view("masterlayout",[
        "page" => "loai/index" ,
        "sanpham" => $this->sanpham_model->get(),

  ]);
    }
   
    public function show() {
        
       

        if(isset($_POST['submit'])) {
         
            $trang_thai = $_POST['trang_thai'];
            $kq = $this->slider_model->trang_thai($trang_thai);

        }
        $this->view("masterlayout",[
            "page" => "slider/show" ,
            "slider" => $this->slider_model->get(),

            'title' => 'Show' . $this->title,
    
        ]);         
    }

    public function add() {
        if  (isset($_POST["submit"])) {
            $this->upanh();
            $hinh_anh = basename( $_FILES["fileupload"]["name"]);
            $kq = $this->slider_model->them($hinh_anh);
            if($kq) {
                header("Location:http://localhost/mvcda1/slider/show");
            }
    }
    $this->view("masterlayout",[
        "page" => "slider/add" ,
        "slider" => $this->slider_model->get(),
        'title' => 'Show' . $this->title,

    ]);   
}

public function edit($ma_slider) {
    if  (isset($_POST["submit"])) {
        $trang_thai = $_POST['trang_thai'];
        $kq = $this->slider_model->trang_thai($trang_thai , $ma_slider);
        if($kq) {
            header("Location:http://localhost/mvcda1/slider/show");
        }
}
$this->view("masterlayout",[
    "page" => "slider/update" ,
    "slider" => $this->slider_model->getid($ma_slider),
    'title' => 'Show' . $this->title,

]);   
}
    
public function delete($ma_slider) {
    $kq = $this->slider_model->xoa($ma_slider);
    if($kq) {
        header("Location:http://localhost/mvcda1/slider/show");
    }
    $this->view("masterlayout",[
        'title' => 'Show' . $this->title,
        
        

    ]);
    
   }
}