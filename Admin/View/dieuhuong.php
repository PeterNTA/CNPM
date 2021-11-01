<?php
$act = isset($_GET['act']) ? $_GET['act'] : "home";
switch ($act) {
  case 'home':
        require_once('./Control/home.php');
        $ob = new Home_CT();
        $ob->home();
        include 'View/home/banner.php';
        include 'View/home/chart.php';
    break;
  case 'view-acc':
        include 'View/account/account-view.php';
    break;
  case 'add-acc':
        include 'View/account/add-account.php';
    break;
  case 'view-product':
    include 'View/product/view-product.php';
    break;
  case 'add-product':
    include 'View/product/add-product.php';
    break;
  case 'view-type':
    include 'View/product-type/view-type.php';
    break;
  case 'add-type':
    include 'View/product-type/add-type.php';
    break;
  case 'order':
    include 'View/order/order.php';
    break;
  case 'view-cate':
    include 'View/category/view-cate.php';
    break;
  case 'add-cate':
    include 'View/category/add-cate.php';
    break;
  case 'view-banner':
    include 'View/Banner/view.php';
    break;
  case 'edit-banner':
    include 'View/Banner/edit.php';
    break;
  case 'view-prm':
    include 'View/Sale/view.php';
    break;
  case 'add-prm':
    include 'View/Sale/add.php';
    break;
  }
 ?>
