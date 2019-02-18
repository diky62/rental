<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    protected $table = "rental";
    protected $guarded = ["id"];

    public function User(){
    	return $this->belongsTo("App\User");
    }
     public function mobil(){
        return $this->belongsTo("App\Mobil");
    }
}
