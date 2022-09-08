<?php
require_once "logincheck.php";
require_once "functions.php";

$exhib_id = 'a1356366834d95f5c148bd4f4a1ec37d44161e3fca0824c5b2982f17380d1d2d';
require_once "exhibcheck.php";
$curr_room = 'bmdcamp';
?>
<?php require_once 'header.php';  ?>
<?php require_once 'preloader.php';  ?>
<div class="page-content">
    <div id="content">
        <div id="header-menu">
            <?php require_once "header-navmenu.php" ?>
        </div>
        <div id="bg" class="bmdcamp">
            <img src="assets/img/stalls/bmdcamp.jpg">
            <div id="back-button">
                <a href="exhibitionhalls.php"><i class="fas fa-arrow-alt-circle-left"></i> Back</a>
            </div>
            <a href="assets/resources/bmdcamp_1.jpg" id="poster1" class="view">
                <div class="indicator d-6"></div>
            </a>
            <a href="assets/resources/bmdcamp_2.jpg" id="poster2" class="view">
                <div class="indicator d-6"></div>
            </a>
            <a href="#" data-exhid="<?php echo $exhib_id; ?>" data-userid="<?php echo $_SESSION['userid']; ?>" id="subCampReq">
                <div class="indicator d-6"></div>
            </a>
            <a href="assets/resources/INTERNATIONAL PUBLICATION Prevalence of osteoporosis in India an observation of 31238 adults.pdf" class="viewpoppdf resdl" id="dlBrochure" data-docid="1b4b5ac16b7baf8c76970012ac2647b59ae14fff945a25e5589f9037319fdb7d">
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