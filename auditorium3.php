<?php
require_once "logincheck.php";
require_once "functions.php";

$audi_id = 'd92d15f91a4b105183d3665531c7fc7a67c98176e22bcc96c3dc91aee56c6334';
$audi = new Auditorium();
$audi->__set('audi_id', $audi_id);
$a = $audi->getEntryStatus();
$entry = $a[0]['entry'];
if (!$entry) {
    header('location: lobby.php');
}
$curr_room = 'auditorium3';
$webcastUrl = 'https://player.vimeo.com/video/543708869';

$sess_id = 0;
if (isset($_GET['ses'])) {
    $sess_id = $_GET['ses'];
    $sess = new Session();
    $sess->__set('session_id', $sess_id);
    $curr_sess = $sess->getSession();
    if ((empty($curr_sess)) || (!$curr_sess[0]['launch_status'])) {
        header('location: auditorium3.php');
    }
    $webcastUrl = $sess->getWebcastSessionURL();
    //$webcastUrl .= '?autoplay=1';
} else {
    $webcastUrl .= '?autoplay=1&loop=1';
}
?>
<?php require_once 'header.php';  ?>
<?php require_once 'preloader.php';  ?>
<div class="page-content">
    <div id="content">
        <div id="header-menu">
            <?php require_once "header-navmenu.php" ?>
        </div>
        <div id="bg">
            <img src="assets/images/AUDITORIUM_3.jpg">
            <div id="webcast-area" class="audi3">
                <a id="goFS" href="#" class="fs">Fullscreen</a>
                <iframe src="<?= $webcastUrl ?>" frameborder="0" allow="autoplay; fullscreen" allowfullscreen style="width:100%;height:100%;"></iframe>
            </div>
        </div>
        <!-- <div id="disclaimer">
            Integrace Pvt Ltd has obtained the necessary consent from the respective copyright holders for relaying, sharing & archiving the materials appearing in this program. However, Integrace Pvt Ltd accepts no role or liability for the medical opinion, accuracy or completeness of the information contained in this publication or its update.
        </div> -->
        <div id="audiAgenda">
            <a id="showaudiAgenda" href="#"><i class="far fa-list-alt"></i>Agenda</a>
        </div>
        <?php
        if ($sess_id != '0') {
        ?>

            <div id="ask-ques">
                <a href="#" id="askques"><i class="fas fa-question-circle"></i>Ask Ques</a>
            </div>
            <div id="take-poll">
                <a href="#" id="takepoll"><i class="fas fa-poll"></i>Take Poll</a>
            </div>
            <div class="panel ques">
                <div class="panel-heading">
                    Ask A Question
                    <a href="#" class="close" id="close_ques"><i class="fas fa-times"></i></a>
                </div>
                <div class="panel-content">
                    <div id="ques-message" style="display:none;"></div>
                    <form>
                        <div class="form-group">
                            <textarea class="input" rows="6" name="userques" id="userques" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="button" name="send_sesques" data-ses="<?= $sess_id ?>" data-user="<?= $userid ?>" class="send_sesques btn btn-sm btn-primary btn-sendmsg">Submit Question</button>
                        </div>
                    </form>
                    <div id="askedQues">
                        <div id="quesList" class="scroll">

                        </div>

                    </div>
                </div>

            </div>
            <div class="panel poll">
                <div class="panel-heading">
                    Take Poll
                    <a href="#" class="close" id="close_poll"><i class="fas fa-times"></i></a>
                </div>
                <div class="panel-content">
                    <div id="poll-message" style="display:none;"></div>
                    <div id="currpollid" style="display:none;">0</div>
                    <div id="currpoll" style="display:none;">

                    </div>
                    <div id="currpollresults" style="display:none">

                    </div>
                </div>

            </div>
        <?php
        }
        ?>
        <div id="bottom-menu">
            <?php require_once "bottom-navmenu.php" ?>
        </div>
    </div>
</div>



<?php require_once "commons.php" ?>
<?php require_once "scripts.php" ?>
<?php require_once "audi-common.php" ?>
<?php require_once "audi-script.php" ?>
<?php require_once "ga.php"; ?>
<?php require_once 'footer.php';  ?>