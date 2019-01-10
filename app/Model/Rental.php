<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
  protected $table = 'rental';

  protected $fillable = [
  'id',
  'users_id',
  'mobil_id',
  'status',
  ];
}
