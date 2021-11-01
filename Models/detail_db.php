<?php
require_once("model.php");
class Detail extends Model
{
    function detail_sp($id)
    {
        $query =  "SELECT * from SanPham where MaSP = $id ";
        $result = $this->conn->query($query);
        return $result->fetch_assoc();
    }
    function detail_cm($id)
    {
        $query =   "SELECT * from comment WHERE MaSP = $id ORDER BY MaSP DESC limit 0,8";

        require("result.php");

        return $data;
    }

    function insert_com($data)
    {
      $f = "";
      $v = "";
      foreach ($data as $key => $value) {
          $f .= $key . ",";
          $v .= "'" . $value . "',";
      }
        $f = trim($f, ",");
        $v = trim($v, ",");
        $query =   "INSERT INTO comment($f) VALUES ($v)";
        $result = $this->conn->query($query);
    }
}
