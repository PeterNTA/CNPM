<?php
require_once("Model/account_db.php");
class Account_CT
{
    var $account_md;
    public function __construct()
    {
        $this->account_md = new account();
    }
    public function list()
    {
        $data = $this->account_md->list_all_method();
        require_once("View/index.php");
    }
    public function delete()
    {
    $id = $_GET['id'];
    $this->account_md->delete($id);
    header('Location:?act=view-acc');
  }
  public function add()
  {
      $data = array(
          'Ho' =>    $_POST['Ho'],
          'Ten'  =>   $_POST['Ten'],
          'GioiTinh' => $_POST['GioiTinh'],
          'SDT' => $_POST['SDT'],
          'Email' =>    $_POST['Email'],
          'DiaChi'  =>   $_POST['DiaChi'],
          'TaiKhoan' => $_POST['TaiKhoan'],
          'MatKhau' => md5($_POST['MatKhau']),
          'MaQuyen' =>  '1',
          'TrangThai'  =>  '1'
      );
      foreach ($data as $key => $value) {
          if (strpos($value, "'") != false) {
              $value = str_replace("'", "\'", $value);
              $data[$key] = $value;
          }
      }
      $this->account_md->add($data);
      header('Location:?act=view-acc');
  }
  public function gopage(){
    require 'View/index.php';
  }
  public function go_edit()
    {
    $id = isset($_GET['id']) ? $_GET['id'] : 1;
    $data = $this->account_md->find($id);
    require_once("View/index.php");
    }
    public function update()
    {
    $data = array(
        'MaND' => $_POST['MaND'],
        'Ho' =>    $_POST['Ho'],
        'Ten'  =>   $_POST['Ten'],
        'GioiTinh' => $_POST['GioiTinh'],
        'SDT' => $_POST['SDT'],
        'Email' =>    $_POST['Email'],
        'DiaChi'  =>   $_POST['DiaChi'],
        'TaiKhoan' => $_POST['TaiKhoan'],
        'MatKhau' => md5($_POST['MatKhau']),
        'MaQuyen' =>  '1',
        'TrangThai'  =>  '1',
    );
    foreach ($data as $key => $value) {
        if (strpos($value, "'") != false) {
            $value = str_replace("'", "\'", $value);
            $data[$key] = $value;
        }
    }
    $this->account_md->update($data);
    header('Location:?act=view-acc');
  }
}
