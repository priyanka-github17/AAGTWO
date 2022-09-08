<?php
require_once "../functions.php";
require_once "header.php";
?>

<div class="container-fluid">

  <div class="row p-2">
    <div class="col-12 col-md-4 offset-md-1">
      <h6>Registered Users</h6>
      <?php
      $members = new User();
      $reg_users = $members->getUserCount();
      echo 'Total Registered Users: ' . $reg_users . '<br>';
      $visitors = $members->getVisitorsCount();
      echo 'Total Visitors: ' . $visitors . '<br>';
      ?>
    </div>
    <div class="col-12 col-md-4 offset-md-1">
      <h6>Time Spent </h6>
      <?php
      $time_spent = $members->getTotalTimeSpent();
      echo 'Total Time Spent: ' . secToHR($time_spent) . '<br>';
      $avg = $time_spent / $visitors;
      echo 'Avg. Time Spent: ' . secToHR($avg) . '<br>';

      ?><br>
      <a href="uservisits.php">Login Details</a>
    </div>
  </div>
  <div class="row mt-1 p-2">
    <div class="col-12 col-md-4 offset-md-1">
      <h6>Resources</h6>
      <?php
      $halls = new Exhibitor();
      $res = $halls->getResCount();
      echo 'Total Resources: ' . $res . '<br>';
      $res_dl = $halls->getResDLCount();
      $total_dl = 0;
      if (!empty($res_dl)) {
        $total_dl = $res_dl[0]['total'];
      }
      echo 'Total Downloads: ' . $total_dl . '<br>';

      $res_dl = $halls->getResources();
      //var_dump($res_dl);
      if (!empty($res_dl)) {
      ?>
        <table class="table table-striped">
          <?php
          foreach ($res_dl as $res) {
          ?>
            <tr>
              <td><?php echo '<b>' . $res['exhib_name'] . '</b> - ' . $res['resource_title']; ?></td>
              <td><?php echo $res['download_count']; ?></td>
            </tr>
          <?php
          }
          ?>
        </table>
      <?php
      }
      ?>


    </div>
    <div class="col-12 col-md-4 offset-md-1 report">
      <h6>Videos</h6>
      <?php
      $vids = $halls->getVidCount();
      echo 'Total Videos: ' . $vids . '<br>';
      $vids_views = $halls->getVideoViewsCount();
      echo 'Total Views: ' . $vids_views . '<br>';

      $vid_views = $halls->getVideos();
      //var_dump($vid_views);
      if (!empty($vids_views)) {
      ?>
        <table class="table table-striped">
          <?php
          foreach ($vid_views as $vid) {
            //echo $vid['video_id'];
            //$videos = new Hall();
            //$vidDet = $videos->getExhibVideoDetails($vid['video_id']);
            //var_dump($vidDet);

          ?>
            <tr>
              <td><?php

                  echo '<b>' . $vid['exhib_name'] . '</b> - ' . $vid['video_title'];
                  ?></td>
              <td><?php echo $vid['views']; ?></td>
            </tr>
          <?php
          }
          ?>
        </table>
      <?php
      }
      ?>

    </div>
  </div>

  <div class="row mt-3">
    <div class="col-12 col-md-4 offset-md-1 report">
      <h6>Sessions Attendee Count</h6>
      <?php
      $sessions = new Session();
      $ses_cnt = $sessions->getSessionCount();
      echo 'Total Sessions: ' . $ses_cnt . '<br>';

      $ses_attcnt = $sessions->getSessionAttendees();
      //var_dump($ses_attcnt);
      if (!empty($ses_attcnt)) {
      ?>
        <table class="table table-striped">
          <?php
          foreach ($ses_attcnt as $sess) {
            //$session = new Session();
            //$ses_title = $session->getWebcastSessionTitle($sess['session_id']);
          ?>
            <tr>
              <td><?php echo $sess['session_title']; ?></td>
              <td><?php echo $sess['cnt']; ?></td>
            </tr>
          <?php
          }
          ?>
        </table>
      <?php
      }
      ?>

    </div>
    <div class="col-12 col-md-4 offset-md-1 report">
      <h6>Sessions Attended</h6>
      <?php
      $ses_att = $sessions->getSessionAttended();
      echo 'Total Session Attendees: ' . $ses_att . '<br>';

      $attendees = $sessions->getAttendeeSessions();
      //var_dump($attendees);
      if (!empty($attendees)) {
      ?>
        <table class="table table-striped">
          <?php
          foreach ($attendees as $attendee) {
            $member = new User();
            $member->__set('user_id', $attendee['userid']);
            $user = $member->getUserName();
            //var_dump($user);
          ?>
            <tr>
              <td><?php echo $user; ?></td>
              <td><?php echo $attendee['cnt']; ?></td>
            </tr>
          <?php
          }
          ?>
        </table>
      <?php

      }

      ?>

    </div>
  </div>

  <div class="row mt-3">
    <div class="col-12 col-md-4 offset-md-1 report">
      <h6>Exhibitor Visits</h6>
      <?php
      $halls = new Exhibitor();
      $all_visitors = $halls->getExhVisitorsCount();
      echo 'Total Exhibitor Visitors: ' . $all_visitors . '<br>';

      $visitors_list = $halls->getExhibitorVisitorCount();
      //var_dump($visitors_list);
      if (!empty($visitors_list)) {
      ?>
        <table class="table table-striped">
          <?php
          foreach ($visitors_list as $visitors) {
          ?>
            <tr>
              <td><?php
                  echo $visitors['exhib_name'];
                  ?></td>
              <td><?php echo $visitors['cnt']; ?></td>
            </tr>
          <?php
          }
          ?>
        </table>
      <?php
      }
      ?>
      </table>

    </div>
    <div class="col-12 col-md-4 offset-md-1 report">
      <h6>Exhibitor Visits by Attendees</h6>
      <?php
      $all_visitors = $halls->getExhVisitorsCount();
      echo 'Total Exhibitor Visitors: ' . $all_visitors . '<br>';

      $visitors_list = $halls->getVisitorsExhVisits();
      if (!empty($visitors_list)) {
      ?>
        <table class="table table-striped">
          <?php
          foreach ($visitors_list as $visitors) {
          ?>
            <tr>
              <td><?php
                  $members = new User();
                  $members->__set('user_id', $visitors['user_id']);
                  $user_name = $members->getUserName();
                  echo $user_name;
                  ?></td>
              <td><?php echo $visitors['cnt']; ?></td>
            </tr>
          <?php
          }
          ?>
        </table>
      <?php
      }
      ?>

    </div>
  </div>
</div>

<?php
function secToHR($seconds)
{
  //$days = floor($seconds /   
  $hours = floor($seconds / 3600);
  $minutes = floor(($seconds / 60) % 60);
  $seconds = $seconds % 60;
  return $hours > 0 ? "$hours hours, $minutes minutes" : ($minutes > 0 ? "$minutes minutes, $seconds seconds" : "$seconds seconds"); //
}
?>
<?php
require_once "scripts.php";
?>
<?php
require_once "footer.php";
?>