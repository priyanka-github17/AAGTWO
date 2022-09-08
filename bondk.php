<?php
require_once "logincheck.php";
require_once "functions.php";

$exhib_id = '913234bfe40b6433e81ceb7573bdd9b9c069ad2c08d89d3beb33bdc351ed5954';
require_once "exhibcheck.php";
$curr_room = 'bondk';
?>
<?php require_once 'header.php';  ?>
<?php require_once 'preloader.php';  ?>
<div class="page-content">
    <div id="content">
        <div id="header-menu">
            <?php require_once "header-navmenu.php" ?>
        </div>
        <div id="bg" class="bondk">
            <img src="assets/img/stalls/bondk.jpg">
            <div id="back-button">
                <a href="exhibitionhalls.php"><i class="fas fa-arrow-alt-circle-left"></i> Back</a>
            </div>
            <a href="assets/resources/bondk_1.jpg" id="poster1" class="view">
                <div class="indicator d-6"></div>
            </a>
            <a href="assets/resources/bondk_2.jpg" id="poster2" class="view">
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