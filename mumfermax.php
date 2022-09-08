<?php
require_once "logincheck.php";
require_once "functions.php";

$exhib_id = '57be54c41804246fab9e5436bf5f5164d20318b6e3223e357afb936c365342c6';
require_once "exhibcheck.php";

$curr_room = 'mumfermax';
?>
<?php require_once 'header.php';  ?>
<?php require_once 'preloader.php';  ?>
<div class="page-content">
    <div id="content">
        <div id="header-menu">
            <?php require_once "header-navmenu.php" ?>
        </div>
        <div id="bg" class="mumfermax">
            <img src="https://origyn.s3.ap-south-1.amazonaws.com/mumfermax.jpg">
            <div id="back-button">
                <a href="exhibitionhalls.php"><i class="fas fa-arrow-alt-circle-left"></i> Back</a>
            </div>
            <div id="back-button  " style="    position: absolute;
    background-color: #072d45;
    padding: 5px 15px;
    border-radius: 4px;
    top: 160px;
    left: 15px;">
                <a href="waiting.php"><i class="fas fa-arrow-alt-circle-left"></i> Waiting</a>
            </div>
            <a href="#" id="videos"></a>
            <a href="#" id="literature"></a>
            <a href="#" id="contact"></a>
            <a href="assets/resources/mumfer_1.jpg" id="poster1" class="view"></a>
            <a href="https://player.vimeo.com/video/480175879" class="viewvideo" id="video1"></a>
            <a href="assets/resources/mumfer_2.jpg" id="poster2" class="view"></a>
            <a href="https://player.vimeo.com/video/480220869" class="viewvideo" id="video2"></a>
        </div>
        <div id="bottom-menu">
            <?php require_once "bottom-navmenu.php" ?>
        </div>
    </div>
    <?php require_once "commons.php" ?>
</div>
<div class="modal fade" id="videoList" tabindex="-1" role="dialog" aria-labelledby="videoListTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="videoListLongTitle">Videos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="content scroll">
                    <ul class="popuplist">
                        <li><a href="https://player.vimeo.com/video/480175879" class="viewpopvideo vidview" data-vidid="16436f020dc771687d08131813b0c698bf45be00c8faa58c077a02e61c7a83a6">MUMFER MAX VIDEO 1</a></li>
                        <li><a href="https://player.vimeo.com/video/480216506" class="viewpopvideo vidview" data-vidid="80444a7607a9fa12e379eb1a6fa60282dd66932736d89862cb20576ef04736be">MUMFER MAX VIDEO 2</a></li>
                        <li><a href="https://player.vimeo.com/video/480220869" class="viewpopvideo vidview" data-vidid="9a720a479d1f28a0bd3ab635f0bcc59d9144531d0c5f4990dfea8d08ea28d15f">MUMFER MAX VIDEO 3</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="literatureList" tabindex="-1" role="dialog" aria-labelledby="literatureListTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="literatureListLongTitle">Scientific Literatures</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="content scroll">
                    <ul class="popuplist">
                        <li><a href="assets/resources/mumfermax_lbl1.pdf" class="viewpoppdf resdl" data-docid="5707b21bfc9d5e8feeb15ba1afc4a5709b6d5d35e5f0e3bb0c031585f13fce6a">MUMFERM MAX LBL 1</a></li>
                        <li><a href="assets/resources/mumfermax_lbl2.pdf" class="viewpoppdf resdl" data-docid="29b05c9d3e6d3709b6baaa49d1f9d48d2f7b960ca2ce917d41873059749371c6">MUMFERM MAX LBL 2</a></li>
                        <li><a href="assets/resources/mumfermax_lbl3.pdf" class="viewpoppdf resdl" data-docid="565e6a52464e31ea7200fdec0fbfb3548c0003acbbd54b909d5c9f1e3ca5b504">MUMFERM MAX LBL 3</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="contactUs" tabindex="-1" role="dialog" aria-labelledby="contactUsTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contactUsLongTitle">Contact Us</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="content scroll text-center">
                    For any queries, please write to us at <a href="mailto:contactus@integracehealth.com">contactus@integracehealth.com</a>

                </div>
            </div>

        </div>
    </div>
</div>
<?php require_once "scripts.php" ?>
<script>
    $(function() {
        $(document).on('click', '#videos', function() {
            $('#videoList').modal('show');
        });
        $(document).on('click', '#literature', function() {
            $('#literatureList').modal('show');
        });
        $(document).on('click', '#contact', function() {
            $('#contactUs').modal('show');
        });
    });
</script>
<?php require_once "exhib-script.php" ?>

<?php require_once "ga.php"; ?>

<?php require_once 'footer.php';  ?>