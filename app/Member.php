<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use \app\User;

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
        'name', 'tid', 'transaction_date',
    ];

    public function user(){
      return $this->belongsTo(User::class);
    }
}
