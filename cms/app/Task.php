<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    Public function user()
  {
    return $this->belongsTo('App\User');
  }
}
