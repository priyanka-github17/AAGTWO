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
$topics = '';
$updates = '';
$app = '0';

$topicsArr = [];
$updatesArr = [];


  
if (!empty($_GET['first_name'])) {
    $fname = $_GET['first_name'];
}else{
     $errors['login'] ="First Name Not Provided";
}

if (!empty($_GET['last_name'])) {
    $lname = $_GET['last_name'];
}else{
    $errors['login'] ="Last Name Not Provided";
}

if (!empty($_GET['email_id'])) {
    $emailid = $_GET['email_id'];
    }else{
    $errors['login'] ="Email ID Not Provided";
}

if (!empty($_GET['phone_no'])) {
    $mobile = $_GET['phone_no'];
    }else{
    $errors['login'] ="Mobile Number Not Provided";
 }

if (!empty($_GET['speciality'])) {
    $specialty = $_GET['speciality'];
    }else{
    $errors['login'] ="Speciality Not Provided";
}

if (!empty($_GET['country'])) {
    $country = $_GET['country'];
    }else{
    $errors['login'] ="Country Not Provided";
}

if (!empty($_GET['state'])) {
    $state = $_GET['state'];
    }else{
    $errors['login'] ="State Not Provided";
}

if (!empty($_GET['city'])) {
    $city = $_GET['city'];
    }else{
    $errors['login'] ="City Not Provided";

}

    if (count($errors) == 0) {
        $newuser = new User();
        $newuser->__set('title', " ");
        $newuser->__set('firstname', $fname);
        $newuser->__set('lastname', $lname);
        $newuser->__set('emailid', $emailid);
        $newuser->__set('mobilenum', $mobile);
        $newuser->__set('country', $country);
        $newuser->__set('state', $state);
        $newuser->__set('city', $city);
        $newuser->__set('pincode', 1);
        $newuser->__set('verified', 1);
        $newuser->__set('specialty', $specialty);
        $newuser->__set('updates', " ");
    }else{
       $errors['login'] =" You are not  a Vkonnect Health user , please register on Vkonnect Health";
    }




if (isset($_POST['loginuser-btn'])) {
  if (empty($_POST['emailid'])) {
    $errors['email'] = 'Email ID is required';
  }

  $emailid = $_POST['emailid'];

  if (count($errors) == 0) {
   // $user = new User();
  //  $user->__set('emailid', $emailid);
    $login = $newuser->userLogin();
    //var_dump($login);
    $reg_status = $login['status'];
    if ($reg_status == "error") {
      $errors['login'] = $login['message'];
    }
  }
}
?>

<?php require_once 'header.php';  ?>

<div class="container-fluid">
  <div class="row p-2">
    <div class="col-12 text-center">
      <br/>
    </div>
  </div>
  <div class="row mb-1">
    <div class="col-12 col-md-7">
      <img src="assets/img/11813 Global Live Summit Registration Page EMAIL.jpg" class="img-fluid" alt="">
     
    </div>
    <div class="col-12 col-md-5">
      <div class="right-area-wrapper">
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="" src="integrace.mp4" width="100%" height="100%" frameborder="0" allow="autoplay; fullscreen" allowfullscreen=""></iframe>
        </div>
        <div class="row mt-3">
          <div class="col-12">
          Please login here:
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
<div id="code">IPL/O/BR/09042021</div>
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