<?php
session_start();
$mod = isset($_GET['act']) ? $_GET['act'] : "home";
switch ($mod) {
    case 'sub':
    require_once('Controllers/subcribe.php');
    $ct = new Subcribe();
    $ct->sub();
    break;
      break;
    case 'home':
        require_once('Controllers/Home.php');
        $ct = new HomeController();
        $ct->list();
        break;
    case 'shop':
        require_once('Controllers/Shop.php');
        $ct = new ShopController();
        $ct->list();
        break;
    case 'checkout':
        $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
        require_once('Controllers/Checkout.php');
        $ct = new CheckoutController();
        switch ($act) {
            case 'list':
                $ct->list();
                break;
            case 'oder':
                $ct->oder();
                break;
            case 'order_complete':
                $ct->order_complete();
                break;
            default:
                $ct->list();
                break;
        }
        break;
    case 'detail':
        $act = isset($_GET['xuli']) ? $_GET['xuli'] : "detail";
        require_once('Controllers/Detail.php');
        $ct = new DetailController();
        switch ($act) {
          case 'detail':
            $ct->list();
            break;
            case 'comment':
            $ct->comment();

            break;
          default:
            $ct->list();
            break;
        }
        break;
    case 'cart':
        $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
        require_once('Controllers/Cart.php');
        $ct = new CartController();
        switch ($act) {
            case 'list':
                $ct->list_cart();
                break;
            case 'update':
                $ct->update_cart();
                break;
            case 'add':
                $ct->add_cart();
                break;
            case 'delete':
                $ct->delete_cart();
                break;
            case 'deleteall':
                $ct->deleteall_cart();
                break;
            default:
                $ct->list_cart();
                break;
        }
        break;
    case 'compare':
        $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
        require_once('Controllers/Compare.php');
        $ct = new CompareController();
        switch ($act) {
            case 'list':
                $ct->list_compare();
                break;
            case 'add':
                $ct->add_compare();
                break;
            case 'deleteall':
                $ct->deleteall_compare();
                break;
            default:
                $ct->list_compare();
                break;
            }
            break;
    case 'wishlist':
        $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
        require_once('Controllers/Wishlist.php');
        $ct = new WishlistController();
        switch ($act) {
            case 'list':
                $ct->list_wish();
                break;
            case 'add':
                $ct->add_wish();
                break;
            case 'deleteall':
                $ct->deleteall_wish();
                break;
            default:
                $ct->list_wish();
                break;
            }
            break;
        case 'contact_mes':
            require_once('Controllers/Lienhe.php');
            $ct = new LienHe();
            $ct->lienhe();
          break;
    case 'taikhoan':
        $act = isset($_GET['xuli']) ? $_GET['xuli'] : "taikhoan";
        require_once('Controllers/Login.php');
        $ct = new LoginController();
        if ((isset($_SESSION['isLogin']) && $_SESSION['isLogin'] == true)) {
            switch ($act) {
                case 'dangxuat':
                    $ct->dangxuat();
                    break;
                case 'account':
                    $ct->account();
                    break;
                case 'update':
                    $ct->update();
                    break;
                default:
                    header('location: ?act=error');
                    break;
            }
            break;
        } else {
            if ((isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) || (isset($_SESSION['isLogin_Nhanvien']) && $_SESSION['isLogin_Nhanvien'] == true)) {
                switch ($act) {
                    case 'dangxuat':
                        $ct->dangxuat();
                        break;
                    case 'account':
                        $ct->account();
                        break;
                    case 'update':
                        $ct->update();
                        break;
                    default:
                        header('location: ?act=error');
                        break;
                }
                break;
            } else {
                switch ($act) {
                    case 'login':
                        $ct->login();
                        break;
                    case 'dangnhap':
                        $ct->login_action();
                        break;
                    case 'dangky':
                        $ct->dangky();
                        break;
                    default:
                        $ct->login();
                        break;
                }
                break;
            }
        }
    default:
        require_once('Controllers/Home.php');
        $ct = new Homecontroller();
        $ct->list();
        break;
}
?>
