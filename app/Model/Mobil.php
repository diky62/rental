<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
  protected $table = 'mobil';

  protected $fillable = [
  'id',
  'no_mobil',
  'no_polisi',
  'warna',
  'harga',
  'keterangan',
  'users_id'
  ];
}
