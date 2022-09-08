<?php
require_once "../functions.php";
$exh_id = $_GET['e'];

$exhib = new Exhibitor();
$exhib->__set('exhib_id', $exh_id);
$exh = $exhib->getExhibitor();
$title = $exh[0]['exhib_name'];

$reqList = $exhib->getRequests();
// var_dump($reqList);
$data = array();

if (!empty($reqList)) {
  $i = 0;
  foreach ($reqList as $c) {
    $data[$i]['First Name'] = $c['first_name'];
    $data[$i]['Last Name'] = $c['last_name'];
    $data[$i]['E-mail ID'] = $c['emailid'];
    $data[$i]['Requested For'] = $c['request_for'];

    $i++;
  }

  //var_dump($data);
  $filename = $title . "_requests.xls";
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
