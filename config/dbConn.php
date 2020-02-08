<!--

class dbConn {

  public function __construct(){
    session_start();
  }

  public function db(){
    print "creting a new db connection";
    $conn = new mysql('127.0.0.1', 'homestead', 'secret', 'homestead');
    var_dump($conn);
    return $conn;
  }
} -->
