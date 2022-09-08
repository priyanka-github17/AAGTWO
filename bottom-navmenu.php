<?php
$paths = array('auditorium1.php', 'auditorium2.php', 'auditorium3.php');
$current_file_name = basename($_SERVER['PHP_SELF']);

?>
<nav class="navbar bottom-nav">
  <ul class="nav mr-auto ml-auto">
    <li class="nav-item">
      <a class="nav-link" href="lobby.php" title="Go To Lobby"><i class="fa fa-home"></i><span class="hide-menu">Lobby</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="auditorium1.php" id="selectAudi" title="Go To Auditorium"><i class="fa fa-chalkboard-teacher"></i><span class="hide-menu">Auditorium</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="exhibitionhalls.php" title="Go To Exhibition Halls"><i class="fa fa-box-open"></i><span class="hide-menu">Exhibition Halls</span></a>
    </li>
    <li> <a class="" href="lounge.php" title="Networking Lounge"><i class="fas fa-network-wired">
          <div id="chat-message"></div>
        </i><span class="hide-menu">Networking Lounge</span></a></li>
   <li class="nav-item">
      <a class="nav-link showpdf" href="https://origyn.s3.ap-south-1.amazonaws.com/conf-agenda.pdf" title=""><i class="far fa-list-alt"></i><span class="hide-menu">Agenda</span></a>

    </li>
    <li class="nav-item">
      <a class="nav-link" href="photobooth.php"><i class="fas fa-camera"></i><span class="hide-menu">Photo Booth</span></a>
    </li> 
    <li class="nav-item">
      <a class="nav-link" href="games.php"><i class="fas fa-gamepad"></i><span class="hide-menu">Engagement Area</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link show_leaderboard" href="#"><i class="fa fa-trophy"></i><span class="hide-menu">Leaderboard</span></a>
    </li>
    <?php
    if (!in_array($current_file_name, $paths)) {
    ?>
     <li> <a class="" id="show_talktous" href="#" title="Talk to Us" data-from="<?php echo $_SESSION['userid']; ?>"><i class="fas fa-comment-alt"></i><span class="hide-menu"></span>Talk To Us</a></li>
    <?php 
    } 
    ?>
    <li class="nav-item">
      <a class="nav-link logout" href="logout.php" title="Logout"><i class="fas fa-sign-out-alt"></i>Logout</a>
    </li>
  </ul>

</nav>
<div id="helpline">
  For assistance:<br>
  <i class="fas fa-phone-square-alt"></i> +917314-855-655
</div>