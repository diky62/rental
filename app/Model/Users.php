<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Users extends Authenticatable
{
  use AuthenticatableTrait;
use Notifiable;

protected $table = 'db_rental';

protected $fillable = [
'id',
'name',
'email',
'email_verified_at',
'password',
];

protected $hidden = [
'password',
 'remember_token',
];
}
