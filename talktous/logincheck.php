<?php
require_once '../inc/config.php';

if (!isset($_SESSION['helpdesk'])) {
    //$_SESSION['flash'] = 'Logged out cause of invalid login';
    header('location: ./');
}
