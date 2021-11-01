<?php
    require_once("Model/home_db.php");
    class Home_CT {
        var $home_md;
        public function __construct()
        {
            $this->home_md = new home();
        }
        public function home()
        {
            $month = date("m");
            $doanhthuthang = $this->home_md->danhthuthang($month);
            $total_nguoidung = $this->home_md->nguoidung();
            $total_sanpham = $this->home_md->sanpham();
            $hoadonmoi = $this->home_md->hoadonmoi(0);
            require_once('View/index.php');
        }
    }
?>
