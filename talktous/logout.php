<?php
require_once '../inc/config.php';
session_unset($_SESSION['helpdesk']);
header('location: ./');
