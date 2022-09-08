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

<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $event_title ?></title>
  <link rel="stylesheet" href="assets/css/normalize.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="assets/css/jquery-ui.css" />
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
  <div id="mobile-portrait" class="">
    <img src="assets/img/rotatedevice.gif" alt="" class="center-device" />
  </div>

  <div class="container-fluid">
    <div class="row p-2">
      <div class="col-12 text-center">
        <br />
      </div>
    </div>
    <div class="row mb-1">
      <div class="col-12 col-md-7">
        <a href="0012313424325.php">
          <img src="assets/img/login-banner.png" class="img-fluid" alt="">
        </a>
        <br>
        <div class="form-wrapper bg-white p-3 my-2">
          If already registered, please login here:
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
              <input type="text" name="emailid" id="emailid" class="input" placeholder="Enter your Email ID" value="<?= $emailid ?>">
            </div>
            <div class="form-group">
              <input type="submit" name="loginuser-btn" id="btnLogin" class="form-submit btn-login" value="Login" />
            </div>
          </form>
        </div>

      </div>
      <div class="col-12 col-md-5">
        <div class="right-area-wrapper">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="" src="https://player.vimeo.com/video/539007432?autoplay=1&amp;loop=1&amp;muted=1 " width="100%" height="100%" frameborder="0" allow="autoplay; fullscreen" allowfullscreen=""></iframe>
          </div>
          <div id="timer">
            <!-- <div class="row mt-3">
            <div class="col-10 offset-1 col-md-6 offset-md-3 p-2">
              <img src="assets/img/comingsoon.png" class="img-fluid" alt="">
            </div>
          </div> -->

            <div class="row">
              <div class="col-12">
                <div id="countdown"></div>
              </div>
            </div>
          </div>
          <div class="text-center my-2">
            For assistance:<br>
            <i class="fas fa-phone-square-alt"></i> +917314-855-655
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

      $('#countdown').syotimer({
        year: 2021,
        month: 5,
        day: 7,
        hour: 12,
        minute: 30,
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