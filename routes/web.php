<?php


use Illuminate\Support\Facades\Auth;
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

//Route::get('/', function () {
//
//    return view('welcome', compact('info'));
//});

Auth::routes();

Route::get('/admin/dashboard', 'HomeController@index')->name('admin');
Route::get('/data/welcome', 'WelcomeController@index');
Route::resource('/info', 'CompanyInfoController');
Route::resource('/slider', 'SliderController');
Route::post('/slider/image/{id}', 'SliderController@updateImage');
Route::resource('/customer', 'CustomerController');
Route::resource('/order', 'OrderController');
Route::resource('/post', 'PostController');
Route::resource('/product', 'ProductController');
Route::resource('/project', 'ProjectController');
Route::resource('/transaction', 'TransactionController');


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('/get-info', 'Admin\AdminController@getInfo');
    Route::put('/set-info', 'Admin\AdminController@setInfo');
    Route::put('/set-about', 'Admin\AdminController@setAbout');
    Route::post('/update-logo', 'Admin\AdminController@updateLogo');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function() {
    Route::get('/info', 'HomeController@index');
    Route::get('/post', 'HomeController@index');
    Route::get('/product', 'HomeController@index');
    Route::get('/project', 'HomeController@index');
    Route::get('/transaction', 'HomeController@index');
});










//should be the last route
Route::get('{path}', function () {
    if(Auth::check()){
       return view('home');
    }

    return view('welcome');

})->where('path', '([A-z\-/_.]+)?' );


/*if(Auth::check()){
    Route::get('{path}', 'HomeController@index')->where('path', '([A-z\-/_.]+)?' );
}
else{
    Route::get('{path}', 'WelcomeController@index')->where('path', '([A-z\-/_.]+)?' );
}*/

