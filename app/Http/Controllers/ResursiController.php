<?php

namespace App\Http\Controllers;

use App\Pasparvalde;
use App\Resursi;
use Illuminate\Support\Facades\Auth;

class ResursiController extends Controller
{

    public function store(Pasparvalde $pasparvalde){

        Resursi::create([
            'title' => request('title'),
            'pasparvalde_id' => $pasparvalde->id,
            'description' => request('description'),
            'user_id' => Auth::user()->id,

        ]);

        return back();
    }

    public function show(){

        return view('resurss_viens');
    }

}
