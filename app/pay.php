<?php
namespace App;

use App\User;
use Auth;

$json_str = file_get_contents('php://input');
# Get as an object
$json_obj = json_decode($json_str, true);

//$payment = new PaypalCheckout();

if (Auth::attempt($user)) {
  // Check the value of status
  if ($json_obj['state'] == 'COMPLETED') {
        if($json_obj['tid'] != NULL){
          if($user->member()->pay($json_obj['name'], $json_obj['tid'], $json_obj['state'])){
            $user->update_membership($json_obj['name']);
          }
        }
  } else {
        //redirect to login
        header("Location: ../home");
  }
}
