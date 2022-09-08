<?php
require_once '../functions.php';
require_once 'logincheck.php';
?>
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $event_title ?></title>
  <link rel="stylesheet" href="../assets/css/normalize.min.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/all.min.css">
  <link rel="stylesheet" href="../assets/css/admin.css">
</head>

<body>
  <?php
  require_once 'nav.php';
  ?>
  <div class="container-fluid">
    <div class="row p-2">
      <div class="col-12">
        <div id="chat-area">
          <div id="chat-members">
            <div id="member-heading">
              Attendees
            </div>
            <div id="chat-users" class="scroll">

            </div>
          </div>
          <div id="member-chats">
            <div id="member-chat-history"></div>
            <div id="team-chat-form" style="display:none;">
              <form action="#">
                <div class="row">
                  <div class="col-10">
                    <textarea rows="2" class="form-control" name="chat_message_team" id="chat_message_team"></textarea>
                  </div>
                  <div class="col-2">
                    <button type="button" id="send_teamchat" class="send_teamchat btn btn-primary" data-from='team' data-to='0'>Send</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <?php
  function tosecs($seconds)
  {
    $t = round($seconds);
    return sprintf('%02d:%02d:%02d', ($t / 3600), ($t / 60 % 60), $t % 60);
  }
  ?>
  <script>
    $(function() {
      $(document).on('click', '.send_teamchat', function() {
        var sendbtn = document.querySelector('.send_teamchat');
        sendbtn.disabled = true;
        var to_user_id = $(this).data('to');
        var from_user_id = 'team';
        var message = $('#chat_message_team').val();
        if (message.trim() !== '') {
          $.ajax({
            url: '../control/chat.php',
            data: {
              action: 'sendTeamMessage',
              to: to_user_id,
              from: from_user_id,
              msg: message
            },
            type: 'post',
            success: function(output) {
              $('#chat_message_team').val('');
              getTeamChat(to_user_id);
            }
          });
        }
        sendbtn.disabled = false;
        return false;
      });
    });
    var getUserChat, getUsers;

    function getTeamChatUsers() {
      $.ajax({
        url: '../control/chat.php',
        data: {
          action: 'getteamchatusers'
        },
        type: 'post',
        success: function(output) {
          $("#chat-users").html(output);
        }
      });
    }
    getTeamChatUsers();
    getUsers = setInterval(function() {
      getTeamChatUsers();
    }, 10000);

    function getTeamChat(from_user) {
      clearTimeout(getUserChat);
      var from = from_user;
      $.ajax({
        url: '../control/chat.php',
        data: {
          action: 'getteamchat',
          user: from
        },
        type: 'post',
        success: function(output) {
          $("#member-chat-history").html(output);
          $('#send_teamchat').data('to', from_user);
          $('#team-chat-form').css('display', 'block');
          var myDiv = document.getElementById('chat-history');
          myDiv.scrollTop = myDiv.scrollHeight;

          getUserChat = setTimeout(function() {
            getTeamChat(from_user);
          }, 8000);

        }
      });
    }
    $(document).on('click', '.send_teamchat', function() {
      var sendbtn = document.querySelector('.send_teamchat');
      sendbtn.disabled = true;
      var to_user_id = $(this).data('to'); // $(this).data('to');
      var from_user_id = 'team';
      var message = $('#chat_message_team').val();
      if (message.trim() !== '') {
        $.ajax({
          url: 'ajax.php',
          data: {
            action: 'sendTeamMessage',
            to: to_user_id,
            from: from_user_id,
            msg: message
          },
          type: 'post',
          success: function(output) {
            $('#chat_message_team').val('');
            getTeamChat(to_user_id);
          }
        });
      }
      sendbtn.disabled = false;
      return false;
    });
  </script>
</body>

</html>