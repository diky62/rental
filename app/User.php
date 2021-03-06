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

    protected $table = "users";
    protected $guarded = ["id"];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function roles(){
        return $this->belongsTo("App\Roles");
    }
    public function provinsi(){
        return $this->belongsTo("App\Provinsi");
    }
    public function kabupaten(){
        return $this->belongsTo("App\Kabupaten");
    }
    public function kecamatan(){
        return $this->belongsTo("App\Kecamatan");
    }
    public function rental(){
       return $this->hasOne("App\Rental");
   }
}
