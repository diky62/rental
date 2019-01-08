<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
  protected $table = 'menus';

protected $fillable = [
  'id',
  'name',
  'modules_id',
  'url',
];
}
