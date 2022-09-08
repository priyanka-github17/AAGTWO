<?php
require_once "logincheck.php";
$curr_room = 'iq';
?>
<?php require_once 'header.php';  ?>
<?php require_once 'preloader.php';  ?>
<div class="page-content">
    <div id="content" class="iq">
        <div id="header-menu">
            <?php require_once "header-navmenu.php" ?>
        </div>
        <div id="bg">
            <img src="https://origyn.s3.ap-south-1.amazonaws.com/iq.jpg">
            <div id="iqQues"></div>
            <div id="iqRes" style="display: none;">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-interval="2000">
                            <img src="assets/img/iq1.jpg" class="d-block w-100">
                        </div>
                        <div class="carousel-item" data-interval="2000">
                            <img src="assets/img/iq2.jpg" class="d-block w-100">
                        </div>

                    </div>
                </div>
                <a href="https://player.vimeo.com/video/481078736" class="viewvideo btn btn-primary mt-1" id="video1">Watch Launch Video</a>
            </div>

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
        getQues();
        $(document).on('click', '.send_iqresp', function() {
            var iqOpt = $("input[name='iqopts']:checked").val();

            if (iqOpt) {
                var user = $(this).data('user');
                var ques = $(this).data('ques');
                $('.send_iqresp').attr('disabled', true);
                $('input[name="iqopts"]').attr('disabled', true);

                $.ajax({
                    url: 'control/iq.php',
                    data: {
                        action: 'submitIQResp',
                        quesId: ques,
                        userId: user,
                        answer: iqOpt
                    },
                    type: 'post',
                    success: function(response) {
                        if (response == "0") {
                            $('#ques-res').text('Wrong Answer');
                            $('#ques-res').removeClass().addClass('alert alert-danger').fadeIn();
                        }
                        if (response == "1") {
                            $('#ques-res').text('Correct Answer');
                            $('#ques-res').removeClass().addClass('alert alert-success').fadeIn();
                        }
                        $('small').fadeIn();
                        setTimeout(function() {
                            getQues();
                        }, 5000);

                    }
                });

                $('.send_iqresp').attr('disabled', false);

                return false;
            } else {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    text: 'Please select your response',
                    showConfirmButton: false,
                    timer: 2000
                })
            }

        });
    });
    var music = new Audio();
    music.autoplay = false;
    music.src = 'music.mp3';

    function getQues() {
        $.ajax({
            url: 'control/iq.php',
            data: {
                action: 'getnextques',
                userId: '<?= $userid ?>'
            },
            type: 'post',
            success: function(response) {
                if (response != '0') {
                    $('#iqQues').html(response);
                } else {
                    $('#iqQues').css('display', 'none');
                    $('#iqRes').css('display', 'block');
                    music.play();

                }
            }
        });
    }

    function showRanks() {
        $.ajax({
            url: 'control/iq.php',
            data: {
                action: 'getranks',
                userId: '<?= $userid ?>'
            },
            type: 'post',
            success: function(response) {
                $('#iqQues').html(response);
            }
        });
    }
</script>
<?php require_once "ga.php"; ?>

<?php require_once 'footer.php';  ?>