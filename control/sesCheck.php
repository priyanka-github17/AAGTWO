<?php
require_once 'model/config.php';
require_once "model/functions.php";

$userid = '';
$user_name ='';
$user_email = '';

    if(!isset($_SESSION['user_id']))
	{
        session_destroy();
		header("location: ./");
	}
    else{
        $userid = $_SESSION['user_id'];
        $member = new User();
        $user = $member->getMember($userid);
        
        if (!empty($user)) {
            
            $user_name = $user[0]['first_name'].' '.$user[0]['last_name'];
            $user_email = $user[0]['emailid'];
        }
        else{
            session_destroy();
            header("location: ./");
        }
        
    }
    if(isset($_GET['action']) && !empty($_GET['action'])) 
    {
        $action = $_GET['action'];
        if($action == "logout")
        {
            $userid = $_SESSION['user_id'];
            $member = new User();
            $user = $member->userLogout($userid);
        }

    }
?>