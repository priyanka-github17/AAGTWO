<?php
require_once "logincheck.php";
require_once "functions.php";

$exhib_id = '5401bf299c08132282431d39b50f0d5f0a736cf7958f77511ea8bab642907e13';
require_once "exhibcheck.php";
$curr_room = 'ebovpg';
?>
<?php require_once 'header.php';  ?>
<?php require_once 'preloader.php';  ?>
<div class="page-content">
    <div id="content">
        <div id="header-menu">
            <?php require_once "header-navmenu.php" ?>
        </div>
        <div id="bg" class="ebovpg">
            <img src="assets/img/stalls/ebovpg.jpg">
            <div id="back-button">
                <a href="exhibitionhalls.php"><i class="fas fa-arrow-alt-circle-left"></i> Back</a>
            </div>
            <a href="assets/resources/ebovpg_1.jpg" id="poster1" class="view">
                <div class="indicator d-6"></div>
            </a>
            <a href="assets/resources/ebovpg_2.jpg" id="poster2" class="view">
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
                        <li><a href="https://player.vimeo.com/video/480176953" class="viewpopvideo vidview" data-vidid="9a853ce0fa2b2683b616f86225646bbf04855e42bf5e8c3429d08475f3d26310">Progesterone in Pre-Term Birth</a></li>
                        <li><a href="https://player.vimeo.com/video/480176990" class="viewpopvideo vidview" data-vidid="e7bf0c50981262b34c1b49630e788ffa0ab6053dbc389a77c87618292a7cdda9">Progesterone in BOH</a></li>
                        <li><a href="https://player.vimeo.com/video/480177037" class="viewpopvideo vidview" data-vidid="7def74469820d0a1a5acc255b2a08a6cff176ce428e2480ef48f9d009cd1e135">Progesterone in Unexplained Infertility</a></li>
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
                        <li><a href="assets/resources/dubagest_lbl1.pdf" class="viewpoppdf resdl" data-docid="d6ee8f84fa1e2aad2640bfd2b17e0bb6a8092d1d5aa2a42afaf72525c4be1158">NAP Delay Study </a></li>
                        <li><a href="assets/resources/dubagest_lbl2.pdf" class="viewpoppdf resdl" data-docid="0300e860d1d4647f97178f9c3650ff221639a5cefc3035b6021bc71e5d8d5f9e">BOH & Unexplained infertility</a></li>
                        <li><a href="assets/resources/dubagest_lbl3.pdf" class="viewpoppdf resdl" data-docid="14dfb029e648907ec290d93d04e4b1912130b3d2907b676b8a28c82aa3aeea2a">Progesterone vs Dydrogesterone</a></li>
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
        $(document).on('click', '#literature', function() {
            $('#literatureList').modal('show');
        });
        $(document).on('click', '#videos', function() {
            $('#videoList').modal('show');
        });
        $(document).on('click', '#contact', function() {
            $('#contactUs').modal('show');
        });

    });
</script>
<?php require_once "exhib-script.php" ?>

<?php require_once "ga.php"; ?>

<?php require_once 'footer.php';  ?>