<?php
require_once "../inc/config.php";
require_once "../functions.php";
$exh_id = $_GET['e'];

$exhib = new Exhibitor();
$exhib->__set('exhib_id', $exh_id);
$exh = $exhib->getExhibitor();
$title = $exh[0]['exhib_name'];

$list = $exhib->getAttendeesList();
//var_dump($list);
$data = array();
if (!empty($list)) {
  $i = 0;
  foreach ($list as $c) {
    $data[$i]['First Name'] = $c['first_name'];
    $data[$i]['Last Name'] = $c['last_name'];
    $data[$i]['E-mail ID'] = $c['emailid'];
    $data[$i]['Mobile Number'] = $c['phone_num'];
    // $data[$i]['Score'] = $c['score'];
    // $data[$i]['Test Completion'] = $c['is_joy'];


    $i++;
  }
  $filename = $title . "_visitors.xls";
  header("Content-Type: application/vnd.ms-excel");
  header("Content-Disposition: attachment; filename=\"$filename\"");
  ExportFile($data);
}
