<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user()
    {
      return $this->belongsTo('App\User');
    }

public function likes()
{
      return $this->hasMany('App\Like');                      // 1 post exei polla lλαικ, 1 λαικ se 1 post .
}

}
