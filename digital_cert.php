<?php
require_once "logincheck.php";
$exhib_id = '7dbec02369476ebb0af778bbaa6a580dbe5619c50798cde10f8a6f84a856ac02';
require_once "exhibcheck.php";
$curr_room = 'digitalcertificate';
?>
<?php require_once 'header.php';  ?>
<?php require_once 'preloader.php';  ?>

<div class="page-content">
    <div id="content">
    Hello, <?= $user_name ;
    // print_r($user_name);exit;
    ?>!
        <!-- <div id="header-menu">
            <?php 
            
            // require_once "header-navmenu.php"
             ?>
        </div> -->
        <div id="bg">
            <img src="assets/img/bg.jpg">
            <div id="cert-area">
                <div class="cert">
                    <a href="#" onclick="dlCert()"><img class="photo-jacket" src="assets/img/Certificate 15 june final.jpg"/></a>
                    <div class="name-text"><?= $user_name ?></div>
                </div>
                <a href="#" id="dlCert" onclick="dlCert()">Download Certificate</a>
            </div>




        </div>
        <!-- <div id="bottom-menu"> -->
            <?php 
            // require_once "bottom-navmenu.php" 
            ?>
        <!-- </div> -->
    </div>
    <?php require_once "commons.php" ?>
</div>

<?php require_once "scripts.php" ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.2/FileSaver.js"></script>
<script type="text/javascript" src="assets/js/html2canvas.min.js"></script>
<script>
    function dlCert() {
        html2canvas(document.querySelector("#cert-area"), {
            backgroundColor: "#000000"
        }).then(c => {
            c.toBlob(function(blob) {
                saveAs(blob, "<?= $user_name ?>_certificate.jpg");
            });
        });
    }
</script>
<?php require_once "ga.php"; ?>

<?php require_once 'footer.php';  ?>