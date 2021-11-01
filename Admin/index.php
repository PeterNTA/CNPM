<?php
$act = isset($_GET['act']) ? $_GET['act'] : "home";
$run = isset($_GET['run']) ? $_GET['run'] : "list";
switch ($act) {
  case 'home':
        require_once('Control/home.php');
        $ct = new Home_CT();
        $ct->home();
    break;
  case 'view-acc':
        require_once('Control/account.php');
        $ct = new Account_CT();
      switch ($run) {
        case 'list':
          $ct->list();
          break;
        case 'delete':
          $ct->delete();
          break;
        case 'add-acc':
          $ct->gopage();
          break;
        case 'add':
          $ct->add();
          break;
        case 'edit-acc':
          $ct->go_edit();
          break;
          case 'edit':
          $ct->update();
            break;
        default:

          break;
      }
    break;
  case 'view-product':
      require_once('Control/product.php');
      $ct = new Product_CT();
    switch ($run) {
      case 'list':
        $ct->list();
        break;
      case 'add-product':
        $ct->go_add();
        break;
      case 'edit-prod':
        $ct->go_edit();
        break;
      case 'edit':
        $ct->edit();
        break;
      case 'delete':
        $ct->delete();
        break;
      case 'add':
        $ct->add();
        break;
      default:

        break;
      }
    break;
    case 'mail':
    require_once('Control/mail.php');
    $ct = new Mail_CT();
      switch($run){
        case 'list':
          $ct->list();
          break;
        case 'compo':
            $ct->go_reply();
          break;
        case 'rep':
          $ct->sending();
          break;
        case 'read':
          $ct->detail();
          break;
        default :
        include 'View/index.php';
        break;
      }
      break;
    case 'view-type':
        require_once('Control/product_type.php');
        $ct = new Product_type_CT();
      switch ($run) {
        case 'list':
          $ct->list();
          break;
        case 'delete':
          $ct->delete();
          break;
        }
      break;
    case 'order':
        require_once('Control/order.php');
        $ct = new Order_CT();
        switch ($run) {
          case 'list':
            $ct->list();
            break;
          case 'delete':
            $ct->delete();
            break;
          case 'acp':
            $ct->accept();
            break;
          case 'unacp':
            $ct->unaccept();
            break;
          case 'detail':
            $ct->detail();
            break;
          }
      break;
    case 'view-cate':
        require_once('Control/category.php');
        $ct = new Category_CT();
        switch ($run) {
        case 'list':
          $ct->list();
          break;
        case 'delete':
          $ct->delete();
          break;
        case 'add':
          $ct->goadd();
          break;
        case 'add-cate':
          $ct->add();
          break;
        case 'edit':
          $ct->go_edit();
          break;
        case 'edit-cate':
          $ct->edit();
          break;
        }
    break;
    case 'view-banner':
        require_once('Control/banner.php');
        $ct = new Banner_CT();
        switch ($run) {
        case 'list':
          $ct->list();
          break;
        }
    break;
    }
 ?>
