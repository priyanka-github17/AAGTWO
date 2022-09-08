<?php

class Mail
{

  public $emailto;
  public $name;
  public $subject = 'Global Live Summit';
  public $message;

  const MAILHOST = 'smtp.gmail.com';
  const MAILUSER = 'support@coact.co.in';
  const MAILPASS = 'coact2020';
  const MAILEMAIL = 'support@coact.co.in';
  const MAILNAME = 'Global Live Summit';

  function __construct()
  {
    //require_once __ROOT__ . '\assets\vendor\autoload.php';
  }


  public function __get($property)
  {
    if (property_exists($this, $property)) {
      return $this->$property;
    }
  }

  public function __set($property, $value)
  {
    if (property_exists($this, $property)) {
      $this->$property = $value;
    }

    return $this;
  }

  function sendEmail()
  {
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER; 
    $mail->Host       = self::MAILHOST;
    $mail->SMTPAuth   = true;
    $mail->Username   = self::MAILUSER;
    $mail->Password   = self::MAILPASS;
    $mail->SMTPSecure = 'ssl'; //PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    $mail->setFrom(self::MAILEMAIL, self::MAILNAME);
    $mail->addAddress($this->emailto, $this->name);

    $mail->isHTML(true);

    $siteurl = "https://coact.live/GlobalLiveSummit/login.php";

    $this->message = file_get_contents(__DIR__ . '/emails/reg-email.html');
    $this->message = str_replace('%name%', $this->name, $this->message);
    $this->message = str_replace('%siteurl%', $siteurl, $this->message);

    $mail->Subject = $this->subject;
    $mail->MsgHTML($this->message);

    if ($mail->send()) {
      return true;
    
    } else {
      return false;
    }
  }
}
