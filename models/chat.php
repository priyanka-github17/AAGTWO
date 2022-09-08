<?php
require_once '../inc/constants.php';

class Chat
{
  private $ds;
  private $user_id_from;
  private $user_id_to;
  private $message;
  private $read_status;
  private $source;


  private $teamtable = 'tbl_teamchat';
  private $atttable = 'tbl_attendeechat';
  private $usertable = 'tbl_users';

  function __construct()
  {
    $this->ds = new DataSource();
  }


  public function __get($property)
  {
    if (property_exists($this, $property)) {
      return $this->$property;
    }
  }

  public function __set($property, $value)
  {
    if (property_exists($this, $property)) {
      $this->$property = $value;
    }

    return $this;
  }

  public function sendTeamMsg()
  {
    $chat_time   = date('Y/m/d H:i:s');
    $query = 'INSERT INTO ' . $this->teamtable . '(user_id_from, user_id_to, message, chat_time, source) values(?, ?, ?, ?, ?)';
    $paramType = 'sssss';
    $paramValue = array(
      $this->user_id_from,
      $this->user_id_to,
      $this->message,
      $chat_time,
      $this->source

    );

    $chatId = $this->ds->insert($query, $paramType, $paramValue);
    return $chatId;
  }

  public function getTeamChatHistory()
  {
  
    $query = "select first_name, last_name, message, user_id_from, chat_time, source from " . $this->teamtable . "," . $this->usertable . " where ((user_id_from=? AND user_id_to =?) OR (user_id_from=? AND user_id_to=?)) AND (" . $this->teamtable . ".user_id_from = " . $this->usertable . ".userid OR " . $this->teamtable . ".user_id_to = " . $this->usertable . ".userid) order by chat_time asc";
 
    $paramType = 'ssss'; //ssss';
    $paramValue = array(
      $this->user_id_from,
      $this->user_id_to,
      $this->user_id_to,
      $this->user_id_from
    );

    $history = $this->ds->select($query, $paramType, $paramValue);

    return $history;
  }

  public function updateTeamReadStatus()
  {
    $query = "update " . $this->teamtable . " set read_status = '1' where user_id_to =? and user_id_from =?";
    $paramType = 'ss';
    $paramValue = array(
      $this->user_id_to,
      $this->user_id_from
    );
    $this->ds->execute($query, $paramType, $paramValue);
    return $paramValue;
  }
  public function getTeamChatUsers()
  {
    $query = 'SELECT distinct(user_id_from),max(chat_time) as chat_time FROM ' . $this->teamtable . ', ' . $this->usertable . ' where ' . $this->teamtable . '.user_id_from=' . $this->usertable . '.userid group by user_id_from order by max(chat_time) DESC';
    $paramType = '';
    $paramValue = array();
    $users = $this->ds->select($query, $paramType, $paramValue);

    return $users;
  }

  public function getUnreadTeamChatCount()
  {
    $query = 'select * from ' . $this->teamtable . ' where read_status ="0" and user_id_from=? and user_id_to="team"';
    $paramType = 's';
    $paramValue = array(
      $this->user_id_from
    );
    $count = $this->ds->getRecordCount($query, $paramType, $paramValue);

    return $count;
  }

  public function sendMsg()
  {
    $chat_time   = date('Y/m/d H:i:s');
    $query = 'INSERT INTO ' . $this->atttable . '(user_id_from, user_id_to, message, chat_time) values(?, ?, ?, ?)';
    $paramType = 'ssss';
    $paramValue = array(
      $this->user_id_from,
      $this->user_id_to,
      $this->message,
      $chat_time,
    );

    $chatId = $this->ds->insert($query, $paramType, $paramValue);
    return $chatId;
  }

  public function getUserChatHistory()
  {
    $query = "select first_name, last_name, message, user_id_from, chat_time from " . $this->atttable . "," . $this->usertable . " where ((user_id_from=? AND user_id_to =?) OR (user_id_from=? AND user_id_to=?)) AND " . $this->atttable . ".user_id_from = " . $this->usertable . ".userid order by chat_time asc";
    $paramType = 'ssss'; //ssss';
    $paramValue = array(
      $this->user_id_from,
      $this->user_id_to,
      $this->user_id_to,
      $this->user_id_from
    );

    $history = $this->ds->select($query, $paramType, $paramValue);

    return $history;
  }
  public function updateChatReadStatus()
  {
    $query = "update " . $this->atttable . " set read_status = '1' where user_id_to =? and user_id_from =?";
    $paramType = 'ss';
    $paramValue = array(
      $this->user_id_to,
      $this->user_id_from
    );
    $this->ds->execute($query, $paramType, $paramValue);
    return $paramValue;
  }
  public function getUnreadChatCount()
  {
    $query = 'select * from ' . $this->atttable . ' where read_status ="0" and user_id_from=? and user_id_to=?';
    $paramType = 'ss';
    $paramValue = array(
      $this->user_id_from,
      $this->user_id_to
    );
    $count = $this->ds->getRecordCount($query, $paramType, $paramValue);

    return $count;
  }
  public function getMemberUnreadChatCount()
  {
    $query = 'select * from ' . $this->atttable . ' where read_status ="0" and user_id_to=?';
    $paramType = 's';
    $paramValue = array(
      $this->user_id_to
    );
    $count = $this->ds->getRecordCount($query, $paramType, $paramValue);

    return $count;
  }

  public function getMemberChats()
  {
    $query = "(SELECT distinct(user_id_from),first_name, last_name FROM " . $this->atttable . ", " . $this->usertable . " where user_id_to =? and " . $this->atttable . ".user_id_from=" . $this->usertable . ".userid) UNION (SELECT distinct(user_id_to),first_name, last_name FROM " . $this->atttable . ",`" . $this->usertable . "` where user_id_from =?  and " . $this->atttable . ".user_id_to=" . $this->usertable . ".userid)";
    $paramType = 'ss'; //ssss';
    $paramValue = array(
      $this->user_id_to,
      $this->user_id_to
    );

    $chats = $this->ds->select($query, $paramType, $paramValue);

    return $chats;
  }
}
