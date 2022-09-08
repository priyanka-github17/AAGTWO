<?php
ini_set('display_errors', '1');
require_once 'inc/config.php';
$event_title = 'Integrace';

spl_autoload_register(function ($classname) {
    $path =  __DIR__ . '/models/' . strtolower($classname) . ".php";
    //echo $path.'<br>'; 
    if (file_exists($path)) {
        require_once($path);
        //echo "File $path is found.<br>";
    } else {
        //echo "File $path is not found.";
    }
});




function setResponse($status, $message)
{
    $response = array("status" => $status, "message" => $message);
    return $response;
}

function unsetUser()
{
    if (isset($_SESSION["userid"])) {
        unset($_SESSION['userid']);
    }
    header('location: ./');
}

function ExportFile($records)
{
    $heading = false;
    if (!empty($records))
        foreach ($records as $row) {
            if (!$heading) {
                // display field/column names as a first row
                echo implode("\t", array_keys($row)) . "\n";
                $heading = true;
            }
            echo implode("\t", array_values($row)) . "\n";
        }
    exit;
}

function upset_analytics()
{
}
function update_games_score($email, $name, $game)
{







    $query = "INSERT INTO `gamescore`(`id`, `email`, `game1`, `gmae2`, `game3`, `game4`, `score`, `name`) 
  VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8])";
}
