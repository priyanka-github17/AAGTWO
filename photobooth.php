<?php
require_once "logincheck.php";
$curr_room = 'photobooth';
?>
<?php require_once 'header.php';  ?>
<?php require_once 'preloader.php';  ?>
<link rel="stylesheet" href="assets/css/cam.css">
<link rel="stylesheet" href="assets/css/cam-media-queries.css">
<div class="page-content">
    <div id="content" class="photobooth">
        <div id="header-menu">
            <?php require_once "header-navmenu.php" ?>
        </div>
        <div id="bg" class="photobooth">
            <img src="  ">
        </div>
        <div id="photobooth">
            <div id="cam-panel" class="camera-panel">

                <div class="d-flex justify-content-center" id="before-capture" style="display: none;">
                    <button type="button" class="btn btn-capture" id="cam-btn"><i class="fas fa-camera"></i></button>
                </div>

                <div class="d-flex justify-content-center" id="after-capture" data-html2canvas-ignore style="display: none!important;">
                    <button type="button" class="btn btn-retry" id="retake-btn"><i class="fas fa-undo-alt"></i></button>
                    <button type="button" class="btn btn-save" id="save-btn"><i class="fas fa-save"></i></button>
                </div>


                <div class="photo-jacket-container">
                    <img class="photo-jacket" src="assets/img/booth-blank.png" />
                </div>

                <div id="cam-ui">
                    <div id="cam-feed">
                        <video id="cam-feed-video" playsinline autoplay></video>
                        <canvas class="cam-prev"></canvas>
                    </div>
                </div>


            </div>

            <div id="options">

                <ul class="list-unstyled">
                    <!-- <li>
                        <a href="#" onclick="updPB('blank')"> Take Selfie</a>
                    </li> -->
                    <!-- <li>
                        <a href="#" onclick="updPB('dilipshah')"> Take Selfie with Dr. Dilip Shah</a>
                    </li>
                    <li>
                        <a href="#" onclick="updPB('hemantkalyan')"> Take Selfie with Dr. Hemant Kalyan</a>
                    </li>
                    <li>
                        <a href="#" onclick="updPB('john')"> Take Selfie with Dr. John Mukhopadhyay</a>
                    </li>
                    <li>
                        <a href="#" onclick="updPB('reddy')"> Take Selfie with Dr. K.J. Reddy</a>
                    </li>
                    <li>
                        <a href="#" onclick="updPB('mandeep')"> Take Selfie with Dr. Mandeep Dhillon</a>
                    </li>
                    <li>
                        <a href="#" onclick="updPB('rajesh')"> Take Selfie with Dr. Rajesh Malhotra</a>
                    </li>
                    <li>
                        <a href="#" onclick="updPB('ram')"> Take Selfie with Dr. Ram Chaddha</a>
                    </li>
                    <li>
                        <a href="#" onclick="updPB('shushrut')"> Take Selfie with Dr. Shushrut Babhulkar</a>
                    </li> -->
                    <!-- <li>
                        <a href="photobooth2.php"> Take Selfie with Directors</a>
                    </li> -->
                </ul>
                <div id="social" style="display: none;">
                    <a href="#" id="facebook" target="_blank"><i class="fab fa-facebook-square fa-3x"></i></a>
                    <a href="#" id="linkedin" target="_blank"><i class="fab fa-linkedin fa-3x"></i></a>
                    <a href="#" id="twitter" target="_blank"><i class="fab fa-twitter-square fa-3x" aria-hidden="true"></i></a>
                </div>

            </div>
        </div>
        <div id="bottom-menu">
            <?php require_once "bottom-navmenu.php" ?>
        </div>
    </div>
    <?php require_once "commons.php" ?>
</div>
<?php require_once "scripts.php" ?>
<script src="assets/js/CameraController.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.2/FileSaver.js"></script>
<script type="text/javascript" src="assets/js/html2canvas.min.js"></script>
<script>
    $(function() {
        initCamera();
    });

    function updPB(opt) {
        $('.photo-jacket').attr('src', 'assets/img/booth-' + opt + '.png');
    }
</script>
<?php require_once "ga.php"; ?>

<?php require_once 'footer.php';  ?>