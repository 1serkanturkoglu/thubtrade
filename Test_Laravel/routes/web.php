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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/deneme', 'Homecontroller@get_deneme');
Route::get('/form', 'Homecontroller@get_form');
Route::post('/form', 'Homecontroller@post_form');

Route::get('/haberler', 'Homecontroller@get_haberler');
Route::post('/haberler', 'Homecontroller@post_haberler');

Route::get('/deneme/{forum}/{php}/{framework}', 'Homecontroller@get_kategori');





Route::get('/deneme/{isim}', 'Homecontroller@get_deneme_isim');




Route::group(['prefix' => 'admin', 'middleware'=>'admin' ], function () {

    Route::get('/forum', 'Homecontroller@get_deneme');
    Route::get('/blog', 'Homecontroller@get_haberler');
    Route::get('/haberler', 'Homecontroller@get_deneme');
    Route::get('/galeri', 'Homecontroller@get_deneme');
});