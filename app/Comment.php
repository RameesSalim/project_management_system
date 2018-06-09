<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=[
      'body',
      'url',
      'user_id',
      'commantable_id',
      'commantable_type',
    ];

    //A comment belongs to a user
      public function user(){
        return $this->belongsTo('App\User');
      }
}
