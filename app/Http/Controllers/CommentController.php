<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Resursi;
use Illuminate\Support\Facades\Auth;


class CommentController extends Controller
{
    protected $fillable = ['body'];
    //to avoid the mass assignment

    public function store(Resursi $resursi){

        Comment::create([
            'body' => request('body'),
            'user_id' => Auth::user()->id,
            'resursi_id' => $resursi->id,

        ]);

        return back();
    }
}
