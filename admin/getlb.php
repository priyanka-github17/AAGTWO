<?php
require_once "../functions.php";
$title = 'BOOT2021';

$board = new Leaderboard();
$leaders = $board->getLeaderboard();
//var_dump($leaders);

$i = 0;
$data = array();
$ev = new Event();
$member = new User();
if (!empty($leaders)) {
  foreach ($leaders as $user) {
    $member->__set('user_id', $user['user_id']);
    $userInfo = $member->getUser();

    $data[$i]['Name'] = $userInfo[0]['title'] . ' ' . $userInfo[0]['first_name'] . ' ' . $userInfo[0]['last_name'];
    $data[$i]['E-mail ID'] = $userInfo[0]['emailid'];
    $data[$i]['Total Points'] = $user['total'];
    $i++;
  }
}
$filename = $title . "_leaderboard.xls";
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=\"$filename\"");
ExportFile($data);
