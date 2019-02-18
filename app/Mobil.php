<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $table = "mobil";
    protected $guarded = ["id"];

    public function vendor(){
    	return $this->belongsTo("App\Vendor");
    }
     public function rental(){
        return $this->hasOne("App\Rental");
    }

    public function stok(){
        return $this->hasOne("App\Stok");
    }

    public function users(){
    return $this->belongsTo("App\User");
  }

}
