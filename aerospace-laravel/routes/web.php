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

Route::get('/',function(){
    return view('frontEnd.index');
});
Route::get('/aboutus', function () {
    return view('frontEnd.aboutus');
});
Route::get('/whatwedo', function () {
    return view('frontEnd.whatwedo');
});
Route::get('/capabilities', function () {
    return view('frontEnd.capabilities');
});
Route::get('/contactus', function () {
    return view('frontEnd.contactus');
});
// Route::get('/', function () {
//     return view('frontEnd.index');
// });
Route::get('/news','PostController@index');
Route::get('/post-detail/{id}','PostController@detialpost');
Route::resource('carreer','CarreerController'); 
// Route::get('/test', function () {
// //    echo (URL::to('whatwedo.html'));
// //    echo url()->full();
// //    echo url('/public','images1');
// //    echo asset('public');
// // $contents = Storage::get('');
// // echo($contents);
// // echo( asset('storage/images/'));
// // return view('frontEnd.index');
// // return view('frontEnd.career');
// // return view('frontEnd.capabilities');
// // return view('frontEnd.contactus');
// // return view('frontEnd.aboutus');
// // return view('frontEnd.whatwedo');
// return view('frontEnd.news');
// });
