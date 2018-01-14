<?php

namespace App\Http\Controllers;

use App\Pasparvalde;
use Illuminate\Http\Request;

class PasparvaldeController extends Controller
{
    public function showSP(){

        $pasparvalde = Pasparvalde::latest()->get();
        return view('visas_sp', compact('pasparvalde'));
    }


    public function show(Pasparvalde $pasparvalde){

        return view('mana_sp', compact('pasparvalde'));
    }

}
