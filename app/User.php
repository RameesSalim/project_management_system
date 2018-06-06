<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //Roles

//A user has many tasks
    public function tasks(){
      return $this->hasMany('App\Models\Task');
    }
//A user has many comments
    public function comments(){
      return $this->hasMany('App\Models\Comment');
    }
//A user belongs to one role
    public function role(){
      return $this->belongsTo('App\Models\Task');
    }
//A user has many companies
    public function tasks(){
      return $this->hasMany('App\Models\Company');
    }

//A user belongs to many Tasks

  public function tasks(){
    return $this->belongsToMany('App\Task');
  }
}
