<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class User extends Model implements Authenticatable
{
//apo edw ta dika mou ews tin klasi tou book

use \Illuminate\Auth\Authenticatable;
protected $primaryKey = 'user_id';       //TO EVALA EGW GIA NA DIORTHWSW TO ERROR P EMPAINE STO dashboard

public function posts()
{
  return $this->hasMany('App\Post');
}

public function likes()
{
      return $this->hasMany('App\Like');                      // 1 user  kanei λαικ polla posts,ara exoume polla λαικ
}








    //User belongs to many Book
    public function books()
    {
      return $this->belongsToMany(Book::class);
    }
public $timestamps = false;

}
