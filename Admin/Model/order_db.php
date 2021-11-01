<?php
require_once("model.php");
class order extends Model
{
    var $table = "hoadon";
    var $method = "MaHD";

    function state($id){
    $query = "select * from HoaDon where TrangThai = $id  ORDER BY MaHD DESC";
    require("result.php");
    return $data;
}
    function detail_bill($id){
    $query = "select ct.*, s.TenSP as Ten from chitiethoadon as ct, sanpham as s where ct.MaSP = s.MaSP and ct.MaHD = $id ";

    require("result.php");

    return $data;
    }

}
