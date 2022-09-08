<?php
require_once "logincheck.php";
$curr_room = 'lobby';

?>
<?php require_once 'header.php';  ?>
<?php require_once 'preloader.php';  ?>

<section class="videotoplay" id="gotolobby">
    <video class="videoplayer" id="gotolobbyvideo" preload="auto">
        <source src="enter.mp4" type="video/mp4">
    </video>
    <a href="" class="skip">SKIP</a>
</section>

<?php require_once "scripts.php" ?>
<script>
    var lobbyVideo = document.getElementById("gotolobbyvideo");
    lobbyVideo.addEventListener('ended', lobbyEnd, false);


    function enterLobby() {
        lobbyVideo.currentTime = 0;
        lobbyVideo.play();
    }

    function lobbyEnd(e) {
        $('#gotolobby').fadeOut(500);
        setTimeout(function() {
            location.href = "lobby.php";
        }, 1000);

    }

    enterLobby();
</script>

<?php require_once "ga.php"; ?>

<?php require_once 'footer.php';  ?>