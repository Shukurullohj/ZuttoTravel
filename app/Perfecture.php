<?php

namespace App;

use App\Place;
use Illuminate\Database\Eloquent\Model;

class Perfecture extends Model
{
    protected $guarded = [];
     public function getRouteKeyName()
     {
        return 'name';
     }
      public function places()
      {
         return $this->hasMany(Place::class);
      }
}
