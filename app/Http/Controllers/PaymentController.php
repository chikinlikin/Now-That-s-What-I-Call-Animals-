<?php
namespace App\Http\Controllers;

class PaymentController extends Controller {

$json_str = file_get_contents('php://input');
# Get as an object
$json_obj = json_decode($json_str, true);

  // Check the value of status
  if ($json_obj['state'] == 'COMPLETED') {
        if($json_obj['tid'] != NULL){
          if(User::pay($json_obj['email'], $json_obj['tid'], $json_obj['state'])){
            Member::update_membership($json_obj['name']);
          }
        }
  } else {
        //redirect to login
        header("Location: ../home");
  }
}
