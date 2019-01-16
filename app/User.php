<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function provinsi(){
        return $this->hasMany("App\Provinsi");
    }
    public function roles(){
        return $this->hasMany("App\Roles");
    }
    public function vendor(){
        return $this->hasMany("App\Vendor");
    }
    public function rental(){
        return $this->hasMany("App\Rental");
    }
}
