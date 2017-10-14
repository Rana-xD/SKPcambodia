<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\LawFile;

class Law extends Model
{
  public function files()
  {
    return $this->hasMany(LawFile::class)->orderBy('name','asc');
  }
}
