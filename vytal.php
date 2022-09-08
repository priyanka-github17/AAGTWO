<?php
require_once "logincheck.php";
require_once "functions.php";
$exhib_id = '0ff75d6b5221ba6fcb628022f7e9c4180c22ca8c0d0a29370aec083ccc438c80';
require_once "exhibcheck.php";
$curr_room = 'vytal';
?>
<?php require_once 'header.php';  ?>
<?php require_once 'preloader.php';  ?>
<div class="page-content">
    <div id="content">
        <div id="header-menu">
            <?php require_once "header-navmenu.php" ?>
        </div>
        <div id="bg" class="vytal">
            <img src="https://origyn.s3.ap-south-1.amazonaws.com/vytal.jpg">
            <div id="back-button">
                <a href="exhibitionhalls.php"><i class="fas fa-arrow-alt-circle-left"></i> Back</a>
            </div>
            <a href="#" id="poster1"></a>
            <a href="assets/resources/vytal_2.jpg" id="poster2" class="view"></a>
            <a href="http://onelink.to/6ace65" target="_blank" id="poster3"></a>
            <a href="https://player.vimeo.com/video/481078892" class="viewvideo" id="video1"></a>
        </div>
        <div id="bottom-menu">
            <?php require_once "bottom-navmenu.php" ?>
        </div>
    </div>
    <?php require_once "commons.php" ?>
</div>
<?php require_once "scripts.php" ?>
<script>
    $(function() {
        $('#poster1').on('click', function() {
            Swal.fire({
                text: 'Do you want to Register for Practice Management APP with OB-GYN EMR?',
                //text: "You won't be able to revert this!",
                // icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes',
                cancelButtonText: 'No'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "control/exhib.php",
                        data: {
                            action: 'reqPMA',
                            exhibId: '<?= $exhib_id ?>',
                            userId: '<?= $userid ?>'
                        },
                        type: 'post',
                    }).done(function(data) {
                        Swal.fire(
                            'Thank you!',
                            'Your request has been received.',
                            'success'
                        )
                    });

                }
            })
        });
    })
</script>
<?php require_once "ga.php"; ?>

<?php require_once 'footer.php';  ?>