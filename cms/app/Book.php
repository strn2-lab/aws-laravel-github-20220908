<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    Public function user()
  {
    return $this->belongsTo('App\User');
  }
}
