<?php
define('UPLOAD_DIR', 'photobooth/');

$img = $_POST['imgBase64'];
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$data = base64_decode($img);
$file = UPLOAD_DIR . uniqid() . '.png';
$succes = file_put_contents($file, $data);

$https =  (!empty($_SERVER['HTTPS'])) ? 'https' : 'http';
$url = $https . '://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '/' . $file;
echo $url;
