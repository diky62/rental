<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    protected $table = "rental";
    protected $guarded = ["id"];

    public function UsersMobile(){
    	return $this->belongsTo("App\UsersMobile");
    }
     public function mobil(){
        return $this->belongsTo("App\Mobil");
    }
}
