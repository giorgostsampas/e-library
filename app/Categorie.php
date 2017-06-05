<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    //categorie belongs to many book
    public function books()
    {
      return $this->belongsToMany(Book::class);
    }
    public $timestamps = false;
}
