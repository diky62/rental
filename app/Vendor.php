<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $table = "vendor";
    protected $guarded = ["id"];

    public function mobil(){
    	return $this->hasOne("App\Mobil");
    }
    public function users(){
    return $this->belongsTo("App\User");
  }
}
