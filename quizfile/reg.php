<?php require_once "../logincheck.php";
require_once "../functions.php";  ?>
<?php
// require_once "logincheck.php";
$servername = "localhost";
$username = "coacteh9_coact";
$password = "Coact@2020#";
$dbname = "aag";

 $conn = new mysqli("localhost", "coacteh9_coact", "Coact@2020#", "aag");
// $conn = new mysqli("localhost", "root", "", "aag1");
$doctors_id = $_POST['doctors_id'];

$sql = "UPDATE tbl_users SET doctors_id='$doctors_id' WHERE emailid='$user_email'";
// print_r($sql);exit;
if ($conn->query($sql) === TRUE) {
  header("Location: ./index.php"); /* Redirect browser */
  exit();
    // echo "Record updated successfully";

}
 else {
    echo "Error updating record: " . $conn->error;
}
?>
  