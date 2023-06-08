<?php
class loai  extends controller{
    var $title = ' loại sản phẩm';
    
    public $loai_model;
    public $tin_model;
    public $sanpham_model;
    public function __construct() {
        $this->loai_model = $this ->model("loai_model");
        $this->sanpham_model = $this ->model("sanpham_model");

    }
    public function product() {
       
      $this->view("masterlayout",[
        "page" => "loai/index" ,
        "loai" => $this->loai_model->get(),
        "sanpham" => $this->sanpham_model->get(),
        "dem" => $this->loai_model->demsodon(),

  ]);
    }
   
    public function show() {
        $this->view("masterlayout",[
            "page" => "loai/show" ,
            "loai" => $this->loai_model->get(),
            "sanpham" => $this->sanpham_model->get(),
            'title' => 'Show' . $this->title,
    
        ]);         
    }

public function viewadd(){
    $this->view("masterlayout",[
        "page" => "loai/add",
    ]);
}
public function insert() {
    $thong_bao = "";

    if  (isset($_POST["submit"])) {
        $ten_loai = $_POST['ten_loai'];
        if($ten_loai == "" || $ten_loai == NULL ) {
            $thong_bao = '<span> Tên loại không được để trống  </span>';

        } 
         
            $kq = $this->loai_model->get();
            $res2 = mysqli_fetch_array($kq);
            $check = 0;
         foreach ($kq as $key => $value) {
            $loaidb = $value['ten_loai'];
          
            if ($loaidb == $ten_loai) {
                $thong_bao = '<span> Loại đã tồn tại  </span>';
                $check = 1;

            } 


    
        }
        if($check != 1 ) {
                $thong_bao = '<span> Thêm loại thành công  </span>';
            
                $kq = $this->loai_model->adddulieu($ten_loai);
            
               
        }
     
       




       
        
       
    } 
    $this->view("masterlayout",[
        "page" => "loai/add" ,
        'title' => 'Thêm' . $this->title,
        'thong_bao' =>  $thong_bao,
    ]);
       
    }

public function edit($ma_loai) {
    

    $this->view("masterlayout",[
        "page" => "loai/edit" ,
        'title' => 'Thêm' . $this->title,
        'edit' => $this->loai_model->edit($ma_loai),
    ]);


}
public function update($ma_loai) {
    
        if(isset($_POST["submit"])) {

      
            $ten_loai = $_POST['ten_loai'];
            if($ten_loai == "" || $ten_loai == NULL ) {
                $thong_bao = '<span> Tên loại không được để trống  </span>';
            } 
            
            else {
                $thong_bao = '<span> Cập nhật loại thành công  </span>';
    
                $kq = $this->loai_model->update($ma_loai,$ten_loai); }
                $this->view("masterlayout",[
                    "page" => "loai/edit" ,
                    'title' => 'Cập nhật' . $this->title,
                    'edit' => $this->loai_model->edit($ma_loai),
                    'thong_bao' =>  $thong_bao,

                ]);
            }
            
            $this->view("masterlayout",[
                "page" => "loai/edit" ,
                'title' => 'Cập nhật' . $this->title,
                "result" => $kq,
                'edit' => $this->loai_model->edit($ma_loai),
                'thong_bao' =>  $thong_bao,

            ]);
  
         }

              
          
   public function delete($ma_loai) {
    $kq = $this->loai_model->delete($ma_loai);

    $this->view("masterlayout",[
        "page" => "loai/show" ,
        'title' => 'Show' . $this->title,
        
        'loai' => $this->loai_model->get(),

    ]);
   }
}

