<?php

namespace App\Http\Controllers;

use App\Pasparvalde;
use App\Resursi;
use Illuminate\Http\Request;

class ResursiController extends Controller
{

    public function store(Pasparvalde $pasparvalde){

        Resursi::create([
            'title' => request('title'),
            'pasparvalde_id' => $pasparvalde->id,
            'description' => request('description')

        ]);

        return back();
    }

}
