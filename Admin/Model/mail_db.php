<?php
require_once("model.php");
class mail extends Model
{
    var $table = "lienhe";
    var $method = "ConID";
    function detail_mail($id){
    $query = "SELECT * FROM `lienhe` WHERE ConID = $id ";
    require("result.php");
    return $data;
    }
}
