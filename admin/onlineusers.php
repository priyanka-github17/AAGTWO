<?php
require_once "../functions.php";
$title = 'AAG';

$member = new User();
$list = $member->getOnlineMembers('');
//var_dump($list);

$i = 0;
$data = array();
$ev = new Event();
if (!empty($list)) {
  foreach ($list as $user) {
    // $country = '';
    // $state = '';
    // $city = '';
    // if ($user['country'] != '0') {
    //   $country =  $ev->getCountry($user['country']);
    // }
    // if ($user['state'] != '0') {
    //   $state =  $ev->getState($user['state']);
    // }
    // if ($user['city'] != '0') {
    //   $city =  $ev->getCity($user['city']);
    // }

    $data[$i]['Name'] = $user['title'] . ' ' . $user['first_name'] . ' ' . $user['last_name'];
    $data[$i]['E-mail ID'] = $user['emailid'];
    $data[$i]['Mobile No.'] = $user['phone_num'];
    // $data[$i]['Country'] = $country;
    // $data[$i]['State'] = $state;
    // $data[$i]['City'] = $city;
    // $data[$i]['Topics of Interest'] = $user['topic_interest'];
    // $data[$i]['Updates'] = $user['updates'];
    $data[$i]['Time of Registration'] = $user['reg_date'];

    $i++;
  }
}
$filename = $title . "_onlineusers.xls";
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=\"$filename\"");
ExportFile($data);
