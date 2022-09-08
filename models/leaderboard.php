<?php



class Leaderboard
{

    private $ds;
    private $userid;
    private $action;
    private $location;
    private $points;

    private $table = 'tbl_useractivity';
    private $usertable = 'tbl_users';
    public $limit = 50;


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

    function checkUserActivity($userid, $action, $location)
    {
        $query = "select * from " . $this->table . " where user_id =? and action =? and location =?";
        $paramType = 'sss';
        $paramValue = array(
            $userid,
            $action,
            $location
        );
        $useractivity = $this->ds->getRecordCount($query, $paramType, $paramValue);

        return $useractivity;
    }

    function updateUserActivity()
    {
        $query = "Insert into " . $this->table . "(user_id, action, location,points) values(?, ?, ?, ?)";
        $paramType = 'sssi';
        $paramValue = array(
            $this->userid,
            $this->action,
            $this->location,
            $this->points
        );

        $activityid = $this->ds->insert($query, $paramType, $paramValue);
        return $activityid;
    }

    function getLeaderboard()
    {
        //$query="SELECT userid, name, company, designation, sum(points) as total FROM `".$this->table."`, tbl_users where ".$this->table.".user_id = tbl_users.userid GROUP by user_id order by total DESC";
        $query = "SELECT user_id,sum(points) as total FROM " . $this->table . ", " . $this->usertable . " where " . $this->table . ".user_id = " . $this->usertable . ".userid GROUP by user_id order by total DESC";
        $paramType = '';
        $paramValue = array();

        $leaderboard = $this->ds->select($query, $paramType, $paramValue);

        return $leaderboard;
    }

    function getCounts($userid, $action)
    {
        $query = "select * from " . $this->table . " where user_id =? and action = ?";
        $paramType = 'ss';
        $paramValue = array(
            $userid,
            $action
        );

        $count = $this->ds->getRecordCount($query, $paramType, $paramValue);

        return $count;
    }

    function getRank($userid)
    {

        $query = "SELECT user_id, sum(points) as total FROM " . $this->table . " GROUP by user_id order by total DESC";
        $paramType = '';
        $paramValue = array();

        $ranks = $this->ds->select($query, $paramType, $paramValue);

        return $ranks;
    }
}
