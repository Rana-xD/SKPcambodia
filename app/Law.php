<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Law extends Model
{
  public function files()
  {
    return $this->hasMany(Lawfile::class)->orderBy('name','asc');
  }
}
