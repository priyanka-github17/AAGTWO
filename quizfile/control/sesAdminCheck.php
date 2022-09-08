<?php
   require_once "../inc/config.php";

    if(!isset($_SESSION["admin"]))
	{
        //session_destroy();
		header("location: ./");
		exit;
	}
    if(isset($_GET['action']) && !empty($_GET['action'])) 
    {
        $action = $_GET['action'];
        if($action == "logout")
        {
            unset($_SESSION['admin']);
            header("location: ./");
            exit;
        }

    }
?>