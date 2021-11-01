<?php
 include './Control/database.php';
class home
{
    function __construct()
    {
      $this->db = new Database();
    }
    function danhthuthang($month){
        $query = "SELECT SUM(TongTien) as Count FROM HoaDon WHERE MONTH(NgayLap) = $month And TrangThai = 1";
        return $this->db->select($query)->fetch_assoc();
    }
    function nguoidung(){
    $query = "SELECT count(MaND) as Count FROM NguoiDung";
    return $this->db->select($query)->fetch_assoc();
}
    function sanpham(){
        $query = "SELECT count(MaSP) as Count FROM sanpham";
        return $this->db->select($query)->fetch_assoc();
}
    function hoadonmoi($id){
          $query = "SELECT count(MaHD) as Count FROM HoaDon WHERE TrangThai = $id";
          return $this->db->select($query)->fetch_assoc();
      }
}
