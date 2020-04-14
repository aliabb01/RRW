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
    return view('welcome');
});
Route::get('user', ['middleware' => 'auth', function () {
    return view('user');
}]);

Route::get('admin', ['middleware' => 'isadmin', function () {
    return view('admin');
}]);

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});

Route::get('feedback', function () {
    return view('feedback');
});

Route::get('help', function () {
    return view('help');
});

Route::get('help&support', function () {
    return view('help');
});

Route::get('services-special', function () {
    return view('services.special');
});

Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');



Auth::routes();

Route::resource('cities','citycontroller');

Route::resource('cities.save','citycontroller@store');
Route::resource('trains','traincontroller');
Route::resource('trips','tripcontroller');
Route::resource('passengers','passengercontroller');
Route::resource('tickets','ticketcontroller');
Route::post('/store','citycontroller@store');
Route::put('/upd/{id}','citycontroller@update');
Route::delete('/del/{id}','citycontroller@destroy');
Route::resource('useres','usercontroller');