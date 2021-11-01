<?php
require_once("Models/home_db.php");
class HomeController
{
    var $home_model;
    public function __construct()
    {
       $this->home_model = new Home();
    }

    function list()
    {
        $data_danhmuc = $this->home_model->danhmuc();

        $data_chitietDM = array();

        for($i=1; $i <=count($data_danhmuc);$i++){
            $data_chitietDM[$i] = $this->home_model->chitietdanhmuc($i);
        }

        $data_limit1 = $this->home_model->limit(0,4);
        $data_limit2 = $this->home_model->limit(4,4);
        $data_limit3 = $this->home_model->limit(8,4);
        $data_limit4 = $this->home_model->limit(12,4);
        $data_arr = array($data_limit1,$data_limit2,$data_limit3,$data_limit4);
        $data_random = $this->home_model->random(2);

        $data_banner = $this->home_model->banner();

        $data_sanpham1 = $this->home_model->sanpham_danhmuc(1,0,8);
        $data_sanpham2 = $this->home_model->sanpham_danhmuc(2,0,8);
        $data_sanpham3 = $this->home_model->sanpham_danhmuc(3,0,8);
        
        require_once('Views/index.php');
    }
}
