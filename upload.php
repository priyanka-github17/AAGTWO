<?php
require_once "inc/config.php";
$user_id = $_SESSION['userid'];
//$user_name=$_SESSION['user_name'];
//$user_name = str_replace(' ', '', $user_name);

$filename = $user_id . '_' . date('YmdHis') . '.jpg';

$url = '';
if (move_uploaded_file($_FILES['webcam']['tmp_name'], 'upload/users/' . $filename)) {
    $url = '//' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '/upload/' . $filename;
}


try {
    $web = 'upload/users/' . $filename;
    $template = 'upload/template.jpg';

    list($width, $height) = getimagesize($web);

    $web = imagecreatefromstring(file_get_contents($web));
    $template = imagecreatefromstring(file_get_contents($template));

    imagecopymerge($template, $web, 43, 110, 0, 0, $width, $height, 100);
    header('content-type: image/jpg');

    $id = 'Boot_' . date('YmdHis') . '.jpg';

    imagepng($template, 'upload/final/' . $id);

    $url = 'https://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '/upload/final/' . $id;

    echo $url;
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
