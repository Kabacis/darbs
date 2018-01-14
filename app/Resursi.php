<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resursi extends Model
{
    protected $fillable = ['title', 'description', 'pasparvalde_id'];
    //to avoid the mass assignment

    public function pasparvalde(){
        return $this->belongsTo(Pasparvalde::class);
    }
    public function comments (){
        return $this->hasMany(Comment::class);
    }
}
