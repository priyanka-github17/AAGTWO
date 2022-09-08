<?php
require_once "../functions.php";
$title = 'AAG';

$member = new User();
$list = $member->getAllMemberList();
//var_dump($list);

$i = 0;
$data = array();
$ev = new Event();

foreach ($list as $user) {
  // $country = '';
  // $state = '';
  // $city = '';
  // if ($user['country'] != '0') {
  //   $country =  $ev->getCountry($user['country']);
  // }
  // if ($user['state'] != '0') {
  //   $state =  $ev->getState($user['state']);
  // }
  // if ($user['city'] != '0') {
  //   $city =  $ev->getCity($user['city']);
  // }

  $data[$i]['Name'] = $user['title'] . ' ' . $user['first_name'] . ' ' . $user['last_name'];
  $data[$i]['E-mail ID'] = $user['emailid'];
  $data[$i]['Mobile No.'] = $user['phone_num'];
  // $data[$i]['Country'] = $user['country'];
  $data[$i]['State'] = $user['state'];
  $data[$i]['City'] = $user['city'];
  // $data[$i]['Topics of Interest'] = $user['topic_interest'];
  $data[$i]['specialty'] = $user['specialty'];
  $data[$i]['Register No:'] = $user['doctors_id'];
  $data[$i]['pretest1 (module1)'] = $user['is_joy'];
  $data[$i]['pretestscore1 (module1)'] = $user['score'];
  $data[$i]['posttest1 (module1)'] = $user['posttest'];
  $data[$i]['posttestscore1 (module1)'] = $user['posttestscore'];

  $data[$i]['pretest2 (module2)'] = $user['pretest'];
  $data[$i]['pretestscore2 (module2)'] = $user['pretestscore'];
  $data[$i]['posttest2 (module2)'] = $user['posttest1'];
  $data[$i]['posttestscore2 (module2)'] = $user['posttestscore1'];

  $data[$i]['pretest3 (module3)'] = $user['pretest2'];
  $data[$i]['pretestscore3 (module3)'] = $user['pretestscore2'];
  $data[$i]['posttest3 (module3)'] = $user['posttest3'];
  $data[$i]['posttestscore4 (module4)'] = $user['posttestscore3'];

  $data[$i]['pretest4 (module4)'] = $user['pretest3'];
  $data[$i]['pretestscore4 (module4)'] = $user['pretestscore3'];
  $data[$i]['posttest4 (module4)'] = $user['posttest4'];
  $data[$i]['posttestscore4 (module4)'] = $user['posttestscore4'];

  $data[$i]['pretest5 (module5)'] = $user['pretest4'];
  $data[$i]['pretestscore5 (module5)'] = $user['pretestscore4'];
  $data[$i]['posttest5 (module5)'] = $user['posttest5'];
  $data[$i]['posttestscore5 (module5)'] = $user['posttestscore5'];


  $data[$i]['pretest6 (module6)'] = $user['pretest5'];
  $data[$i]['pretestscore6 (module6)'] = $user['pretestscore5'];
  $data[$i]['posttest6 (module6)'] = $user['posttest6'];
  $data[$i]['posttestscore6 (module6)'] = $user['posttestscore6'];


  // $data[$i]['Registration Number'] = $user['doctors_id'];
  $data[$i]['Time of Registration'] = $user['reg_date'];
  $data[$i]['Last Login'] = $user['login_date'];
  $data[$i]['Last Logout'] = $user['logout_date'];

  


  $i++;
}
$filename = $title . "_users.xls";
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=\"$filename\"");
ExportFile($data);
