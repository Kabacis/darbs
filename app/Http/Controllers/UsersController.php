<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class UsersController extends Controller
{
    public function admin(){
        return view('admin');
    }

    public function show(){
        return view('user_profile');
    }

    public function edit(){
        $id = Auth::user()->id;
        DB::table('users')
            ->where('id', $id)
            ->update(['name' => request('name')]);
        return back();
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
