<?

//require_once "../app/Http/Controllers/PaypalCheckout.php";
require_once("./PaypalCheckout.php");

//Create PaypalCheckout object
var $payment = new PaypalCheckout();

  if (isset($_POST['data'])){
    print $_POST['data'];
    echo $_POST['data'];
  }
  if ('username'){
    $data = json_decode($_POST['data']);
    echo $data;
    if($_POST['tid'] != NULL && $_POST['state'] != NULL){
      if($payment->pay($_SESSION['username'], $_POST['tid'], 10, $_POST['state']) == true){
        $payment.update_membership($_SESSION['username']);
        echo "success";
      }
    }
  } else {
    //redirect to login
    echo "fail";
    header("Location: ../home");
  }
}
