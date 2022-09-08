<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';
require_once "config.php";

$fname ='';
$lname ='';
$email ='';
$phone ='';
$country ='0';
$state = '0';
$city = '0';
$topics ='';
$updates ='';
$isp = '';

$errors=[];
$succ = false;

if (isset($_POST['reguser-btn'])) {
    if (empty($_POST['fname'])) {
        $errors['fname'] = 'First Name required';
    }
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['emailid'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    if(isset($_POST['topic'])){
        $topics = $_POST['topic'];
    }
    if(isset($_POST['updates'])){
        $updates = $_POST['updates'];
    }
    $isp = $_POST['isp'];
    
    if(strlen($phone) != 10)
    {
        $errors['phone_len'] = 'Phone No. must be 10 digits.';
    }
    
    if($country == '0'){
        $errors['country'] = 'Select your country';
    }
    if($state == '0'){
        $errors['state'] = 'Select your state';
    }
    if($city == '0'){
        $errors['city'] = 'Select your city';
    }
    if($isp == '0'){
        $errors['isp'] = 'Select your Mobile Internet Service Provider';
    }

    
    $token = bin2hex(random_bytes(50)); // generate unique token
    $reg_date   = date('Y/m/d H:i:s');
    $token_exp_date  = date('Y/m/d H:i:s', time() + 60*60*24);
    $verified = 0;
    $active = 1;
    
    // Check if email already exists
    $sql = "SELECT * FROM tbl_users WHERE emailid='$email' LIMIT 1";
    $result = mysqli_query($link, $sql);
    if (mysqli_affected_rows($link) > 0) {
        $errors['email'] = "You are already registereds.";
    }
    //echo mysqli_affected_rows($link);

    if (count($errors) === 0) {
            if ($stmt = mysqli_prepare($link, "INSERT INTO tbl_users(first_name, last_name, emailid, country, state, city, phone_num,  reg_date, token, token_expire,verified, active) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)")) {
            mysqli_stmt_bind_param($stmt,'sssiiisssssii',  $fname, $lname, $email, $country, $state, $city, $phone, $isp, $reg_date, $token, $token_exp_date, $verified, $active );
            $result =mysqli_stmt_execute($stmt);
        
            if ($result) {
                $user_id = $stmt->insert_id;
                $stmt->close();
                
                $topic="";  
                if(isset($_POST['topic'])){
                  foreach($topics as $chk1)  
                   {  
                      $topic .= $chk1.",";  
                   }
                  $topic = rtrim($topic,",");
                }
                 
                $update="";  
                if(isset($_POST['updates'])){
                  foreach($updates as $chk1)  
                   {  
                      $update .= $chk1.",";  
                   } 
                  $update = rtrim($update,",");  
                }
                
                $sql = "update tbl_users set topic_interest='$topic', updates='$update' where id='$user_id'";
                mysqli_query($link, $sql);
                
                
                
                //send email
                $mail = new PHPMailer(true);
        
                try {
                    //Server settings
                    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
                    $mail->isSMTP();                                            // Send using SMTP
                    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                    $mail->Username   = 'support@coact.co.in';                     // SMTP username
                    $mail->Password   = 'coact2020';                               // SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
                
                    //Recipients
                    $mail->setFrom('support@coact.co.in', 'BOOT International Live');
                    $mail->addAddress($email, $fname);     // Add a recipient
                
                    // Content
                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mail->Subject = 'Verify your Email-Id for BOOT International Live';
                    
                    $name = $fname. ' ' .$lname;
                    $reglink = "https://coact.live/pharma/verify.php?e=".$email."&t=".$token;
                    $siteurl = 'https://coact.live/pharma/';
                    
                    $message = file_get_contents('https://coact.live/pharma/email_templates/reg-email.html');
                    $message = str_replace('%name%', $name, $message);
                    $message = str_replace('%reglink%', $reglink, $message);
                    $message = str_replace('%siteurl%', $siteurl, $message);
                    
                    $mail->MsgHTML($message);
                    //$mail->AltBody(strip_tags($message));
                
                    //$mail->send();
                    
                } 
                catch (Exception $e) {
                    $errors["mail"] = "Mail could not be sent. Please try again";
                    $errors['mailerror'] =  'Mailer Error: ' . $mail->ErrorInfo;
                }
                
                $succ = true;
    
                //$succ = 'You are successfully registered!';
                //header('location: index.php');
            } 
            else 
            {
                $_SESSION['error_msg'] = "Database error: Could not register user";
            }
            //mysqli_stmt_close($stmt);
        }
        
    }




}

?>