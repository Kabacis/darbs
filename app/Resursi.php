<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Resursi extends Model
{
    protected $fillable = ['title', 'description', 'pasparvalde_id', 'user_id'];
    //to avoid the mass assignment


    public function pasparvalde(){
        return $this->belongsTo(Pasparvalde::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function comments (){
        return $this->hasMany(Comment::class);
    }


}
