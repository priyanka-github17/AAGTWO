<?php
$conn = mysqli_connect("localhost", "coacteh9_coact", "Coact@2020#", "aag");
// $user_email = $_GET['e'];
$result = mysqli_query($conn, "SELECT * FROM tbl_users LIMIT 10");
 
$data = array();
while ($row = mysqli_fetch_object($result))
{
    array_push($data, $row);
} 
echo json_encode($data);
exit();