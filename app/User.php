<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Auth;
use TCG\Voyager\Traits\VoyagerUser;
use TCG\Voyager\Models\Role;

class User extends Authenticatable
{
    use Notifiable;
    use VoyagerUser;

    // /**
    //  * On save make sure to set the default avatar if image is not set.
    //  */
    // public function save(array $options = [])
    // {
    //     // If no avatar has been set, set it to the default
    //     $this->avatar = $this->avatar ? $this->avatar : config('voyager.user.default_avatar', 'users/default.png');

    //     parent::save();
    // }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'name',
        'email',
        'password',
        'phonenumber',
        'address',
        'career',
        'bio',
        'avatar',
        'role_id',
        'is_active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     *   Method for returning specific thumbnail avarta.
     */

    /**
     * Relationship with Role
     *
     */
    public function roleId(){
        return $this->belongsTo(Role::class);
    }

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
