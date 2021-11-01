<?php
require_once("Models/detail_db.php");
class DetailController
{
    var $detail_model;
    var $table = "comment";
    var $contens = "MaDM";
    public function __construct()
    {
       $this->detail_model = new Detail();
    }

    function list()
    {

        $data_danhmuc = $this->detail_model->danhmuc();

        $data_chitietDM = array();

        for($i=1; $i <=count($data_danhmuc);$i++){
            $data_chitietDM[$i] = $this->detail_model->chitietdanhmuc($i);
        }
        $id = $_GET['id'];
        $data = $this->detail_model->detail_sp($id);
        $data_cm = $this->detail_model->detail_cm($id);

        if($data!=null){
        $data_lq = $this->detail_model->sanpham_danhmuc(0,4,$data['MaDM']);
        }
        require_once('Views/index.php');
    }

    // `TenUser`, `Email`, `Tomtat`, `Noidung`, `NgayCom`, `MaSP
    // '".$ten."','".$email."','".$tomtat."','".$noidung."',$ngaydang,$masp

    function comment()
    {
        $data = array(

            'TenUser' =>    $_POST['namebinhluan'],
            'Email'  =>   $_POST['emailbinhluan'],
            'Star'  => $_POST ['rating'],
            'Tomtat' => $_POST['vande'],
            'Noidung' => $_POST['chitietvande'],
            'NgayCom' => date("Y-m-d"),
            'MaSP'  =>    $_POST['Masp'],
        );
        $id =  $_POST['Masp'];
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }

        $this->detail_model->insert_com($data);
        echo '<script>alert("add comment sucsesfull !");</script>';
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
