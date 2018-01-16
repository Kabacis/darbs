<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

use Image;

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

    public function update_avatar(Request $request){
        // Handle the user upload of avatar
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        return view('user_profile', array('user' => Auth::user()) );
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
