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
    $data[$i]['First Name'] = $c['firstname'];
    $data[$i]['Last Name'] = $c['lastname'];
    $data[$i]['E-mail ID'] = $c['emailid'];

    $i++;
  }
  $filename = $title . "_visitors.xls";
  header("Content-Type: application/vnd.ms-excel");
  header("Content-Disposition: attachment; filename=\"$filename\"");
  ExportFile($data);
}

/* function ExportFile($records)
{
  $heading = false;
  if (!empty($records))
    foreach ($records as $row) {
      if (!$heading) {
        // display field/column names as a first row
        echo implode("\t", array_keys($row)) . "\n";
        $heading = true;
      }
      echo implode("\t", array_values($row)) . "\n";
    }
  exit;
} */
