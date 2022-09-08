<?php
require_once "../functions.php";
$video_id = $_GET['e'];

$exhib = new Exhibitor();
$exhib->__set('video_id', $video_id);
$vid = $exhib->getVideo();
$title = $vid[0]['video_title'];

$viewerList = $exhib->getVideoViewers();
//var_dump($viewerList);

$data = array();
if (!empty($viewerList)) {
  $i = 0;
  foreach ($viewerList as $c) {
    $data[$i]['First Name'] = $c['firstname'];
    $data[$i]['Last Name'] = $c['lastname'];
    $data[$i]['E-mail ID'] = $c['emailid'];

    $i++;
  }

  //var_dump($data);
  $filename = $title . "_views.xls";
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
