<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Change Table name
    //protected $table = 'posts';
    
    //Change Primary key
    // public $primaryKey = 'id';

    // Change timestamp
    //public $timestamps = true;
    

    public function user(){
        return $this->belongsTo('App\User');
    }

}
