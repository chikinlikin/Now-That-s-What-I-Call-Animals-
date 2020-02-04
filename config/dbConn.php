<?php

class dbConn {

  // private $host = "localhost";
  // private $username = "forge";
  // private $password = "";
  // private $db = "forge";

  public function __construct(){
    session_start();
  }

  public function db(){
    $conn = new mysql('127.0.0.1', 'homestead', 'secret', 'homestead');
    return $conn;
  }
}
