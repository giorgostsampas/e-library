<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //book belongs to Publisher
    public function Publisher()
    {
      return $this->belongsTo(Publisher::class);
    }

    //book belongs to many Authors
    public function Authors()
    {
      return $this->belongsToMany(Author::class);
    }

    //book belongs to many Categories
    public function Categories()
    {
      return $this->belongsToMany(Categorie::class);
    }

    //book belongs to many Users
    public function Users()
    {
      return $this->belongsToMany(User::class);
    }
public $timestamps = false;

}
