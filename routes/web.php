<?php

use Illuminate\Support\Facades\Input;
use App\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/SP', 'PasparvaldeController@showSP');          ///visas SP
Route::get('/SP/{pasparvalde}', 'PasparvaldeController@show');

Route::post('/SP/{pasparvalde}/resursi', 'ResursiController@store');    ///pievienot resursu

Route::get('/admin', 'UsersController@admin');


///2 meklēšanas - resursu un lietotāju
Route::any('/search_user',function(){
    $q = Input::get ( 'q' );
    $user = User::where('name','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->get();
    if(count($user) > 0)
        return view('admin')->withDetails($user)->withQuery ( $q );
    else return view ('admin')->withMessage('No Details found. Try to search again !');
});

Route::any('/search',function(){
    $q = Input::get ( 'resurss' );
    $resurss = \App\Resursi::where('title','LIKE','%'.$q.'%')->orWhere('description','LIKE','%'.$q.'%')->get();
    if(count($resurss) > 0)
        return view('welcome')->withDetails($resurss)->withQuery ( $q );
    else return view ('welcome')->withMessage('No Details found. Try to search again !');
});
