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

Route::get('/aboutus', function () {
    return view('template.aboutus-body');
});
Route::get('/whatwedo', function () {
    return view('whatwedo.whatwedo-body');
});
Route::get('/capabilities', function () {
    return view('capabilities.capabilities-body');
});
Route::get('/contactus', function () {
    return view('contactus.contactus-body');
});
Route::get('/', function () {
    return view('home.home-article');
});
Route::resource('news','PostController'); 
Route::resource('carreer','CarreerController'); 
Route::get('/test', function () {
//    echo (URL::to('whatwedo.html'));
//    echo url()->full();
   echo url('/public','images1');
//    echo asset('public');
// $contents = Storage::get('');
// echo($contents);
// echo( asset('storage/images/'));
});
