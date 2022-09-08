<?php
require_once "logincheck.php";


?>

<?php
// $link = new mysqli("localhost", "coacteh9_coact", "Coact@2020#", "aag");
$link = new mysqli("localhost", "root", "", "aag");
  $doctors_id     = mysqli_real_escape_string($link, $_POST['doctors_id']);
  // $user_name     = mysqli_real_escape_string($link, $_POST['name']);
  // $user_mob     = mysqli_real_escape_string($link, $_POST['mobnum']);
  // $user_loc     = mysqli_real_escape_string($link, $_POST['location']);
  


  // if((trim($doctors_id) == ''))
  // {
  //     echo 'Please enter all details';
  // }
  // else{
    
      $query="select * from tbl_users where emailid ='$user_email' ";
      $res = mysqli_query($link, $query) or die(mysqli_error($link)); 
    
      //echo $query;
      if (mysqli_affected_rows($link) > 0) 
      {
          $row = mysqli_fetch_row($res); 
              
          // $login_date   = date('Y/m/d H:i:s');
          // $logout_date   = date('Y/m/d H:i:s', time() + 30);
          
          try{
              // $today=date("Y/m/d H:i:s");
      
              // $dateTimestamp1 = strtotime($row[5]);
              // $dateTimestamp2 = strtotime($today);
              // //echo $row[5];
              // if ($dateTimestamp1 > $dateTimestamp2)
              // {
              //   echo "-1";
              // }
              // else
              // {
                // $login_date   = date('Y/m/d H:i:s');
                // $logout_date   = date('Y/m/d H:i:s', time() + 30);
  
                $query="UPDATE tbl_users SET doctors_id='$doctors_id' WHERE emailid='$user_email'";
                $res = mysqli_query($link, $query) or die(mysqli_error($link));
                print_r($query);
    exit;
                // $_SESSION['user_email']    = $row[2];
                // $_SESSION['user_name']     = $row[1];
                
                echo "s";
              }
                      
     
              
          // }
          catch(PDOException $e){
            echo $e->getMessage();
          }
              
          
      }
    // }
?>
