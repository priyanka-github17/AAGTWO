<?php
require_once "../functions.php";

$session_id = $_GET['s'];

$sess = new Session();
$sess->__set('session_id', $session_id);
$session = $sess->getSession();
$title = $session[0]['session_title'];

$list = $sess->getAttendeesList();
//var_dump($list);

if (!empty($list)) {
  $i = 0;
  foreach ($list as $c) {
    $data[$i]['First Name'] = $c['firstname'];
    $data[$i]['Last Name'] = $c['lastname'];
    $data[$i]['E-mail ID'] = $c['emailid'];

    $i++;
  }

  $filename = $title . "_attendees.xls";
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
