<?php
require_once("Models/compare_db.php");
class CompareController
{
    var $compare_model;
    public function __construct()
    {
        $this->compare_model = new Compare();
    }
    function list_compare()
    {
        $data_danhmuc = $this->compare_model->danhmuc();

        $data_chitietDM = array();

        for ($i = 1; $i <= count($data_danhmuc); $i++) {
            $data_chitietDM[$i] = $this->compare_model->chitietdanhmuc($i);
        }

        $count = 0;
        if (isset($_SESSION['sanphamcp'])) {
            foreach ($_SESSION['sanphamcp'] as $value) {
                $count += $value['ThanhTien'];
            }
        }
        require_once('Views/index.php');
    }

    function add_compare()
    {
        $id = $_GET['id'];
        $data = $this->compare_model->detail_sp($id);
        $count = 0;
        if (isset($_SESSION['sanphamcp'][$id])) {
            $arr = $_SESSION['sanphamcp'][$id];
            $arr['ThanhTien'] = $arr['soluong'] * $arr["DonGia"];
            $_SESSION['sanphamcp'][$id] = $arr;
        } else {
            $arr['MoTa'] = $data['MoTa'];
            $arr['MotaCT'] = $data['MotaCT'];
            $arr['MaSP'] = $data['MaSP'];
            $arr['TenSP'] = $data['TenSP'];
            $arr['DonGia'] = $data['DonGia'];
            $arr['SoLuong'] = 1;
            $arr['ThanhTien'] = $data['DonGia'];
            $arr['HinhAnh1'] = $data['HinhAnh1'];
            $_SESSION['sanphamcp'][$id] = $arr;
        }
        foreach ($_SESSION['sanphamcp'] as $value) {
            $count += $value['ThanhTien'];
        }

        header('Location:?act=compare');
    }
    function deleteall_compare()
    {
        unset($_SESSION['sanphamcp'][$_GET['id']]);
        header('Location: ?act=compare');
    }
}
