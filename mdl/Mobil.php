<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
  protected $table = 'mobil';

  protected $fillable = [
  'id',
  'vendor_id',
  'no_polisi',
  'no_mobil',
  'warna',
  'transmisi',
  'jumlah_penumpang',
  'harga',
  'keterangan',
  ];
}
