<?php
require_once "../functions.php";
$res_id = $_GET['e'];

$exhib = new Exhibitor();
$exhib->__set('res_id', $res_id);
$res = $exhib->getResource();
$title = $res[0]['resource_title'];

$dlList = $exhib->getResDownloads();
//var_dump($dlList);

$data = array();
if (!empty($dlList)) {
  $i = 0;
  foreach ($dlList as $c) {
    $data[$i]['First Name'] = $c['firstname'];
    $data[$i]['Last Name'] = $c['lastname'];
    $data[$i]['E-mail ID'] = $c['emailid'];

    $i++;
  }

  //var_dump($data);
  $filename = $title . "_downloads.xls";
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
