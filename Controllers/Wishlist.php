<?php
require_once("Models/wishlist_db.php");
class WishlistController
{
    var $wishlist_model;
    public function __construct()
    {
        $this->wishlist_model = new Wishlist();
    }
    function list_wish()
    {
      if (isset($_SESSION['login'])) {
        $data_danhmuc = $this->wishlist_model->danhmuc();

        $data_chitietDM = array();

        for ($i = 1; $i <= count($data_danhmuc); $i++) {
            $data_chitietDM[$i] = $this->wishlist_model->chitietdanhmuc($i);
        }

        $count = 0;
        require_once('Views/index.php');
      }else {
           header('location: ?act=taikhoan');
       }
    }

    function add_wish()
    {
        $id = $_GET['id'];
        $data = $this->wishlist_model->detail_sp($id);
        $count = 0;
        if (isset($_SESSION['wishlist'][$id])) {
            $arr = $_SESSION['wishlist'][$id];
            $_SESSION['wishlist'][$id] = $arr;
        } else {
            $arr['MaSP'] = $data['MaSP'];
            $arr['TenSP'] = $data['TenSP'];
            $arr['DonGia'] = $data['DonGia'];
            $arr['SoLuong'] = 1;
            $arr['HinhAnh1'] = $data['HinhAnh1'];
            $_SESSION['wishlist'][$id] = $arr;
        }
        header('Location:?act=wishlist#dxd');
    }
    function deleteall_wish()
    {
        unset($_SESSION['wishlist'][$_GET['id']]);
        header('Location: ?act=wishlist#dxd');
    }
}
