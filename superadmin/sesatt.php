<?php
require_once "../functions.php";

$session_id = $_GET['s'];

$sess = new Session();
$sess->__set('session_id', $session_id);
$session = $sess->getSession();
$title = $session[0]['session_title'];

$list = $sess->getAttendeesList();
//var_dump($list);
$ev = new Event();
if (!empty($list)) {
  $i = 0;
  $city = '';
  foreach ($list as $c) {
    // if ($c['city'] != '0') {
    //   $city =  $ev->getCity($c['city']);
    // }
    $data[$i]['First Name'] = $c['first_name'];
    $data[$i]['Last Name'] = $c['last_name'];
    $data[$i]['E-mail ID'] = $c['emailid'];
    $data[$i]['City'] = $city;
    $data[$i]['Join Time'] = $c['join_time'];
    $data[$i]['Leave Time'] = $c['leave_time'];

    $i++;
  }

  $filename = $title . "_attendees.xls";
  header("Content-Type: application/vnd.ms-excel");
  header("Content-Disposition: attachment; filename=\"$filename\"");
  ExportFile($data);
}
