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

// Route::get('/home', 'HomeController@index')->name('home');
// Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function (){
// Route::get('/', 'AdminController@index')->name('admin_home');


Route::get('/aboutus', function () {
    if (Session::has('locale')) {
		App::setLocale(Session::get('locale'));
	}
    return view('frontEnd.aboutus');
});
Route::get('/whatwedo', function () {
    if (Session::has('locale')) {
		App::setLocale(Session::get('locale'));
	}
    return view('frontEnd.whatwedo');
});
Route::get('/capabilities', function () {
    if (Session::has('locale')) {
		App::setLocale(Session::get('locale'));
	}
    return view('frontEnd.capabilities');
});
Route::get('/contactus', function () {
    if (Session::has('locale')) {
		App::setLocale(Session::get('locale'));
	}
    return view('frontEnd.contactus');
});
Route::get('/', function () {
    if (Session::has('locale')) {
		App::setLocale(Session::get('locale'));
	}
    return view('frontEnd.index');
});

Route::get('/news','PostController@index');
Route::get('/post-detail/{id}','PostController@detialpost');
Route::resource('carreer','CarreerController'); 

Route::get('language/{locale}', function ($locale) {
    Session::put('locale', $locale);
    if (Session::has('locale')) {
		App::setLocale(Session::get('locale'));
	}
	return redirect()->back();
});
