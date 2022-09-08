<?php
require_once "logincheck.php";
$curr_room = 'timeline';
?>
<?php require_once 'header.php';  ?>
<?php require_once 'preloader.php';  ?>
<div class="page-content">
    <div id="content">
        <div id="header-menu">
            <?php require_once "header-navmenu.php" ?>
        </div>
        <div id="bg">
            <img src="assets/img/timeline.jpg">
            <a class="view" id="timeline-left" href="assets/resources/timeline-left.jpg">
                <div class="indicator d-6"></div>
            </a>
            <a class="view" id="timeline-right" href="assets/resources/timeline-right.jpg">
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
<?php require_once "scripts.php" ?>

<?php require_once "ga.php"; ?>

<?php require_once 'footer.php';  ?>