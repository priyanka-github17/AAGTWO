<?php
require_once 'functions.php';


$errors = [];
$succ = '';

$title = '';
$fname = '';
$lname = '';
$emailid = '';
$mobile = '';
$pincode = '';
$country = 0;
$state = 0;
$city = 0;
$speciality='';
$topics = '';
$updates = '';
$app = '0';

$topicsArr = [];
$updatesArr = [];


  
// if (!empty($_GET['firstname'])) {
//     $fname = $_GET['first_name'];
// }else{
//      $errors['login'] ="First Name Not Provided";
// }

// if (!empty($_GET['lastname'])) {
//     $lname = $_GET['last_name'];
// }else{
//     $errors['login'] ="Last Name Not Provided";
// }

// if (!empty($_GET['email_id'])) {
//     $emailid = $_GET['email_id'];
//     }else{
//     $errors['login'] ="Email ID Not Provided";
// }

// if (!empty($_GET['phone_no'])) {
//     $mobile = $_GET['phone_no'];
//     }else{
//     $errors['login'] ="Mobile Number Not Provided";
//  }

// if (!empty($_GET['speciality'])) {
//     $specialty = $_GET['speciality'];
//     }else{
//     $errors['login'] ="Speciality Not Provided";
// }

// if (!empty($_GET['country'])) {
//     $country = $_GET['country'];
//     }else{
//     $errors['login'] ="Country Not Provided";
// }

// if (!empty($_GET['state'])) {
//     $state = $_GET['state'];
//     }else{
//     $errors['login'] ="State Not Provided";
// }

// if (!empty($_GET['city'])) {
//     $city = $_GET['city'];
//     }else{
//     $errors['login'] ="City Not Provided";

// }

    // if (count($errors) == 0) {
    //     $newuser = new User();
    //     $newuser->__set('title', " ");
    //     $newuser->__set('firstname', $fname);
    //     $newuser->__set('lastname', $lname);
    //     $newuser->__set('emailid', $emailid);
    //     $newuser->__set('mobilenum', $mobile);
    //     $newuser->__set('country', $country);
    //     $newuser->__set('state', $state);
    //     $newuser->__set('city', $city);
    //     $newuser->__set('pincode', 1);
    //     $newuser->__set('verified', 1);
    //     $newuser->__set('specialty', $specialty);
    //     $newuser->__set('updates', " ");
    // }
    // else{
    //   //  $errors['login'] =" You are not  a Vkonnect Health user , please register on Vkonnect Health";
    // }


    // elseif($obj->data->firstname==="null")
    // {
    //     $errors['login']="user not found in app";
    // }
    // elseif($obj->data->lastname==="null")
    // {
    //     $errors['login']="user not found in app";
    // }
    // elseif($obj->data->email==="null"){
    //   $errors['login']="user not found in app";
    // }
    // elseif($obj->data->phone==="null"){
    //   $errors['login']="user not found in app";
    // }
    // elseif($obj->data->countryCode==="null"){
    //   $errors['login']="user not found in app";
    // }
    // elseif($obj->data->_stateId==="null"){
    //   $errors['login']="user not found in app";
    // }
    // elseif($obj->data->_cityId==="null"){
    //   $errors['login']="user not found in app";
    // }
    // elseif($obj->data->speciality==="null"){
    //   $errors['login']="user not found in app";
    // }

if (isset($_POST['loginuser-btn'])) {
  if (empty($_POST['emailid'])) {
    $errors['email'] = 'Enter your mobile number ';
  }

  $emailid = $_POST['emailid'];

  $data = array(
    "phone" => $emailid,
  );
$payload = json_encode($data);
// Prepare new cURL resource
$ch = curl_init('https://1cndra1rq3.execute-api.ap-south-1.amazonaws.com/networking/authenticateUser');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLINFO_HEADER_OUT, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS,$payload);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
// Set HTTP Header for POST request
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json')
);
// Submit the POST request
$result = curl_exec($ch);
// print $result;
$obj = json_decode($result);
// print $obj->status;
// print $obj->data->firstname;
// print $obj->data->lastname;

// print $result.status;
if ($result === false) {
    // throw new Exception('Curl error: ' . curl_error($crl));
    // print_r('Curl error: ' . curl_error($ch));
    $result_noti = 0; 
} 
  else
  {
    $fname= $obj->data->firstname;
    $lname= $obj->data->lastname;
    $emailid= $obj->data->email;
    $mobile= $obj->data->phone;
    // $country= $obj->data->countryCode;
    $state= $obj->data->_stateId;
    $city= $obj->data->_cityId;
    $speciality=$obj->data->speciality;
    // print_r('Curl success: ' . curl_error($ch));
    $result_noti = 1; 
}


// Close cURL session handle
  curl_close($ch);

  $newuser = new User();
  $newuser->__set('title', " ");
  $newuser->__set('firstname', $fname);
  $newuser->__set('lastname', $lname);
  $newuser->__set('emailid', $emailid);
  $newuser->__set('mobilenum', $mobile);
  // $newuser->__set('country', $country);
  $newuser->__set('state', $state);
  $newuser->__set('city', $city);
  $newuser->__set('pincode', 1);
  $newuser->__set('verified', 1);
  $newuser->__set('specialty', $speciality);
  // $newuser->__set('updates', " ");
  if (count($errors) == 0) {

   // $user = new User();
  //  $user->__set('emailid', $emailid);
    $login = $newuser->userLogin();
    //var_dump($login);
    $reg_status = $login['status'];
    if ($reg_status == "error") {
      $errors['login'] = $login['message'];
    }
  // }
}}
?>

<?php require_once 'header.php';  ?>
<link rel="stylesheet" href="./assets/css/styles2.css">
<style>

</style>

<body id="bglogin">
<div class="container-fluid">
  <!-- <div class="row p-2">
    <div class="col-12 text-center">
      <br/>
    </div>
  </div> -->
  <div class="row mb-1 mt-2">
  <div class="col-12 col-md-2"></div>
    <div class="col-12 col-md-8">
      <img src="assets/img/AAG V Connect Banner 1960 X 1080 px new1.png" class="img-fluid" alt="">
     
   
      <div class="right-area-wrapper">
      
        <div class="row mt-3 p-3">
          <div class="col-12">
          To login, please enter your registered mobile number:
            <?php
            if (count($errors) > 0) : ?>
              <div class="alert alert-danger alert-msg">
                <ul class="list-unstyled">
                  <?php foreach ($errors as $error) : ?>
                    <li>
                      <?php echo $error; ?>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>
            <?php endif; ?>
            
            <form action="" method="post">
              <div class="form-group">
                <input type="text" name="emailid" id="emailid" class="input" placeholder="Enter your Mobile Number" value="<?= $mobile ?>">
              </div>
              <div class="form-group">
                <input type="submit" name="loginuser-btn" id="btnLogin" class="form-submit btn-login" value="Login" />
              </div>
            </form>

          </div>
          
        </div>
        <div id="timer">
          <div class="row mt-3">
            <div class="col-10 offset-1 col-md-6 offset-md-3 p-2">
              <img src="assets/img/comingsoon.png" class="img-fluid" alt="">
            </div>
          </div>
         
          <div class="row">
            <div class="col-12">
              <div id="countdown"></div>
            </div>
          </div>
        </div>
       
      </div>
    </div>
    <div class="col-12 col-md-2"></div>
  </div>
  <!--  <div class="row p-3">
    <div class="col-12 col-md-3 text-center">
      <a href="register.php"><img src="assets/img/register-now.png" class="img-fluid" alt=""></a>
    </div>
    <div class="col-12 col-md-3 offset-md-1 text-center">
      <a class="agenda" href="assets/resources/conf-agenda.pdf"><img src="assets/img/agenda.png" class="img-fluid" alt=""></a>
    </div>
  </div> -->
</div>
<!-- <div id="code">IPL/O/BR/09042021</div> -->
</body>
<script src="//code.jquery.com/jquery-latest.js"></script>
<script src="assets/js/mag-popup.js"></script>
<script type="text/javascript" src="assets/js/jquery.syotimer.min.js"></script>
<script>
  $(document).ready(function() {
    $('.agenda').magnificPopup({
      disableOn: 700,
      type: 'iframe',
      mainClass: 'mfp-fade',
      removalDelay: 160,
      preloader: false,

      fixedContentPos: false
    });
    $('#countdown').syotimer({
      year: 2020,
      month: 12,
      day: 15,
      hour: 20,
      minute: 40,
      timeZone: 0,
      ignoreTransferTime: true,
      layout: 'dhms',
      afterDeadline: function() {
        $('#timer').fadeOut();
      }

    });

  });
</script>
<?php require_once 'ga.php';  ?>
<?php require_once 'footer.php';  ?>