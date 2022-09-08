<?php
require_once "../functions.php";

$user = new User();
$user_logins = $user->getUserLogins();
//var_dump($user_logins);
$data = array();
if (!empty($user_logins)) {
  $i = 0;
  foreach ($user_logins as $c) {
    $data[$i]['First Name'] = $c['first_name'];
    $data[$i]['Last Name'] = $c['last_name'];
    $data[$i]['E-mail ID'] = $c['emailid'];
    $data[$i]['Login Time'] = $c['join_time'];
    $data[$i]['Logout Time'] =$c['leave_time'];

    $i++;
  }

  $filename = "UserVisits.xls";
  header("Content-Type: application/vnd.ms-excel");
  header("Content-Disposition: attachment; filename=\"$filename\"");
  ExportFile($data);
}
