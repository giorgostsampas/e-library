<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    //users has many books

  public function books()
{
  return $this->hasMany(Book::class);
}
public $timestamps = false;

}
