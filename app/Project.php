<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable=[
      'name',
      'description',
      'company_id',
      'user_id',
      'days',
    ];

    //A project belongs to a user
      public function company(){
        return $this->belongsToMany('App\Company');
      }
        //A project belongs to a user
          public function user(){
            return $this->belongsTo('App\User');
          }
}
