<?php

use Illuminate\Support\Facades\Input;
use App\User;
use Illuminate\Support\Facades\App;

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
Route::post('/language', array (                                        ///laiks mainīt valodu
    'Middleware' => 'Language',
    'uses' => 'LanguageController@index',
));

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/SP', 'PasparvaldeController@showSP');                      ///visas SP
Route::get('/SP/{pasparvalde}', 'PasparvaldeController@show');          ///konkrētā SP

Route::post('/SP/{pasparvalde}/resursi', 'ResursiController@store');    ///pievienot resursu
Route::get('/SP/{pasparvalde}/{resurss}', 'ResursiController@show');    ///resursa skats

Route::get('profile', 'UsersController@show');                         ///atvērt lietotāja profilu
Route::post('profile','UsersController@update_avatar');
Route::get('/admin', 'UsersController@admin')->middleware('admin');     ///adminu skats
Route::get('/delete_acc', 'UsersController@destroy');                   ///dzēst savu lietotāju
Route::post('/profile/edit', 'UsersController@edit');                   ///rediģēt vārdu

Route::post('/SP/comment', 'CommentController@store');                  ///pievienot komentāru



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
