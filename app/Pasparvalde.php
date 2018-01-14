<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasparvalde extends Model
{
    public function user(){
        return $this->hasMany(User::class);
    }
    public function resursi(){
        return $this->hasMany(Resursi::class);
    }
}
