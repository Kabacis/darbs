<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Resursi;
use Illuminate\Http\Request;


class CommentController extends Controller
{
    protected $fillable = ['body', 'user_id'];
    //to avoid the mass assignment

    public function store(Resursi $resursi){

        Comment::create([
            'body' => request('body'),
            'user_id' => $resursi->id,
        ]);

        return back();
    }
}
