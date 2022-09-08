<nav class="navbar navbar-expand-md bg-light">
    <a class="navbar-brand" href="#">
        <img src="../assets/img/unnamed.png" height="60" class="logo" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item">
                <a class="nav-link text-dark" style="font-weight:bolder;" href="users.php">Registered Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" style="font-weight:bolder;" href="feed.php">Feedback</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="leaderboard.php">Leaderboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="feedback.php">Feedbacks</a>
            </li> -->
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#"><?= $_SESSION['admin'] ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>