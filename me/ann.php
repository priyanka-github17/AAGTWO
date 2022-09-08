<?php
require_once '../functions.php';
require_once 'logincheck.php';

$errors = [];
$succ = '';

$title = '';
$content = '';
$ann_id = '';

if ($_GET['ac'] == 'edit') {
  $ann_id = $_GET['id'];
  $ann = new Announcement();
  $ann->__set('ann_id', $ann_id);
  $editann = $ann->getAnnouncement();
  //var_dump($editann);
  if (!empty($editann)) {
    $title = $editann[0]['title'];
    $content = $editann[0]['content'];
  } else {
    header('location: announcements.php');
  }

  if (isset($_POST['btn-editann'])) {

    if (empty($_POST['edittitle'])) {
      $errors['title'] = 'Title is required';
    }

    if (empty($_POST['editcontent'])) {
      $errors['content'] = 'Content is required';
    }
    $title =   $_POST['edittitle'];
    $content =   $_POST['editcontent'];
    if (count($errors) == 0) {
      $ann = new Announcement();
      $ann->__set('ann_id', $ann_id);
      $ann->__set('title', $title);
      $ann->__set('content', $content);

      $upd = $ann->updAnnouncement();
      //var_dump($upd);
      $reg_status = $upd['status'];

      if ($reg_status == "success") {
        $succ = $upd['message'];
        //$title = '';    
      } else {
        $errors['reg'] = $upd['message'];
      }
    }
  }
}


if (isset($_POST['btn-addann'])) {

  if (empty($_POST['title'])) {
    $errors['title'] = 'Title is required';
  }

  if (empty($_POST['content'])) {
    $errors['content'] = 'Content is required';
  }

  if (count($errors) == 0) {
    $title =   $_POST['title'];
    $content =   $_POST['content'];
    $ann = new Announcement();
    $ann->__set('title', $title);
    $ann->__set('content', $content);

    $add = $ann->addAnnouncement();
    //var_dump($add);
    $reg_status = $add['status'];

    if ($reg_status == "success") {
      $succ = $add['message'];
      $title = '';
      $content = '';
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
            <input placeholder="Enter Title" type="text" id="title" name="title" class="form-control" value="<?= $title ?>">
          </div>
          <div class="form-group">
            <textarea placeholder="Enter Content" name="content" id="content" rows="3" class="form-control"><?= $content ?></textarea>
          </div>
          <div class="form-group">
            <button class="btn btn-primary" type="submit" name="btn-addann">Add Announcement</button>
          </div>
        </form>
      <?php }
      if ($_GET['ac'] == 'edit') { ?>
        <form method="post" action="" class="form">
          <div class="form-group">
            <input type="text" id="edittitle" name="edittitle" value="<?= $title ?>" class="form-control">
          </div>
          <div class="form-group">
            <textarea name="editcontent" id="editcontent" rows="3" class="form-control"><?= $content ?></textarea>
          </div>
          <div class="form-group">
            <button class="btn btn-primary" type="submit" name="btn-editann">Update Announcement</button>
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