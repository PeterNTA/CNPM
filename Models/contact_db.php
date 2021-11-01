<?php
require_once("model.php");
class Contact extends Model
{
  function lienhe($data){
      $f = "";
      $v = "";
      foreach ($data as $key => $value) {
          $f .= $key . ",";
          $v .= "'" . $value . "',";
      }
        $f = trim($f, ",");
        $v = trim($v, ",");
        $query =   "INSERT INTO lienhe($f) VALUES ($v)";
        $result = $this->conn->query($query);
    }
  }
