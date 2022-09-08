<?php
require_once "functions.php";
$userid = $_GET['u'];

$member = new User();
$member->__set('user_to', $userid);
$cards = $member->getCards();
//var_dump($cards);

if (!empty($cards)) {
  $i = 0;
  foreach ($cards as $card) {
    $data[$i]['Name'] = $card['first_name'] . ' ' . $card['last_name'];
    $data[$i]['E-mail ID'] = $card['emailid'];
    $data[$i]['Phone No.'] = $card['phone_num'];
    $i++;
  }

  //var_dump($data);
  $filename = "my-cards.xls";
  header("Content-Type: application/vnd.ms-excel");
  header("Content-Disposition: attachment; filename=\"$filename\"");
  ExportFile($data);
}
