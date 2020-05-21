<?php

namespace App;
use \App\Category;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table ='books';
    

     // public function categories(){
    //     return $this->belongsTo(Category::class);
    // }
     
    public function user(){
            return $this->belongsTo('App\User');
        }

        public function likes(){
            return $this->hasMany('App\Favorite');
        }


    
}
