<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $table = "provinsi";
    protected $guarded = ["id"];

    public function users(){
    	return $this->hasOne("App\User");
    }
}
