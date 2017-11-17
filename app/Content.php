<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Content extends Model
{
    use Translatable;
    
    protected $translatable = ['title', 'body'];

    // /**
    //  * Mutator for feature image attribute
    //  * remove domain from asset url
    // */
    // public function setImageAttribute($value){
    //     $img_path = str_replace(URL('/'), '', $value);
    //     $this->attributes['image'] = $img_path;
    // }

}
