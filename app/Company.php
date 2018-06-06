<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
  protected $fillable=[
    'name',
    'description',
    'user_id',
  ];

  //A company belongs to a user
    public function user(){
      return $this->belongsTo('App\Models\User');
    }
}
