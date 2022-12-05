<?php

require_once(__DIR__ . "/config.php");


class DataLog
{

  public $isConn;

  private $host; // host name
  private $username; // user name  
  private $password; // password  
  private $dbname; // dbname  

  //To show query error messages set on or to hide then set to off
  //For trouble shooting only
  public $ShowQryErrors = 'off'; //on or off

  //---> Connect to database - Start *******************************
  public function __construct()
  {

    $this->host = DB_HOST; // your host name
    $this->username = DB_USERNAME; // your user name  
    $this->password = DB_PASSWORD; // your password  
    $this->dbname = DB_NAME;

    $this->isConn = new mysqli($this->host, $this->username, $this->password);
    if ($this->ShowQryErrors == 'on') {
      if ($this->isConn->connect_error) {
        die("Connection failed: " . $this->isConn->connect_error);
      } else {
        echo "Connected to MySQL server successfully!";
      }
    }
    mysqli_select_db($this->isConn, $this->dbname);

    $this->table_name = 'qh_questions';
  }


  public function getQuestion($params)
  {

    $sql = "SELECT * FROM $this->table_name " . $params;
    $result = $this->isConn->query($sql);
    $numRow = $result->num_rows;

    if ($numRow > 0) {
      while ($row = $result->fetch_assoc()) {
        $data = $row;
      }
      return $data;
    }
  }
}
