<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    protected $table = "kabupaten";
    protected $guarded = ["id"];

    public function users(){
    	return $this->hasOne("App\User");
    }
}
