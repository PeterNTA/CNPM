<?php
require_once("model.php");
class product extends Model
{
    var $table = "sanpham";
    var $method = "MaSP";
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
