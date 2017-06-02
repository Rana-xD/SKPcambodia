<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;
class menu extends Model
{
  protected $table = 'menu';
  public function translation($language=null){
    if ($language == null) {
       $language = App::getLocale();
    }
    return $this->hasMany('App\menu_translation')->where('language_id', '=', $language);
}
}
