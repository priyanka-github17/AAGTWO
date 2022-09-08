<?php
$exhib = new Exhibitor();
$exhib->__set('exhib_id', $exhib_id);
$a = $exhib->isValidExhib();
if (empty($a)) {
    header('location: lobby.php');
}
if (($a[0]['active'] == '0') || ($a[0]['entry'] == '0')) {
    header('location: lobby.php');
}

$exhib->__set('user_id', $userid);
$exhib->updateUserVisit();
