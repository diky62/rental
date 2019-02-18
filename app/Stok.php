<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    protected $table = "stok";
    protected $guarded = ["id"];

    public function mobil(){
    	return $this->belongsTo("App\Mobil");
    }
}
