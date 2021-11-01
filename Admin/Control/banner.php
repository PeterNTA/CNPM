<?php
require_once("Model/banner_db.php");
class Banner_CT
{
    var $ban_md;
    public function __construct()
    {
        $this->ban_md = new banner();
    }
    public function list()
    {
        $data = $this->ban_md->list_all_method();
        require_once("View/index.php");
    }
}
