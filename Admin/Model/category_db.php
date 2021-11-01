<?php
require_once("model.php");
class category extends Model
{

    var $table = "danhmuc";
    var $method = "MaDM";
    function __construct()
    {
      $this->db = new Database();
    }
    function promotion(){
    $query = "SELECT * FROM khuyenmai";
    require("result.php");
    return $data;
  }
function type(){
    $query = "SELECT * FROM loaisanpham ";
    require("result.php");
    return $data;
  }
function category(){
    $query = "SELECT * FROM danhmuc";
    require("result.php");
    return $data;
  }
}
