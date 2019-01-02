<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  protected $table = 'db_rental';

  protected $fillable = [
  'id',
  'role',
  ];
}
