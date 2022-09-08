<?php 
require_once "functions.php";

$user_id = $_SESSION['user_id'];
$today   = date('Y/m/d H:i:s');

$halls = new Hall();
$update = $halls->updateMemberExhStatus($exhibitor_id, $user_id);
//var_dump($update);
//$sql = "insert into tbl_exhibitor_visitors(exhibit_hall_id, attendee_id, entry_time) values('$exhibit_hall_id','$user_id','$today')";
//mysqli_query($link, $sql);
//echo $sql;
?>
