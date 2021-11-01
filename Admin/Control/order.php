<?php
require_once("Model/order_db.php");
class Order_CT
{
    var $order_md;
    public function __construct()
    {
        $this->order_md = new order();
    }
    public function list()
    {
        $data = $this->order_md->list_all_method();
        require_once("View/index.php");
    }
    public function delete()
    {
    $id = $_GET['id'];
    $this->order_md->delete($id);
    header('Location:?act=order');
  }
  function accept()
  {
    $data = array(
        'MaHD' => $_GET['id'],
        'TrangThai' => 1,
    );
    $this->order_md->update($data);
    header("Location: " . $_SERVER["HTTP_REFERER"]);;
  }
  function unaccept()
  {
    $data = array(
        'MaHD' => $_GET['id'],
        'TrangThai' => 0,
    );
    $this->order_md->update($data);
    header("Location: " . $_SERVER["HTTP_REFERER"]);
  }
  function detail()
  {
      $id = isset($_GET['id']) ? $_GET['id'] : 1;
      $data = $this->order_md->detail_bill($id);
      require_once("View/index.php");
  }
}
