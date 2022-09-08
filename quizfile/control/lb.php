<?php
require_once "../inc/config.php";
require_once "../functions.php";
define('PLAY_GAME', 100);

if (isset($_POST['action']) && !empty($_POST['action'])) {

    $action = $_POST['action'];

    switch ($action) {

        case 'updpoints':
            $userid = $_POST['userId'];
            $activity = $_POST['activity'];
            $loc = $_POST['loc'];
            $points = 0;

            if ($activity == 'PLAY_GAME') {
                $points = 100;
            }


            $lb = new Leaderboard();
            $lb->__set('userid', $userid);
            $lb->__set('action', $activity);
            $lb->__set('location', $loc);
            $lb->__set('points', $points);

            $lbInfo = $lb->updateUserActivity();

            print_r(json_encode($exhibInfo));

            break;

        case 'getleaderboard':

            $board = new Leaderboard();
            $leaders = $board->getLeaderboard();

            if (!empty($leaders)) {
                $member = new User();
                $output = '<table class="table table-bordered">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col" width="100">Rank</th>
                        <th scope="col">Name</th>
                        <th scope="col" width="150">Points</th>
                      </tr>
                    </thead>
                    <tbody>';
                $i = 1;
                foreach ($leaders as $leader) {
                    $member->__set('user_id', $leader['user_id']);
                    $user = $member->getUser();
                    //var_dump($user);
                    $output .=  '<tr>
                        <th scope="row">' . $i . '</th>
                        <td><b>' . $user[0]['first_name'] . ' ' . $user[0]['last_name'] . '</b> </td>
                        <td>' . $leader['total'] . '</td>
                      </tr>';
                    $i++;
                }
                $output .=  '</tbody>
                    </table>';
                echo $output;
            } else {
                echo 'There is no leaderboard available right now.';
            }

            break;

            /*Get points for current user*/
        case 'getpoints':

            $total = 0;
            $userid = $_POST['user'];

            $board = new Leaderboard();

            $games = $board->getCounts($userid, 'PLAY_GAME');
            $games_score = $games * PLAY_GAME;
            $total += $games_score;



            $rank = 1;
            $rankList = $board->getRank($userid);
            if (!empty($rankList)) {
                foreach ($rankList as $user) {
                    if ($userid != $user['user_id']) {
                        $rank++;
                    } else {
                        break;
                    }
                }
            }

            $output = '<table class="table table-bordered">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col" colspan="2">Rank: ' . $rank . '</th>
                      <th scope="col" colspan="2">Total Points: ' . $total . '</th>                  
                    </tr>
                  </thead>';
            /* $output .= '<thead class="thead-light">
                    <tr>
                      <th scope="col">Activity for Points</th>
                      <th scope="col">Points</th>
                      <th scope="col">My Activity Count</th>
                      <th scope="col">My Points</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">Play Games</th>
                      <td>' . PLAY_GAME . '</td>
                      <td>' . $games . '</td>
                      <td>' . $games_score . '</td>
                    </tr>'; */

            $output .= '                
                  </tbody>
                </table>';

            echo $output;

            break;
    }
}
