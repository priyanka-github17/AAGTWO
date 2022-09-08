<?php
class Event
{
  private $ds;

  function __construct()
  {
    $this->ds = new DataSource();
  }

  // public function getCountries()
  // {
  //   $query = 'Select * from countries order by name';
  //   $paramType = '';
  //   $paramValue = array();

  //   $list = $this->ds->select($query, $paramType, $paramValue);
  //   return $list;
  // }

  // public function getStates($cntry)
  // {
  //   $query = 'Select * from states where country_id=? order by name';
  //   $paramType = 's';
  //   $paramValue = array($cntry);

  //   $list = $this->ds->select($query, $paramType, $paramValue);
  //   return $list;
  // }

  // public function getCities($state)
  // {
  //   $query = 'Select * from cities where state_id=? order by name';
  //   $paramType = 's';
  //   $paramValue = array($state);

  //   $list = $this->ds->select($query, $paramType, $paramValue);
  //   return $list;
  // }

  // public function getCountry($country)
  // {
  //   $query = 'Select name from countries where id=?';
  //   $paramType = 's';
  //   $paramValue = array($country);

  //   $country = $this->ds->select($query, $paramType, $paramValue);
  //   return $country[0]['name'];
  // }

  // public function getState($state)
  // {
  //   $query = 'Select name from states where id=?';
  //   $paramType = 's';
  //   $paramValue = array($state);

  //   $state = $this->ds->select($query, $paramType, $paramValue);
  //   return $state[0]['name'];
  // }

  // public function getCity($city)
  // {
  //   $query = 'Select name from cities where id=?';
  //   $paramType = 's';
  //   $paramValue = array($city);

  //   $city = $this->ds->select($query, $paramType, $paramValue);
  //   return $city[0]['name'];
  // }
}
