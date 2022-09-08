<?php
require_once "../logincheck.php";
$curr_room = 'digital_cert';
$id = $_SESSION['userid'];
$img = imagecreatefromjpeg('temp\image.jpg');
$white = imagecolorallocate($img, 255, 255, 255);
$font = "C:\Windows\Fonts\arial.ttf";
imagettftext($img, 55, 0, 1600, 1000, $white, $font, $user_name);

imagejpeg($img, "cert/Boot_crt_" . $user_name . $id . ".JPG", 100);

$url = 'https://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '/cert/Boot_crt_' . $user_name . $id . ".JPG";
?>

<body>
    <?php
    //echo "<script type=\"text/javascript\">window.open('".$url."','_blank');</script>";
    ?>
    <a href="../lobby.php">Back</a>
    <a href="<?= $url; ?>" id="link" target="_blank" download><img src="<?= $url; ?>" width="150" /></a><br>
    <small>(Right-click and select Save link as)</small><br><br>
</body>