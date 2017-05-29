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
Route::resource("todo","todocontroller");
Route::get('/',function (){
    return view('welcome');
});
Route::get('/file',function (){
    return view('file.home');
});
Route::get('about','testController@about')->middleware('test:olesya');
Route::get('contact','testController@contact')->middleware('test:Alexander');