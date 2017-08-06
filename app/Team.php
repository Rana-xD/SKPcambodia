<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use URL;
use Exception;
use TCG\Voyager\Traits\Translatable;

class Team extends Model
{
    use Translatable;

    protected $translatable = ['email'];


}
