<?php
require_once "../../inc/config.php";
require_once "../../functions.php";


if (isset($_POST['action']) && !empty($_POST['action'])) {

    $action = $_POST['action'];

    switch ($action) {

        case 'sendTeamMessage':

            $user_to_id = $_POST["to"];
            $user_from_id = $_POST["from"];
            $from_src = $_POST["source"];
            $message = $_POST["msg"];

            $chat = new Chat();
            $chat->__set('user_id_to', $user_to_id);
            $chat->__set('user_id_from', $user_from_id);
            $chat->__set('message', $message);
            $chat->__set('source', $from_src);
            $status = $chat->sendTeamMsg($user_to_id, $user_from_id, $message, $from_src);
            if ($status > 0) {
                echo '1';
            }

            break;

        case 'getteamchathistory':

            $user_to_id = $_POST["to"];
            $user_from_id = $_POST["from"];
            $user_id = $_POST["userId"];

            $chat = new Chat();
            $chat->__set('user_id_to', $user_to_id);
            $chat->__set('user_id_from', $user_from_id);
            $chatHistory = $chat->getTeamChatHistory();

            //var_dump($chatHistory);

            if (!empty($chatHistory)) {
?>
                <table class="table table-borderless table-striped">
                    <?php
                    foreach ($chatHistory as $c) {
                        $user_name = '';
                        $user_class = '';
                        if ($c['user_id_from'] == $user_id) {
                            $user_name = 'You';
                            $user_class = 'me';
                        } else {
                            $user_name = 'Team Integrace';
                            $user_class = 'team';
                        }
                        //$output .= '<li class="' . $user_class . '"><b>' . $user_name . '</b>: ' . $c['message'] . '</li>';
                    ?>
                        <tr>
                            <td class="<?= $user_class ?>">
                                <b><?= $user_name ?>:</b> <?= $c['message'] ?>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            <?php
            }

            $chat->__set('user_id_from', $user_to_id);
            $chat->__set('user_id_to', $user_from_id);
            $status = $chat->updateTeamReadStatus();
            //var_dump($status);
            break;

        case 'getteamchatusers':
            $chat = new Chat();
            $userList = $chat->getTeamChatUsers();
            //var_dump($userList);
            if (!empty($userList)) { ?>
                <table>
                    <?php
                    foreach ($userList as $user) {
                        $member = new User();
                        $member->__set('user_id', $user['user_id_from']);
                        $name = $member->getUserName();

                        $chat->__set('user_id_from',  $user['user_id_from']);
                        $unread = $chat->getUnreadTeamChatCount();
                        //var_dump($unread);
                        $chat_time = new DateTime($user['chat_time']);
                    ?>
                        <tr>
                            <td class="p-2" onClick="getTeamChat('<?= $user['user_id_from'] ?>')" style="cursor: pointer;"><?= $name ?>
                                <?php
                                if ($unread > 0) {
                                ?>
                                    <span class="badge badge-danger"><?= $unread ?></span>
                                <?php
                                }
                                ?>
                                <br><small>Last message: <?= date_format($chat_time, "M d Y, H:i:s a") ?></small>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            <?php
            }
            break;

        case 'getteamchat':
            $user_from = $_POST['user'];
            $user_to = 'team';
            $output = '';

            $member = new User();
            $member->__set('user_id', $user_from);
            $name = $member->getUserName();
            ?>
            <div id="chats-heading">
                <h3><?= $name ?></h3>
            </div>
            <?php
            $chat = new Chat();
            $chat->__set('user_id_from', $user_from);
            $chat->__set('user_id_to', $user_to);
            $chatList = $chat->getTeamChatHistory();
            //var_dump($chatList);
            if (!empty($chatList)) {
            ?><div id="chat-history" class="scroll">
                    <table class="table table-striped table-borderless">
                        <?php
                        foreach ($chatList as $c) {
                            $chat_time = date_create($c['chat_time']);

                            if ($c['user_id_from'] != 'team') {
                                $user_name = $name;
                                $user_class = 'me';
                            } else {
                                $user_name = 'Team Integrace';
                                $user_class = 'team';
                            }
                        ?>
                            <tr>
                                <td class="p-1"><small><?= date_format($chat_time, "M d Y, H:i:s a") ?></small></td>

                            </tr>
                            <tr>
                                <td class="p-1"><b><?= $user_name ?>:</b> <?= $c['message'] ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            <?php
                $chat->__set('user_id_from', $user_from);
                $chat->__set('user_id_to', $user_to);
                $status = $chat->updateTeamReadStatus();
            }
            break;


        case 'sendMessage':

            $user_to_id = $_POST["to"];
            $user_from_id = $_POST["from"];
            $message = $_POST["msg"];

            $chat = new Chat();
            $chat->__set('user_id_to', $user_to_id);
            $chat->__set('user_id_from', $user_from_id);
            $chat->__set('message', $message);
            $status = $chat->sendMsg();
            if ($status > 0) {
                echo '1';
            }

            break;

        case 'checknewchat':
            $to_id = $_POST['to'];

            $chat = new Chat();
            $chat->__set('user_id_to', $to_id);
            $unread = $chat->getMemberUnreadChatCount();

            echo $unread;
            break;

        case 'getAttendeesChat':
            $user_to_id = $_POST["to"];

            $chat = new Chat();
            $chat->__set('user_id_to', $user_to_id);
            $chatList = $chat->getMemberChats();
            //var_dump($chatList);

            if (!empty($chatList)) {
            ?>
                <table class="table table-borderless table-striped">
                    <?php
                    foreach ($chatList as $a) {
                        //echo $chat['user_id_from'];
                        /* $member = new User();
                    $member->__set('user_id', $chat['user_id_from']);
                    $user = $member->getUser();
                    var_dump($user); */
                    ?>
                        <tr>
                            <td><?= $a['first_name'] . ' ' . $a['last_name']; ?></td>
                            <td width="100">
                                <?php
                                $chat->__set('user_id_to', $user_to_id);
                                $chat->__set('user_id_from', $a['user_id_from']);
                                $unread = $chat->getUnreadChatCount();
                                ?>
                                <a href="#" class="btn-chat" data-to="<?php echo $a['user_id_from']; ?>" data-from="<?php echo $user_to_id ?>"><i class="far fa-comment-alt"></i></a>
                                <?php if ($unread > 0) { ?>
                                    <span class="badge badge-danger"><?= $unread ?></span>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
<?php
            } else {
                echo 'You have not interacted with anyone.';
            }


            break;
    }
}
