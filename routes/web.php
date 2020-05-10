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
    return view('/welcome');
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

Route::get('help', function () {
    return view('help');
});

Route::get('help&support', function () {
    return view('help');
});

Route::get('services-special', function () {
    return view('services.special');
});

Route::get('services-advertising', function () {
    return view('services.advertising');
});

Route::get('services-baggage', function () {
    return view('services.baggage');
});

Route::get('services-careers', function () {
    return view('services.careers');
});

Route::get('help-translate', function () {
    return view('help-translate');
});

Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/down', function(){
    Artisan::call('down');
});

Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');



Auth::routes(['verify' => true]);

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

Route::resource('myprofile','rigestercontroller');

Route::put('/upd/{id}','rigestercontroller@update');
Route::delete('/del/{id}','rigestercontroller@destroy');
Route::resource('feedback','commentcontroller');
Route::post('/store','commentcontroller@store');
Route::get('/disscount', function(){
    Mail::send('inform',[],function($m){
        $m->to('user@gmail.com')->subject('Apollon');
    });
    return view ('welcome');
});
route::get('/search','Searchcontroller@search');