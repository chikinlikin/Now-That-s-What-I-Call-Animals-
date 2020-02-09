<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Member extends Model
{
    //
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'tid', 'transaction_date',
    ];

    public function user(){
      return $this->belongsTo(User::class);
    }

    public function check_txn_id($tid){
      $results = \DB::select('select COUNT(id) as total from members where tid = ?', [$tid]);
      if ($results->num_rows == 1){
        while($total = $results->fetch_assoc()){
          return $total['total'];
        }
      }
      return false;
    }

    public function pay($email, $tid, $state){
      $date = new \DateTime;
      $transaction_date = $date->format('dd/mm/YYYY hh:mm:ss');
      if($this->check_txn_id($tid) == 0){
        \DB::table('members')->insert(
          [ 'email' => [$email],
            'tid' => [$tid],
            'transaction_date' => [$transaction_date]]
        );
        return true;
      }
      // else, already paid
      return false;
    }
}
