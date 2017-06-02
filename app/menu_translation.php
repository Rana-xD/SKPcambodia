<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menu_translation extends Model
{
  protected $table = 'menu_translation';
 public function menu()
 {
   return $this->belongTo('App\menu', 'menu_id');
 }
}
