<?php
require_once("Model/category_db.php");
class Category_CT
{
    var $category_md;
    public function __construct()
    {
        $this->category_md = new category();
    }
    public function list()
    {
        $data = $this->category_md->list_all_method();
        require_once("View/index.php");
    }
    public function delete()
    {
    $id = $_GET['id'];
    $this->category_md->delete($id);
    header('Location:?act=view-cate#');
  }
  public function goadd()
  {
    include 'View/index.php';
  }
  public function add()
  {
      $data = array(
          'MaDM' =>    $_POST['MaDM'],
          'TenDM'  =>   $_POST['TenDM']
      );
      foreach ($data as $key => $value) {
          if (strpos($value, "'") != false) {
              $value = str_replace("'", "\'", $value);
              $data[$key] = $value;
          }
      }
      $this->category_md->add($data);
      header('Location:?act=view-cate');
  }
  public function go_edit()
    {
    $id = isset($_GET['id']) ? $_GET['id'] : 1;
    $data = $this->category_md->find($id);
    require_once("View/index.php");
    }
  public function edit()
  {
    $data = array(
        'MaDM' => $_POST['MaDM'],
        'TenDM' =>    $_POST['TenDM']
    );
    foreach ($data as $key => $value) {
        if (strpos($value, "'") != false) {
            $value = str_replace("'", "\'", $value);
            $data[$key] = $value;
        }
    }
    $this->category_md->update($data);
    header('Location:?act=view-cate');
  }

}
