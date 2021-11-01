<?php
require_once("Model/product_db.php");
class Product_CT
{
    var $product_md;
    public function __construct()
    {
        $this->product_md = new product();
    }
    public function list()
    {
        $data = $this->product_md->list_all_method();
        require_once("View/index.php");
    }
    public function delete()
    {
    $id = $_GET['id'];
    $this->product_md->delete($id);
    header('Location:?act=view-product');
  }
  public function go_add()
  {
    $category = $this->product_md->category();
    $type = $this->product_md->type();
    $promo = $this->product_md->promotion();
    require 'View/index.php';
  }
  public function add()
      {
          $target_dir = "../assets/images/Women/";
          if(isset($_FILES['HinhAnh1'])){
            $target_file = $target_dir.basename($_FILES['HinhAnh1']["name"]);
            $status_upload = move_uploaded_file($_FILES["HinhAnh1"]["tmp_name"], $target_file);
            if ($status_upload) {
                $HinhAnh1 =  "images/Women/" . basename($_FILES["HinhAnh1"]["name"]);
            }
          }
          if(isset($_FILES['HinhAnh2'])){
          $target_file = $target_dir . basename($_FILES["HinhAnh2"]["name"]);
          $status_upload = move_uploaded_file($_FILES["HinhAnh2"]["tmp_name"], $target_file);
          if ($status_upload) {
              $HinhAnh2 =  "images/Women/". basename($_FILES["HinhAnh2"]["name"]);
          }
        }
        if(isset($_FILES['HinhAnh3'])){
          $target_file = $target_dir . basename($_FILES["HinhAnh3"]["name"]);
          $status_upload = move_uploaded_file($_FILES["HinhAnh3"]["tmp_name"], $target_file);
          if ($status_upload) {
              $HinhAnh3 =  "images/Women/" . basename($_FILES["HinhAnh3"]["name"]);
          }
        }
          $TrangThai = 0;
          if (isset($_POST['TrangThai'])) {
              $TrangThai = $_POST['TrangThai'];
          }
          $ThoiGian =  date('Y-m-d H:i:s');
          $data = array(
              'MaLSP' =>    $_POST['MaLSP'],
              'TenSP'  =>   $_POST['TenSP'],
              'MaDM' => $_POST['MaDM'],
              'DonGia' => $_POST['DonGia'],
              'SoLuong' => $_POST['SoLuong'],
              'HinhAnh1' => $HinhAnh1,
              'HinhAnh2' => $HinhAnh2,
              'HinhAnh3' => $HinhAnh3,
              'MaKM' =>  $_POST['MaKM'],
              'SoSao' =>  0,
              'SoDanhGia' => 0,
              'TrangThai' => $TrangThai,
              'MoTa' =>  $_POST['MoTa'],
              'Time' => $ThoiGian
          );
          foreach ($data as $key => $value) {
              if (strpos($value, "'") != false) {
                  $value = str_replace("'", "\'", $value);
                  $data[$key] = $value;
              }
          }
          $this->product_md->add($data);
          header('Location:?act=view-product#');
      }
      public function go_edit()
      {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->product_md->find($id);
        $category = $this->product_md->category();
        $type = $this->product_md->type();
        $promo = $this->product_md->promotion();
        require 'View/index.php';
      }
      public function edit()
      {

          $target_dir = "../assets/images/Women/";
          $HinhAnh1 = "";
          $target_file = $target_dir . basename($_FILES["HinhAnh1"]["name"]);
          $status_upload = move_uploaded_file($_FILES["HinhAnh1"]["tmp_name"], $target_file);
          var_dump(basename($_FILES["HinhAnh1"]["name"]));
          if ($status_upload) {
              $HinhAnh1 = "img/products/" .basename($_FILES["HinhAnh1"]["name"]);
          }

          $HinhAnh2 = "";
          $target_file = $target_dir . basename($_FILES["HinhAnh2"]["name"]);
          $status_upload = move_uploaded_file($_FILES["HinhAnh2"]["tmp_name"], $target_file);
          if ($status_upload) {
              $HinhAnh2 =  "img/products/" . basename($_FILES["HinhAnh2"]["name"]);
          }
          $HinhAnh3 = "";
          $target_file = $target_dir . basename($_FILES["HinhAnh3"]["name"]);
          $status_upload = move_uploaded_file($_FILES["HinhAnh3"]["tmp_name"], $target_file);
          if ($status_upload) {
              $HinhAnh3 =  "img/products/" . basename($_FILES["HinhAnh3"]["name"]);
          }
          $TrangThai = 0;
          if (isset($_POST['TrangThai'])) {
              $TrangThai = $_POST['TrangThai'];
          }
          $ThoiGian =  date('Y-m-d H:i:s');
          $data = array(
              'MaSP' => $_POST['MaSP'],
              'MaLSP' =>    $_POST['MaLSP'],
              'MaDM' => $_POST['MaDM'],
              'TenSP'  =>   $_POST['TenSP'],
              'DonGia' => $_POST['DonGia'],
              'SoLuong' => $_POST['SoLuong'],
              'HinhAnh1' => $HinhAnh1,
              'HinhAnh2' => $HinhAnh2,
              'HinhAnh3' => $HinhAnh3,
              'MaKM' =>  $_POST['MaKM'],
              'SoSao' =>  0,
              'SoDanhGia' => 0,
              'TrangThai' => $TrangThai,
              'MoTa' =>  $_POST['MoTa'],
              'Time' => $ThoiGian
          );
          foreach ($data as $key => $value) {
              if (strpos($value, "'") != false) {
                  $value = str_replace("'", "\'", $value);
                  $data[$key] = $value;
              }
          }
          if ($HinhAnh1 == "") {
              unset($data['HinhAnh1']);
          }
          if ($HinhAnh2 == "") {
              unset($data['HinhAnh2']);
          }
          if ($HinhAnh3 == "") {
              unset($data['HinhAnh3']);
          }
          $this->product_md->update($data);
          
      }
}
