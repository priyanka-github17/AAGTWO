<?php 



$servername = "localhost";
$username = "coacteh9_coact";
$password = "Coact@2020#";
$dbname = "aag";
  

$score = $_GET['s'];






// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$points_field = 'posttest6';
$user_email = $_GET['e'];

$sql = "SELECT * FROM tbl_users where emailid='$user_email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // check for points to update
  $row = $result->fetch_assoc();

  $total_points = $row['posttestscore6']; 
if(!empty($points_field)) {
    if ($row[$points_field] == 0 ){
      $total_points += $score;
      $sql = "UPDATE tbl_users SET $points_field='1' , posttestscore6 = '$total_points' WHERE emailid='$user_email'";
      $conn->query($sql);
    } 
    else if ($row[$points_field] == 1 ){
      $total_points = $score;
      $sql = "UPDATE tbl_users SET $points_field='1' , posttestscore6 = '$total_points' WHERE emailid='$user_email'";
      $conn->query($sql);
    } 
  }

}

$conn->close(); 
echo '1';


?>


