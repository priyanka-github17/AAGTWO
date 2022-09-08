<?php
require_once 'functions.php';

$errors = [];
$succ = '';

$title = '';
$fname = '';
$lname = '';
$emailid = '';
$mobile = '';
$pincode = '';
$country = 0;
$state = 0;
$city = 0;
$topics = '';
$updates = '';
$app = '0';

$topicsArr = [];
$updatesArr = [];


  
if (!empty($_GET['first_name'])) {
    $fname = $_GET['first_name'];
    echo $fname;
    
}

if (!empty($_GET['last_name'])) {
    $lname = $_GET['last_name'];
    echo $lname;
}

if (!empty($_GET['email_id'])) {
    $emailid = $_GET['email_id'];
    echo $emailid;
}

if (!empty($_GET['phone_no'])) {
    $mobile = $_GET['phone_no'];
    echo $mobile;
}

if (!empty($_GET['speciality'])) {
    $specialty = $_GET['speciality'];
    echo $specialty;
}

if (!empty($_GET['country'])) {
    $country = $_GET['country'];
    echo $country;
}

if (!empty($_GET['state'])) {
    $state = $_GET['state'];
    echo $state;
}

if (!empty($_GET['city'])) {
    $city = $_GET['city'];
    echo $city;
}

    if (count($errors) == 0) {
        $newuser = new User();
        $newuser->__set('title', " ");
        $newuser->__set('firstname', $fname);
        $newuser->__set('lastname', $lname);
        $newuser->__set('emailid', $emailid);
        $newuser->__set('mobilenum', $mobile);
        $newuser->__set('country', $country);
        $newuser->__set('state', $state);
        $newuser->__set('city', $city);
        $newuser->__set('pincode', 1);
        $newuser->__set('verified', 1);
        // $newuser->__set('topic_interest', $specialty);
        $newuser->__set('updates', " ");
        
        $add = $newuser->addUser();
        //var_dump($add);
        $reg_status = $add['status'];

        if ($reg_status == "success") {
            echo "added successfully";
            $succ = $add['message'];
            $title = '';
            $fname = '';
            $lname = '';
            $emailid = '';
            $mobile = '';
            $pincode = '';
            $country = 0;
            $state = 0;
            $city = 0;
            $topics = '';
            $updates = '';
            $app = '';
            $topics = '';
            $updates = '';
            $topicsArr = [];
            $updatesArr = [];
        } else {
            echo "Error in registration";
            $errors['reg'] = $add['message'];
        }
    }





?>
<!doctype html>
<html>



