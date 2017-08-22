<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class LawFile extends Model
{
    public function lawId()
    {
       return $this->belongsTo(Law::class);
    }

    // Overrid upload file path by removed base domain
    public function setFileUrlAttribute($value){
        $file_path = str_replace(URL('/'), '', $value);
        $this->attributes['file_url'] = $file_path;
    }
}
