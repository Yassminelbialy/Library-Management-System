<?php

namespace App;
use \App\Book;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table ='categories';

    // public function Books(){
    //     $this->hasMany(Book::class);
    // }
}
