<?php
$mysqli = mysqli_connect("localhost", "root", "", "aag");

$sql = "SELECT * FROM tbl_users";
$result = $mysqli->query($sql);
// print_r($result);exit;


while($row = $result->fetch_array(MYSQLI_ASSOC)){
	//  print_r($row);exit;
  $data[] = $row;
 
}


$results = ["sEcho" => 1,
        	"iTotalRecords" => count($data),
        	"iTotalDisplayRecords" => count($data),
        	"aaData" => $data ];


echo json_encode($results);
?>