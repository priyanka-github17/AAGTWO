<!--Audi Modal -->
<div class="modal fade" id="audiSelect" tabindex="-1" role="dialog" aria-labelledby="audiSelectTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="audiSelectLongTitle">Select Auditorium</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="content scroll">
          <ul class="audis">
            <li><a href="auditorium1.php">Auditorium 01</a></li>
            <li><a href="auditorium2.php">Auditorium 02</a></li>
            <li><a href="auditorium3.php">Auditorium 03</a></li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</div>


<!--Helpdesk-->
<?php
$file = $_SERVER["SCRIPT_NAME"];
$break = Explode('/', $file);
$pfile = $break[count($break) - 1];
?>
<!-- <div id="talktous" class="popup-dialog">
  <div class="popup-content">
    <div id="chat_team" class="team_chat_box">
      <div class="chat_history scroll" data-touser="team" id="chat_history_team"></div>
      <form>
        <div class="form-group">
          <input name="chat_message_team" id="chat_message_team" rows="1" class="input sendmsg" autocomplete="off">
        </div>
        <div class="form-group text-left">
          <button type="button" name="send_teamchat" class="send_teamchat btn btn-primary" data-src="<?php echo $pfile ?>" data-to="team" data-from="<?php echo $userid ?>">Send</button>
        </div>
      </form>
    </div>
  </div>
</div> -->

<div id="attendees-chat"></div>



<div class="modal fade" id="leaderboard" tabindex="-1" role="dialog" aria-labelledby="leaderboardLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="leaderboardLabel">Conference Leaderboard</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>
      <div class="modal-body mb-0 p-0">
        <div id="leaderboardPoints" class="content scroll">
          <!-- Nav tabs -->
          <ul class="modal-tabs nav nav-tabs" role="tablist">
            <li id="lRanks" class="active">
              <a href="#">Leaderboard Ranks</a>
            </li>
            <li id="pointsSystem" class="">
              <a href="#">Points System</a>
            </li>
          </ul>


          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane active" id="ranks" style="display:block;">
              <div id="conf-lb">
                <div id="my-rank"></div>
                <div id="conf-ranks"></div>
              </div>
            </div>
            <div class="tab-pane" id="points" style="display:none;">
              <div id="terms-cond">
                <ol class="my-5">
                  <li>Play Game - 100 Points</li>
                </ol>
              </div>
            </div>
          </div>
        </div>

      </div>


    </div>
  </div>
</div>