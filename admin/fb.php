<?php
require_once "../functions.php";
$title = 'BOOT2021';

$fb = new Feedback();
$fbList = $fb->getFeedbacks();
//var_dump($fbList);

$i = 0;
$data = array();
$member = new User();
if (!empty($fbList)) {
  foreach ($fbList as $user) {
    $member->__set('user_id', $user['userid']);
    $userInfo = $member->getUser();

    $data[$i]['Name'] = $userInfo[0]['title'] . ' ' . $userInfo[0]['first_name'] . ' ' . $userInfo[0]['last_name'];
    $data[$i]['E-mail ID'] = $userInfo[0]['emailid'];
    $data[$i]['Q01'] = $user['q01'];
    $data[$i]['Q02'] = $user['q02'];
    $data[$i]['Q03'] = $user['q03'];
    $data[$i]['Q04'] = $user['q04'];
    $data[$i]['Q05'] = $user['q05'];
    $data[$i]['Q06'] = $user['q06'];
    $data[$i]['Q07'] = $user['q07'];
    $data[$i]['Q08'] = $user['q08'];
    $data[$i]['Q09'] = $user['q09'];
    $data[$i]['Q10'] = $user['q10'];
    $data[$i]['Q11'] = $user['q11'];
    $data[$i]['Q12'] = $user['q12'];
    $data[$i]['Q13'] = $user['q13'];
    $data[$i]['Q14'] = $user['q14'];
    $data[$i]['Q15'] = $user['q15'];
    $data[$i]['Q16'] = $user['q16'];
    $data[$i]['Q17'] = $user['q17'];
    $data[$i]['Q18'] = $user['q18'];
    $data[$i]['Q19'] = $user['q19'];
    $data[$i]['Q20'] = $user['q20'];
    $data[$i]['Q21'] = $user['q21'];
    $data[$i]['Q22'] = $user['q22'];
    $data[$i]['Q23'] = $user['q23'];
    $data[$i]['Q24'] = $user['q24'];
    $data[$i]['Q25'] = $user['q25'];
    $data[$i]['Q26'] = $user['q26'];
    $data[$i]['Q27'] = $user['q27'];
    $data[$i]['Q28'] = $user['q28'];
    $data[$i]['Q29'] = $user['q29'];
    $data[$i]['Feedback Time'] = $user['feedback_time'];
    $i++;
  }
}
$filename = $title . "_feedbacks.xls";
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=\"$filename\"");
ExportFile($data);
