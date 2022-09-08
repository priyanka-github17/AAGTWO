<?php 

require_once "../logincheck.php";
require_once "../functions.php";


$servername = "localhost";
$username = "coacteh9_coact";
$password = "Coact@2020#";
$dbname = "aag";
  

// $score = $_GET['s'];






// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$points_field = 'posttest1';
// $user_email = $_GET['e'];

$sql = "SELECT * FROM tbl_users where emailid='$user_email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // check for points to update
  $row = $result->fetch_assoc();

  $score1 = $row['posttestscore'];
  $score2 = $row['posttestscore1'];  
  $newValue = ($score1*$score2)/100;
// if(!empty($points_field)) {
//     if ($row[$points_field] == 0 ){
      // $total_points += $score;
      $sql = "UPDATE tbl_users SET updates = '$newValue' WHERE emailid='$user_email'";
      $conn->query($sql);
    } 
 if ($newValue >= 80 ){
      // $total_points = $score;
      // $sql = "UPDATE tbl_users SET $points_field='1' , posttestscore1 = '$total_points' WHERE emailid='$user_email'";
      // $conn->query($sql);
      header("location:../lobby.php");
    } 
  // }

// }

$conn->close(); 



?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
  <h1>hello</h1>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


