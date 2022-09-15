<?php
require_once '../inc/config.php';
// session_unset($_SESSION['superadmin']);
// header('location: ./');

session_destroy();
$_SESSION = array();
header('location: ./');
