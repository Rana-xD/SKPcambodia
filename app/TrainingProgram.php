<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use URL;
use Exception;
use TCG\Voyager\Traits\Translatable;

class TrainingProgram extends Model
{

    use Translatable;

    protected $translatable = ['title', 'content', 'organized_by'];

    /**
     * Override save method
     *
    */
    public function save(array $options = [])
    {
        // If no author has been assigned, assign the current user's id as the author of the post
        if (!$this->created_by && Auth::user()) {
            $this->created_by = Auth::user()->id;
        }

        parent::save();
    }

    /**
     * Relationship with author
     *
    */
    public function createdBy(){
        return $this->belongsTo(User::class);
    }

    /**
     * Display only active author list
     * This relationship function Required by Voyager
     *
    */
    public function createdByList(){
        return User::where('is_active', 1)->orderBy('created_at')->get();
    }

    /**
     * Relationship with author
     *
    */
    public function updatedBy(){
        return $this->belongsTo(User::class);
    }

    /**
     * Display only active author list
     * This relationship function Required by Voyager
     *
    */
    public function updatedByList(){
        return User::where('is_active', 1)->orderBy('created_at')->get();
    }

    /**
     * Mutator for feature image attribute
     * remove domain from asset url
    */
    public function setFeaturedImageAttribute($value){
        $img_path = str_replace(URL('/'), '', $value);
        $this->attributes['featured_image'] = $img_path;
    }

    // Overrid upload file path by removed base domain
    public function setFileUrlAttribute($value){
        $file_path = str_replace(URL('/'), '', $value);
        $this->attributes['file_url'] = $file_path;
    }

    /**
     * Mutator for updated_by attribute
     * Set mutator to current authenticated user
    */
    public function setUpdatedByAttribute($value){
        if(Auth::check()){
            $this->attributes['updated_by'] = Auth::user()->id;
        }else{
            throw new Exception("You don't have permission to perform this action.", 1);
        }

    }

    /**
     *   Method for returning specific thumbnail for training program.
     */
    public function thumbnail($type)
    {
        // We take image from posts field
        $image = $this->attributes['image'];
        // We need to get extension type ( .jpeg , .png ...)
        $ext = pathinfo($image, PATHINFO_EXTENSION);
        // We remove extension from file name so we can append thumbnail type
        $name = rtrim($image, '.'.$ext);
        // We merge original name + type + extension
        return $name.'-'.$type.'.'.$ext;
    }
}
