<?php
//use Genseer\User;
require_once "config.php";
require_once 'model/functions.php';

$loginEmail = '';
$errors =[];

$succ = false;

if (isset($_POST['mainlogin-btn'])) {
  if (empty($_POST['loginEmail'])) {
        $errors['email'] = 'Email ID is required';
  }
  
  $loginEmail = $_POST['loginEmail'];  
  
  if (count($errors) === 0) {

    $member = new User();
    $response = $member->loginMember($loginEmail);
    $errors['msg'] = $response;
  }
}
?>