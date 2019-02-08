<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register1 extends Model
{
    //
    protected $table = "user";
    protected $guarded = ["id"];

    public function roles(){
        return $this->hasOne("App\Roles");
    }
}
