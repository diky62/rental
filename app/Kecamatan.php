<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = "kecamatan";
    protected $guarded = ["id"];

    public function users(){
    	return $this->hasOne("App\User");
    }
}
