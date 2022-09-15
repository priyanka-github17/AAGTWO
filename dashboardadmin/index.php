<?php
require_once '../functions.php';

$errors = [];
$succ = '';

$username = '';
$password = '';

if (isset($_POST['adminLogin-btn'])) {
  if (empty($_POST['loginUser'])) {
    $errors['user'] = 'Username is required';
  }
  if (empty($_POST['loginPwd'])) {
    $errors['pwd'] = 'Password is required';
  }

  $username = $_POST['loginUser'];
  $password = $_POST['loginPwd'];
  $role = 'admin';
  if (count($errors) == 0) {
    $admin = new Admin();
    $admin->__set('username', $_POST['loginUser']);
    $admin->__set('password', $_POST['loginPwd']);
    $admin->__set('role', $role);
    $status = $admin->adminLogin();
    //var_dump($status);
    if ($status['status'] == 'error') {
      $errors['login'] = $status['message'];
    } else {
      $_SESSION['admin'] = $username;
      header('location: users.php');
    }
  }
}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">

          <div class="form-wrapper">
          <!-- <h5>Admin Login</h5> -->
          <?php
          if (count($errors) > 0) : 
          ?>
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
          <!-- <form id="login-form" method="post" role="form">
            <div id="login-message"></div>
            <div class="input-group mb-1">
              <input type="text" class="form-control" placeholder="Username" aria-label="Userame" aria-describedby="basic-addon1" name="loginUser" id="loginUser" value="<?php echo $username; ?>" autocomplete="off">
            </div>

            <div class="input-group mb-1">
              <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" name="loginPwd" id="loginPwd" value="<?php echo $password; ?>" autocomplete="off">
            </div>

            <div class="input-group">
              <button id="login" name="adminLogin-btn" class="btn btn-primary btn-sm login-button" type="submit">Login</button>
            </div>

          </form> -->
        </div>


        <form id="login-form" method="post" role="form">
        <div id="login-message"></div>
              <h1>Login Form</h1>
              <!-- <div>
                <input type="text" class="form-control" placeholder="Username" required="" /> -->
                <div class="input-group mb-1">
              <input type="text" class="form-control" placeholder="Username" aria-label="Userame" aria-describedby="basic-addon1" name="loginUser" id="loginUser" value="<?php echo $username; ?>" autocomplete="off">
            </div>
              <!-- </div> 
              <div>-->

              <div class="input-group mb-1">
              <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" name="loginPwd" id="loginPwd" value="<?php echo $password; ?>" autocomplete="off">
            </div>
                <!-- <input type="password" class="form-control" placeholder="Password" required="" />
              </div> -->
              <div>
              <!-- <button id="login" name="adminLogin-btn" class="btn btn-default submit" type="submit">Login</button> -->
              <button id="login" name="adminLogin-btn" class="btn btn-default submit" type="submit">Log in
                
              </button>
                <!-- <a class="reset_pass" href="#">Lost your password?</a> -->
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <!-- <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p> -->

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 4 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 4 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>