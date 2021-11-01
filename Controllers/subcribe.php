<?php
require_once("Models/sub_db.php");
class Subcribe
{
    var $sub_md;
    var $table = "subcribe";
    var $contens = "ID_sub";
    public function __construct()
    {
       $this->sub_md = new sub();
    }
    function sub()
    {
        $check = 0;
        $data_check = $this->sub_md->checkemail();
        foreach ($data_check as $value) {
            if ($value['Email'] == $_POST['EMAIL']) {
                $check = 1;
            }
        }
        $data = array(
            'Email' =>    $_POST['EMAIL'],
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
        $this->sub_md->subcribe($data,$check);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
