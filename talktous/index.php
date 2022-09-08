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
  $role = 'helpdesk';
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
      $_SESSION['helpdesk'] = $username;
      header('location: dashboard.php');
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
  <link rel="stylesheet" href="../assets/css/normalize.min.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/all.min.css">
  <link rel="stylesheet" href="../assets/css/admin.css">
</head>

<body>

  <body>
    <div class="container-fluid">
      <div class="row mt-5">
        <div class="col-8 col-md-6 col-lg-4 offset-2 offset-md-3 offset-lg-4">
          <div class="form-wrapper">
            <h5>Helpdesk Login</h5>
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
            <form id="login-form" method="post" role="form">
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

            </form>
          </div>

        </div>
      </div>
    </div>


  </body>

</html>