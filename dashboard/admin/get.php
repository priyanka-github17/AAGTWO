<?php
$mysqli = mysqli_connect("localhost", "coacteh9_coact", "Coact@2020#", "aag");

$sql = "SELECT * FROM tbl_users";
$result = $mysqli->query($sql);


while($row = $result->fetch_array(MYSQLI_ASSOC)){
  $data[] = $row;
}


$results = ["sEcho" => 1,
        	"iTotalRecords" => count($data),
        	"iTotalDisplayRecords" => count($data),
        	"aaData" => $data ];


echo json_encode($results);
?>