<?php


use Illuminate\Support\Facades\Route;

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

    return view('welcome', compact('info'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/info', 'CompanyInfoController');
Route::resource('/slider', 'SliderController');










//should be the last route
Route::get('{path}', function () {
    if(Auth()->check()){
        Route::get('{path}', 'HomeController@index')->where('path', '([A-z\-/_.]+)?' );
    }
    return view('welcome');
})->where('path', '([A-z\-/_.]+)?' );
