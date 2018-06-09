<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  protected $fillable=[
    'name',
    'project_id',
    'user_id',
    'company_id',
    'days',
    'hours',
  ];
//A task belongs to a user
  public function user(){
    return $this->belongsTo('App\User');
  }
//A task belongs in a project
  public function project(){
    return $this->belongsTo('App\Projects');
  }
//A task belongs to a company
  public function company(){
    return $this->belongsTo('App\Company');
  }
//A task belongs to many users
  public function tasks(){
    return $this->belongsTo('App\User');
  }

}
