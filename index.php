<?php
require_once 'functions.php';

$errors = [];
$succ = '';

$emailid = '';

if (isset($_POST['loginuser-btn'])) {
  if (empty($_POST['emailid'])) {
    $errors['email'] = 'Email ID is required';
  }

  $emailid = $_POST['emailid'];

  if (count($errors) == 0) {
    $user = new User();
    $user->__set('emailid', $emailid);
    $login = $user->userLogin();
    //var_dump($login);
    $reg_status = $login['status'];
    if ($reg_status == "error") {
      $errors['login'] = $login['message'];
    }
  }
}
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
                <input type="text" name="emailid" id="emailid" class="input" placeholder="Enter your Mobile Number" value="<?= $emailid?>">
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
    <div class="col-12 col-md-2">
    <a href="register.php">
          <button>Button</button>
        </a>
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