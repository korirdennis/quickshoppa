<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable =[
            
            'title','image','details','price','stock','discount'
    ];
  
}
