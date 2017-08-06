<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use URL;
use Exception;
use TCG\Voyager\Traits\Translatable;

class ActivityCategory extends Model
{

    use Translatable;

    protected $translatable = ['name'];

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
}
