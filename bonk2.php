<?php
require_once "logincheck.php";
require_once "functions.php";

$exhib_id = 'b0f57f77281cdfc11628e815bb3a7c60c0126479d3c0b052681f25cc7896db18';
require_once "exhibcheck.php";
$curr_room = 'bonk2';
?>
<?php require_once 'header.php';  ?>
<?php require_once 'preloader.php';  ?>
<div class="page-content">
    <div id="content">
        <div id="header-menu">
            <?php require_once "header-navmenu.php" ?>
        </div>
        <div id="bg" class="bonk2">
            <img src="assets/img/stalls/bonk2.jpg">
            <div id="back-button">
                <a href="exhibitionhalls.php"><i class="fas fa-arrow-alt-circle-left"></i> Back</a>
            </div>
            <a href="assets/resources/bonk2_1.jpg" id="poster1" class="view">
                <div class="indicator d-6"></div>
            </a>
            <a href="https://player.vimeo.com/video/542006277" id="video1" class="viewvideo"> </a>
            <a href="assets/resources/bonk2_2.jpg" id="poster2" class="view">
                <div class="indicator d-6"></div>
            </a>
            <a href="#" data-exhid="<?php echo $exhib_id; ?>" data-userid="<?php echo $_SESSION['userid']; ?>" id="subSampleReq">
                <div class="indicator d-6"></div>
            </a>
            <a href="#" data-exhid="<?php echo $exhib_id; ?>" data-userid="<?php echo $_SESSION['userid']; ?>" id="subProdDet">
                <div class="indicator d-6"></div>
            </a>
        </div>
        <div id="bottom-menu">
            <?php require_once "bottom-navmenu.php" ?>
        </div>
    </div>
    <?php require_once "commons.php" ?>
</div>

<?php require_once "scripts.php" ?>

<?php require_once "exhib-script.php" ?>

<?php require_once "ga.php"; ?>

<?php require_once 'footer.php';  ?>