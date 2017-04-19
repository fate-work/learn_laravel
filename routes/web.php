<?php
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
use App\Http\Controllers\homeController;
/*
Route::get('/', function () {
    return view('welcome');//welcome.blade.php
});*/
//Route::get('/', 'homeController@index');
Route::get("/", 'homeController@welcome');
Route::get("about", 'homeController@about');
Route::resource("songs", 'SongsController');

/*Route::get('child', function () {
    $bitfumes=['This','is','Bitfumes'];
    return view('child')->withBitfumes($bitfumes);
});*/