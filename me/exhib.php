<?php
require_once '../functions.php';
require_once 'logincheck.php';

$errors = [];
$succ = '';

$exhibName = '';
$exhibId = '';

if ($_GET['ac'] == 'edit') {
  $exhibId = $_GET['id'];
  $exhib = new Exhibitor();
  $exhib->__set('exhib_id', $exhibId);
  $editexhib = $exhib->getExhibitor();
  //var_dump($editexhib);
  if (!empty($editexhib)) {
    $exhibName = $editexhib[0]['exhib_name'];
  } else {
    header('location: exhibitors.php');
  }

  if (isset($_POST['btn-editexhib'])) {

    if (empty($_POST['editexhibName'])) {
      $errors['exhib'] = 'Exhibitor Name is required';
    }

    if (count($errors) == 0) {
      $exhibName =   $_POST['editexhibName'];
      $exhib = new Exhibitor();
      $exhib->__set('exhib_name', $_POST['editexhibName']);
      $exhib->__set('exhib_id', $_POST['editexhibId']);

      $upd = $exhib->updExhib();
      //var_dump($upd);
      $reg_status = $upd['status'];

      if ($reg_status == "success") {
        $succ = $upd['message'];
        //$exhibName = '';    
      } else {
        $errors['reg'] = $upd['message'];
      }
    }
  }
}


if (isset($_POST['btn-addexhib'])) {

  if (empty($_POST['exhibName'])) {
    $errors['exhib'] = 'Exhibitor Name is required';
  }

  if (count($errors) == 0) {
    $exhibName =   $_POST['exhibName'];
    $exhib = new Exhibitor();
    $exhib->__set('exhib_name', $_POST['exhibName']);

    $add = $exhib->addExhib();
    //var_dump($add);
    $reg_status = $add['status'];

    if ($reg_status == "success") {
      $succ = $add['message'];
      $exhibName = '';
    } else {
      $errors['reg'] = $add['message'];
    }
  }
}
?>
<?php
require_once 'header.php';
require_once 'nav.php';
?>

<div class="container-fluid">
  <div class="row p-2">
    <div class="col-12 col-md-6 offset-md-3">
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
      <?php if ($succ != '') { ?>
        <div class="alert alert-success alert-msg">
          <?= $succ ?>
        </div>
      <?php } ?>

      <?php if ($_GET['ac'] == 'add') { ?>
        <form method="post" action="" class="form">
          <div class="form-group">
            <input type="text" id="exhibName" name="exhibName" class="form-control" value="<?= $exhibName ?>" required>
          </div>
          <div class="form-group">
            <button class="btn btn-primary" type="submit" name="btn-addexhib">Add Exhibitor</button>
          </div>
        </form>
      <?php }
      if ($_GET['ac'] == 'edit') { ?>
        <form method="post" action="" class="form">
          <div class="form-group">
            <input type="text" id="editexhibName" name="editexhibName" value="<?= $exhibName ?>" class="form-control" required>
          </div>
          <div class="form-group">
            <input type="hidden" id="editexhibId" name="editexhibId" value="<?= $exhibId ?>" class="form-control" required>
            <button class="btn btn-primary" type="submit" name="btn-editexhib">Update Exhibitor</button>
          </div>
        </form>
      <?php } ?>
    </div>

  </div>

</div>

<?php
require_once 'scripts.php';
?>
<?php
require_once 'footer.php';
?>