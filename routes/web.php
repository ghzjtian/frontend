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

//前端
Route::get('/', function () {
    return view('home');
});
Route::get('about', function () {
    return view('about');
});
Route::get('contact', function () {
    return view('contact');
});

Route::resource('products','ProductController');
Route::resource('galleries','PictureController');
Route::resource('events','EventController');

//邮件发送
//Route::get('/send/email', 'MailController@mail');
Route::post('/email/send', 'MailController@sendMail');
//Route::get('email/template',function(){
//    return new \App\Mail\SentResult(setting('glb.title'));
//});

//Voyager 后台管理 代码
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


//测试
Route::get('homepage',function (){
    return view('homepage');
});