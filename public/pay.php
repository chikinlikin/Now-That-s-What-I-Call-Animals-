<?php

include "./PaypalCheckout.php";
//use Illuminate\Support\Facades\Auth;

//Create PaypalCheckout object
$payment = new PaypalCheckout();

//Access the session
session_start();

# Get JSON as a string
$json_str = file_get_contents('php://input');
# Get as an object
$json_obj = json_decode($json_str, true);

var_dump($_SESSION['username']);
//var_dump(Auth::user()->name);

// Check the value of status
if ($json_obj['state'] == 'COMPLETED') {
      if($json_obj['tid'] != NULL){
        if($payment->pay($_SESSION['username'], $_POST['tid'], 10, $_POST['state']) == true){
          $payment.update_membership($_SESSION['username']);
        }
      }
    } else {
      //redirect to login
      //echo "fail";
      header("Location: ../home");
    }
