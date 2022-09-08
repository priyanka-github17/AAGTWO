<?php
class Feedback
{
  private $ds;
  private $limit;

  private $user_id;
  private $q01;
  private $q02;
  private $q03;
  private $q04;
  private $q05;
  private $q06;
  private $q07;
  private $q08;
  private $q09;
  private $q10;
  private $q11;
  private $q12;
  private $q13;
  private $q14;
  private $q15;
  private $q16;
  private $q17;
  private $q18;
  private $q19;
  private $q20;
  private $q21;
  private $q22;
  private $q23;
  private $q24;
  private $q25;
  private $q26;
  private $q27;
  private $q28;
  private $q29;

  private $table = 'tbl_feedbacks';
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
  public function submitFeedback()
  {
    $fb_time   = date('Y/m/d H:i:s');
    $query = "insert into " . $this->table . " set userid=?, q01=?, q02=?, q03=?,q04=?,q05=?,q06=?,q07=?,q08=?,q09=?,q10=?,q11=?,q12=?,q13=?,q14=?,q15=?,q16=?,q17=?,q18=?,q19=?,q20=?,q21=?,q22=?,q23=?,q24=?,q25=?,q26=?,q27=?,q28=?,q29=?, feedback_time=?";
    $paramType = 'sssssssssssssssssssssssssssssss';
    $paramValue = array(
      $this->user_id,
      $this->q01,
      $this->q02,
      $this->q03,
      $this->q04,
      $this->q05,
      $this->q06,
      $this->q07,
      $this->q08,
      $this->q09,
      $this->q10,
      $this->q11,
      $this->q12,
      $this->q13,
      $this->q14,
      $this->q15,
      $this->q16,
      $this->q17,
      $this->q18,
      $this->q19,
      $this->q20,
      $this->q21,
      $this->q22,
      $this->q23,
      $this->q24,
      $this->q25,
      $this->q26,
      $this->q27,
      $this->q28,
      $this->q29,
      $fb_time
    );
    $fb_id = $this->ds->insert($query, $paramType, $paramValue);
    if ($fb_id > 0) {
      $response = setResponse('success', 'Thanks for submitting feedback.');
    } else {
      $response = setResponse('error', 'Please try again.');
    }
    return $response;
  }
  public function getFbCount()
  {
    $query = 'Select id from ' . $this->table;
    $paramType = '';
    $paramValue = array();

    $count = $this->ds->getRecordCount($query, $paramType, $paramValue);
    return $count;
  }
  public function getAllFeedbacks($offset)
  {
    $query = 'Select * from ' . $this->table . ',' . $this->usertable . ' where ' . $this->table . '.userid=' . $this->usertable . '.userid order by feedback_time desc limit ?,?';
    $paramType = 'ss';
    $paramValue = array($offset, $this->limit);

    $admins = $this->ds->select($query, $paramType, $paramValue);

    return $admins;
  }
  public function getFeedbacks()
  {
    $query = 'Select * from ' . $this->table . ',' . $this->usertable . ' where ' . $this->table . '.userid=' . $this->usertable . '.userid order by feedback_time desc';
    $paramType = '';
    $paramValue = array();

    $admins = $this->ds->select($query, $paramType, $paramValue);

    return $admins;
  }
}
