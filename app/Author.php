<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //Author belongs to many Book
    public function books()
    {
      return $this->belongsToMany(Book::class);
    }
    public $timestamps = false;
}
