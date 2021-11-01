<?php
 include './Control/session.php';
 Session::checkLogin();
 include './Control/database.php';
 include './Control/format.php';
 ?>

<?php
 /**
  *
  */
 class adminlogin
 {
   private $db;
   private $fm;
   public function __construct()
   {
     $this->db = new Database();
     $this->fm = new Format();
   }
   public function login_admin($adminUser,$adminPass)
   {
     $adminUser = $this->fm->validation($adminUser);
     $adminPass = $this->fm->validation($adminPass);

     $adminUser = mysqli_real_escape_string($this->db->link,$adminUser);
     $adminPass = mysqli_real_escape_string($this->db->link,$adminPass);

     if (empty($adminUser)|| empty($adminPass)) {
       $alert = "Username and Pass much be not empty";
       return $alert;
     }else {
       $query = "SELECT * FROM admin WHERE adminUser='$adminUser' AND adminPass = '$adminPass' LIMIT 1";
       $result = $this->db->select($query);

       if ($result != false) {
         $value = $result->fetch_assoc();
         Session::set('adminlogin',true);
         Session::set('adminID',$value['adminID']);
         Session::set('adminUser',$value['adminUser']);
         Session::set('adminName',$value['adminName']);
         //echo "abc";
         header('Location:index.php');
       }else {
         $alert = "Username and Pass not true";
         return $alert;
       }
     }
   }



 }

 ?>
