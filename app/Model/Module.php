<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
  protected $table = 'modules';

protected $fillable = [
  'id',
  'name',
  'description',
  'icon',
  'order',
  'segment',
];
}
