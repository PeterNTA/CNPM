<?php
require_once("model.php");
class sub extends Model
{
  function checkemail()
  {
  $query =  "SELECT * from subcribe";

  require("result.php");

  return $data;
}
    function subcribe($data,$check)
    {
      if ($check == 0) {
      $f = "";
      $v = "";
      foreach ($data as $key => $value) {
          $f .= $key . ",";
          $v .= "'" . $value . "',";
      }
        $f = trim($f, ",");
        $v = trim($v, ",");
        $query =   "INSERT INTO subcribe($f) VALUES ($v)";
        $result = $this->conn->query($query);
    }else{
      $result = "Email is isset";
    }
  }
}
