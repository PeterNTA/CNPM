<?php
use PHPMailer\PHPMailer\PHPMailer;
require_once("Model/mail_db.php");
class Mail_CT
{
    var $mail_md;
    public function __construct()
    {
        $this->mail_md = new mail();
    }
    public function list()
    {
        $data = $this->mail_md->list_all_method();
        require_once("View/index.php");
    }
    public function delete()
    {
    $id = $_GET['id'];
    $this->mail_md->delete($id);
    header('Location:?act=order');
  }
  function detail()
  {
      $id = isset($_GET['id']) ? $_GET['id'] : 1;
      $data = $this->mail_md->detail_mail($id);
      require_once("View/index.php");
  }
  public function go_reply()
    {
    $id = isset($_GET['id']) ? $_GET['id'] : 1;
    $data = $this->mail_md->find($id);
    require_once("View/index.php");
    }
  public function sending(){
    require_once 'PHPMailer/PHPMailer.php';
    require_once 'PHPMailer/SMTP.php';
    require_once 'PHPMailer/Exception.php';
    $email = $_POST['email'];
    $body = $_POST['reply'];
    $subject = "";
    $name = "Kunzz";
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "thienkun0235@gmail.com";
    $mail->Password = "thiendeptrai";
    $mail->Port = 587;
    $mail->Secure = "ssl";
        //email settings
    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress($email);
    $mail->Subject = ("$email ($subject)");
    $mail->Body = $body;

    if($mail->send()){
          header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    else
    {
        $status = "failed";
        $response = "Something is wrong: <br>" . $mail->ErrorInfo;
    }
      exit(json_encode(array("status" => $status, "response" => $response)));

  }
}
