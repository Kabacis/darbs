<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UsersController extends Controller
{
    public function admin(){
        return view('admin');
    }

    public function destroy()
    {
        $id = Auth::user()->id;
        {
            $user = User::find($id);
            $user->delete();
            return back();
        }
    }

}
