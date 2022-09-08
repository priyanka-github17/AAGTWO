<?php
require_once '../functions.php';
require_once 'logincheck.php';

$errors = [];
$succ = '';

$exhib_id = '0';
$res_title = '';
$res_url = '';

if ($_GET['ac'] == 'edit') {
  $videoId = $_GET['id'];
  $exhib = new Exhibitor();
  $exhib->__set('video_id', $videoId);
  $editvideo = $exhib->getVideo();
  //var_dump($editvideo);
  if (!empty($editvideo)) {
    $exhib_id = $editvideo[0]['exhib_id'];;
    $video_title = $editvideo[0]['video_title'];;
    $video_url = $editvideo[0]['video_url'];;
  } else {
    header('location: exhibitors.php');
  }


  if (isset($_POST['btn-editvideo'])) {
    if ($_POST['editexhibid'] == '0') {
      $errors['exhib'] = 'Select Exhibitor';
    }

    if (empty($_POST['editvideoTitle'])) {
      $errors['title'] = 'Video title is required';
    }
    if (empty($_POST['editvideoUrl'])) {
      $errors['url'] = 'Video URL is required';
    }

    $exhib_id =   $_POST['editexhibid'];
    $video_title =   $_POST['editvideoTitle'];
    $video_url =   $_POST['editvideoUrl'];


    if (count($errors) == 0) {
      $exhib = new Exhibitor();
      $exhib->__set('video_id', $videoId);
      $exhib->__set('exhib_id', $exhib_id);
      $exhib->__set('video_title', $video_title);
      $exhib->__set('video_url', $video_url);


      $upd = $exhib->updVideo();
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


if (isset($_POST['btn-addres'])) {

  if ($_POST['exhibid'] == '0') {
    $errors['exhib'] = 'Select Exhibitor';
  }

  if (empty($_POST['resTitle'])) {
    $errors['title'] = 'Resource title is required';
  }
  if (empty($_POST['resUrl'])) {
    $errors['url'] = 'Resource URL is required';
  }

  if (count($errors) == 0) {
    $exhib_id =   $_POST['exhibid'];
    $res_title =   $_POST['resTitle'];
    $res_url =   $_POST['resUrl'];

    $exhib = new Exhibitor();
    $exhib->__set('exhib_id', $exhib_id);
    $exhib->__set('res_title', $res_title);
    $exhib->__set('res_url', $res_url);

    $add = $exhib->addExhibRes();
    //var_dump($add);
    $reg_status = $add['status'];

    if ($reg_status == "success") {
      $succ = $add['message'];
      $exhib_id = '0';
      $res_title = '';
      $res_url = '';
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
            <?php
            $exhib = new Exhibitor();
            $exhibList = $exhib->getExhibitors();
            if (empty($exhibList)) {
              header('location: exhib.php?ac=add');
            }
            ?>
            <select name="exhibid" id="exhibid" class="form-control">
              <option value="0" <?= ($exhib_id == '0') ? 'selected' : '' ?>>Select Exhibitor</option>
              <?php
              foreach ($exhibList as $a) {
              ?>
                <option value="<?= $a['exhib_id'] ?>" <?= ($exhib_id == $a['exhib_id']) ? 'selected' : '' ?>><?= $a['exhib_name'] ?></option>
              <?php
              }
              ?>
            </select>
          </div>
          <div class="form-group">
            <input type="text" name="resTitle" id="restitle" class="form-control" value="<?= $res_title ?>" placeholder="Enter Resource Title">
          </div>
          <div class="form-group">
            <input type="text" name="resUrl" id="resUrl" class="form-control" value="<?= $res_url ?>" placeholder="Enter Resource URL">
          </div>
          <div class="form-group">
            <button class="btn btn-primary" type="submit" name="btn-addres">Add Resource</button>
          </div>
        </form>
      <?php }
      if ($_GET['ac'] == 'edit') { ?>
        <form method="post" action="" class="form">
          <div class="form-group">
            <?php
            $exhib = new Exhibitor();
            $exhibList = $exhib->getExhibitors();
            if (empty($exhibList)) {
              header('location: exhib.php?ac=add');
            }
            ?>
            <select name="editexhibid" id="editexhibid" class="form-control">
              <option value="0" <?= ($exhib_id == '0') ? 'selected' : '' ?>>Select Exhibitor</option>
              <?php
              foreach ($exhibList as $a) {
              ?>
                <option value="<?= $a['exhib_id'] ?>" <?= ($exhib_id == $a['exhib_id']) ? 'selected' : '' ?>><?= $a['exhib_name'] ?></option>
              <?php
              }
              ?>
            </select>
          </div>
          <div class="form-group">
            <input type="text" name="editvideoTitle" id="editvideotitle" class="form-control" value="<?= $video_title ?>" placeholder="Enter Video Title">
          </div>
          <div class="form-group">
            <input type="text" name="editvideoUrl" id="editvideoUrl" class="form-control" value="<?= $video_url ?>" placeholder="Enter Video URL">
          </div>
          <div class="form-group">
            <button class="btn btn-primary" type="submit" name="btn-editvideo">Update Video</button>
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