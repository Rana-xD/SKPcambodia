<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use URL;
use Exception;
use TCG\Voyager\Traits\Translatable;

class Experience extends Model
{
  use Translatable;

  protected $translatable = ['content'];
  
}
