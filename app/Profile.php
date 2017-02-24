<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $table = 'profile';
    protected $fillable = array('titlename', 'firstname', 'lastname', 'school', 'work', 'hometown', 'livetown');

    public function user(){
      return $this->belongsTo('App\User', 'user_id');
    }
}
