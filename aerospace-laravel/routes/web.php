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
// Route::get('/news', function () {
//     return view('news.news-body');
// });
Route::get('/carreer', function () {
    return view('carreer.carreer-body');
});
Route::get('/contactus', function () {
    return view('contactus.contactus-body');
});
Route::resource('news','PostController'); 
