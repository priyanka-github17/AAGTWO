<?php
require_once "logincheck.php";
$curr_room = 'games';

?>
<?php require_once 'header.php';  ?>
<?php require_once 'preloader.php';  ?>

<div class="page-content">
    <div id="content">
        <div id="header-menu">
            <?php require_once "header-navmenu.php" ?>
        </div>
        <div id="bg">
            <img src="assets/img/bg.jpg">

            <div id="games-area">
                <div class="row d-flex">
                    <div class="col-3 mx-auto mt-2">
                        <div class="bg-white p-2 rounded m-1 h-100">
                            <a href="games/sudoku/" class="playGames" onclick="gamescore('sudoku')">
                                <img src="assets/img/sudoku.jpg" class="img-fluid" alt="Sudoku">
                            </a>
                            <h6 class="text-dark">Sudoku</h6>
                        </div>
                    </div>
                    <div class="col-3 mx-auto mt-2">
                        <div class="bg-white p-2 rounded m-1 h-100">
                            <a href="games/image-puzzle/" class="playGames" onclick="gamescore('image-puzzle')">
                                <img src="assets/img/brand-puzzle.png" class="img-fluid" alt="Brand Puzzle">
                            </a>
                            <h6 class="text-dark">Brand Puzzle</h6>
                        </div>
                    </div>
                    <div class="col-3 mx-auto mt-2 d-none d-md-block">
                        <div class="bg-white p-2 rounded m-1 h-100">
                            <a href="games/car-race/" class="playGames" onclick="gamescore('car-race')">
                                <img src="assets/img/car-race.jpg" class="img-fluid" alt="Car Race">
                            </a>
                            <h6 class="text-dark">Car Race</h6>
                        </div>
                    </div>
                    <div class="col-3 mx-auto mt-2">
                        <div class="bg-white p-2 rounded m-1 h-100">
                            <a href="games/word-search/" class="playGames" onclick="gamescore('word-search')">
                                <img src="assets/img/word-game.jpg" class="img-fluid" alt="Word Search">
                            </a>
                            <h6 class="text-dark">Word Search</h6>
                        </div>
                    </div>

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
<script>
    function gamescore(a) {
        $.ajax({
            url: 'control/lb.php',
            data: {
                action: 'updpoints',
                userId: '<?= $_SESSION['userid'] ?>',
                activity: 'PLAY_GAME',
                loc: a
            },
            type: 'post',
            success: function(message) {}
        });
        //window.open('games/' + a + '', '_blank');
    }
</script>

<?php require_once "ga.php"; ?>

<?php require_once 'footer.php';  ?>