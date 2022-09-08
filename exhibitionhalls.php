<?php
require_once "logincheck.php";
$curr_room = 'exhibitionhall';
?>
<?php require_once 'header.php';  ?>
<?php require_once 'preloader.php';  ?>
<div class="page-content">
    <div id="content">
        <div id="header-menu">
            <?php require_once "header-navmenu.php" ?>
        </div>
        <div id="bg">
            <img src="assets/images/EXIBIT HALL _ FINAL .jpg">

            <a href="https://player.vimeo.com/video/543013846" id="exhVideo" class="viewvideo"></a>
            <a href="bondk.php" id="bondk">
                <div class="indicator d-6"></div>
            </a>
            <a href="esoz.php" id="esoz">
                <div class="indicator d-6"></div>
            </a>
            <a href="colsmartA.php" id="colsmartA">
                <div class="indicator d-6"></div>
            </a>
            <a href="bonk2.php" id="bonk2">
                <div class="indicator d-6"></div>
            </a>
            <a href="lizolid.php" id="lizolid">
                <div class="indicator d-6"></div>
            </a>
            <a href="dubinor.php" id="dubinor">
                <div class="indicator d-6"></div>
            </a>
            <a href="stiloz.php" id="stiloz">
                <div class="indicator d-6"></div>
            </a>
            <a href="dubinor-ointments.php" id="dubinor-ointments">
                <div class="indicator d-6"></div>
            </a>
            <a href="bmdcamp.php" id="bmdcamp">
                <div class="indicator d-6"></div>
            </a>
            <a href="ebovpg.php" id="ebovpg">
                <div class="indicator d-6"></div>
            </a>
            <a href="vkonnecthealth.php" id="vkonnecthealth">
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
<script src="assets/js/image-map.js"></script>
<script>
    ImageMap('img[usemap]', 500);
</script>
<?php require_once "ga.php"; ?>

<?php require_once 'footer.php';  ?>