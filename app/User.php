<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

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
     public function pronvisi(){
        return $this->hasOne("App\Provinsi");
    }
    public function kabupaten(){
        return $this->hasOne("App\Kabupaten");
    }
    public function kecamatan(){
        return $this->hasOne("App\Kecamatan");
    }
    public function role(){
        return $this->hasOne("App\Role");
    }
}
