<?php include 'View/inc/header.php'; ?>
<?php include 'View/menu.php'; ?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <?php
    $act = isset($_GET['act']) ? $_GET['act'] : "home";
    $run = isset($_GET['run']) ? $_GET['run'] : "list";
    switch ($act) {
      case 'home':
            include 'View/home/banner.php';
            include 'View/home/chart.php';
        break;
      case 'view-acc':
            switch ($run) {
              case 'list':
                include 'View/account/account-view.php';
                break;
              case 'add-acc':
                require_once('View/account/add-account.php');
                break;
              case 'add':
                include 'View/account/account-view.php';
                break;
              case 'edit-acc':
                require_once('View/account/edit.php');
                break;

              case 'edit':
                include 'View/account/account-view.php';
                break;
              default:
              include 'View/account/account-view.php';
              break;
            }
        break;
      case 'mail':
        switch($run){
          case 'list':
            include 'View/mail/inbox.php';
            break;
          case 'compo':
            include 'View/mail/compo.php';
            break;
          case 'read':
            include 'View/mail/read.php';
            break;
          default :
          include 'View/mail/inbox.php';
          break;
        }
        break;
      case 'view-cate':
        switch ($run) {
          case 'list':
            include 'View/category/view-cate.php';
            break;
          case 'delete':
            include 'View/category/view-cate.php';
            break;
          case 'add':
            include 'View/category/add-cate.php';
            break;
          case 'edit':
            include 'View/category/edit.php';
            break;
          default:
            // code...
            break;
        }
        break;
      case 'view-product':
      switch ($run) {
        case 'list':
          include 'View/product/view-product.php';
          break;
        case 'add-product':
          require_once('View/product/add-product.php');
          break;
        case 'add':
          include 'View/product/add-product.php';
          break;
        case 'edit-prod':
          require_once('View/product/edit.php');
          break;
        case 'edit':
          include 'View/account/account-view.php';
          break;
        default:
        include 'View/account/account-view.php';
        break;
      }
        break;
        case 'order':
        switch ($run) {
          case 'list':
              include 'View/order/order.php';
            break;
          case 'detail':
            include 'View/order/detail.php';
            break;
          default:
            break;
        }
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

  </section>
  <?php include 'View/setting.php'; ?>
</div>
<?php include 'View/inc/footer.php'; ?>
