<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
   public function category(){
       return $this->belongsTo('App\Category');
   }
}
