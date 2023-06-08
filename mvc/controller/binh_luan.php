<?php
class binh_luan  extends controller{
    var $title = '  hóa đơn';

    public function product() {
       
        $this->view("masterlayout",[
          // Page này gọi bên file kia để lấy tên trang, muốn lấy view file nào thì gọi tên file đó ra
          "page" => "san_pham/index" , 
    ]);
      }
     

        public function home() {
        $this->view("masterlayout",[
            "page" => "dang_phat_trien/show" ,        
            'title' => 'Show' . $this->title,
    
        ]);         
    }

   


   
   
}

