<?php
require_once "logincheck.php";
$curr_room = 'lounge';
?>
<?php require_once 'header.php';  ?>
<?php require_once 'preloader.php';  ?>
<div class="page-content">
    <div id="content">
        <div id="header-menu">
            <?php require_once "header-navmenu.php" ?>
        </div>
        <div id="bg">
            <img src="assets/images/AIIMS Networking Lounge.jpg">
            <a class="show_attendees" id="shareCards" href="#">
                <div class="indicator d-6"></div>
            </a>
            <a class="show_attendees" id="chatAttendees" href="#">
                <div class="indicator d-6"></div>
            </a>
            <a class="" id="chatAttendees1" data-toggle="modal" data-target="#exampleModal" href="#">
                <div class="indicator d-6"></div>
            </a>
        </div>
        <div id="bottom-menu">
            <?php require_once "bottom-navmenu.php" ?>
        </div>
    </div>
    <?php require_once "commons.php" ?>
    <div class="modal fade" id="attendees" tabindex="-1" role="dialog" aria-labelledby="attendeesLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="attendeesLabel">Attendees</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-1">
                    <ul class="modal-tabs nav nav-tabs" role="tablist">
                        <li id="listAttendees" class="active">
                            <a href="#">Attendees</a>
                        </li>
                        <li id="chatInbox" class="">
                            <a href="#">Chat Inbox</a>
                        </li>
                        <li id="cardsShared" class="">
                            <a href="#">Shared Cards</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="attendeesList" style="display:block;">
                            <div class="search-area">
                                <form method="post">
                                    <div class="row">
                                        <div class="col-12 col-md-6 pr-0">
                                            <input type="text" id="attendee-search" placeholder="Search by name" class="input">
                                        </div>
                                        <div class="col-12 col-md-4 text-left">
                                            <button type="submit" id="search-attendee" value="Search">Search</button><button type="submit" id="clear-search-attendee" value="Clear">Clear</button>
                                        </div>
                                        <div class="col-12 col-md-2 text-right">
                                            <button type="button" id="refresh-attendees">Refresh</button>
                                        </div>
                                    </div>

                                </form>

                            </div>
                            <div id="attendeeList" class="content scroll"></div>
                        </div>
                        <div class="tab-pane" id="inboxChat" style="display:none;">
                            <div id="attendees-list-chat" class="content scroll">

                            </div>
                        </div>
                        <div class="tab-pane" id="sharedCards" style="display:none;">
                            <div id="cards-shared" class="content scroll">

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contact Us</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <p class="text-dark text-center mt-4">
        Email id:  <a href="mailto:contactus@integracehealth.com" class="text-dark">contactus@integracehealth.com</a>
          </p>
      
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

<?php require_once "scripts.php" ?>

<?php require_once "ga.php"; ?>

<?php require_once 'footer.php';  ?>