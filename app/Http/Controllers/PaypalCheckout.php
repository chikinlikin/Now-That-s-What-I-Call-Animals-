<?php
namespace App\Http\Controllers;

class PaypalCheckout{

  public function __construct(){
    print "PaypalCheckout.__construct()";
  }

  public function pay($username, $tid, $state){
    $date = new DateTime;
    $transaction_date = $date->format('dd/mm/YYYY hh:mm:ss');
    if($this->check_txn_id($tid) == 0){
      \DB::table('members')->insert(
        [ 'name' => [$username],
          'tid' => [$tid],
          'transaction_date' => [$transaction_date]]
      );
      return true;
    }
    // else, already paid
    return false;
  }

  public function update_membership($username){
    echo "PaypalCheckout.update_membership()";
    \DB::table('users')
            ->where('username', [$username])
            ->update(['membership' => 1]);
  }

  public function check_txn_id($tid){
    echo "PaypalCheckout.check_txn_id()";
    $results = \DB::select('select COUNT(id) as total from members where tid = ?', [$tid]);
    if ($results->num_rows == 1){
      while($total = $results->fetch_assoc()){
        return $total['total'];
      }
    }
    return false;
  }
}
