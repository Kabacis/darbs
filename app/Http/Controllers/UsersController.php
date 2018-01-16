<?php

namespace App\Http\Controllers;

use App\User;
use App\Resursi;
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


    public function delete_user(Request $request){
        $id = $request->user_id;
        {
            $user = User::find($id);
            $user->delete();
            return back();
        }

    }
    public function item_delete(Request $request){
        $id = $request->item_id;
        {
            $item = Resursi::find($id);
            $item->delete();
            return back();
        }

    }


    public function change_role(Request $request){

        $id = $request->user_id;

        DB::table('users')
            ->where('id', $id)
            ->update(['pasparvalde_id' => request('role_id')]);
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
