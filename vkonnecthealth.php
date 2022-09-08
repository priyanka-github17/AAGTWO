<?php
require_once "logincheck.php";
require_once "functions.php";

$exhib_id = '828285996abd7c6abdb897c8d5768997b261ec6b19eafd6721475f5d85d6b76f';
require_once "exhibcheck.php";

$curr_room = 'vkonnecthealth';
?>
<?php require_once 'header.php';  ?>
<?php require_once 'preloader.php';  ?>
<div class="page-content">
    <div id="content">
        <div id="header-menu">
            <?php require_once "header-navmenu.php" ?>
        </div>
        <div id="bg" class="vkonnect">
            <img src="assets/img/stalls/vkonnecthealth.jpg">
            <div id="back-button">
                <a href="exhibitionhalls.php"><i class="fas fa-arrow-alt-circle-left"></i> Back</a>
            </div>
            <a href="assets/resources/vkonnect_1.jpg" id="poster1" class="view">
                <div class="indicator d-6"></div>
            </a>
            <a href="assets/resources/vkonnect_2.jpg" id="poster2" class="view">
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
                        <li><a href="assets/resources/fenza_lbl1.pdf" class="viewpoppdf resdl" data-docid="50a6556d2d5f7d2c13e7b0e47cd9a7091c683d933fa898d1fb57d8f265a9e5a6">FENZA Cap & Cream LBL </a></li>
                        <li><a href="assets/resources/fenza_lbl2.pdf" class="viewpoppdf resdl" data-docid="052c59e599ea0c2c4c9772b82ea148687739c37222d409676ae81f0b78e941c1">Fenza-L LBL</a></li>
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

        $(document).on('click', '#contact', function() {
            $('#contactUs').modal('show');
        });

    });
</script>
<?php require_once "exhib-script.php" ?>
<?php require_once "ga.php"; ?>

<?php require_once 'footer.php';  ?>