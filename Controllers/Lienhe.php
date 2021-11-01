<?php
require_once("Models/contact_db.php");
class LienHe
{
    var $cont_md;
    var $table = "lienhe";
    public function __construct()
    {
       $this->cont_md = new Contact();
    }
    function lienhe()
    {
        $data = array(
            'name' =>    $_POST['name'],
            'email' =>    $_POST['email'],
            'phone' =>    $_POST['phone'],
            'problem' =>    $_POST['prob'],
            'message' =>    $_POST['message'],
            'time' =>   date("Y-m-d"),
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
        $this->cont_md->lienhe($data);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
