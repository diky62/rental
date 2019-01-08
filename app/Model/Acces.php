<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Acces extends Model
{
  protected $table = 'acces';

	protected $fillable = [
		'id',
		'roles_id',
		'modules_id',
		'menus_id',
  ];
}
