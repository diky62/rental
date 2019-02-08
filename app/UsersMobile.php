<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersMobile extends Model
{
  protected $table = "users_mobile";
  protected $guarded = ["id"];

  public function Rental(){
    return $this->hasOne("App\Rental");
  }
}
