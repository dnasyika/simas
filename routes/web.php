<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/loket/home', function (){
    return view('loketHome');
});

Route::get('/loket/daftar', function (){
    return view('loketDaftarPasien');
});

Route::get('/dokter/home', function (){
    return view('dokterHome');
});
Route::get('/dokter/daftarPasien', 'pasienController@index');

Route::get('/lab/home', function (){
    return view('laboratoriumHome');

});

//Route::get('/lab/tambahCekLab', function (){
//    return view('viewTambahCekLab');
//});
Route::get('/lab/tambahCekLab/{id}', 'cekLabController@show');

Route::get('/dokter/rujukan/', 'rujukanController@index');

Route::get('dokter/rujukan/validasi/{id}', 'rujukanController@validasi');

Route::get('dokter/rujukan/tolak/{id}', 'rujukanController@tolak');

Route::get('/lab/daftarPasien', 'pasienController@labindex');

Route::get('/lab/daftarFasilitas', 'FasilitasController@index');

Route::get('/lab/daftarCekLab/', 'cekLabController@index');

Route::post('/lab/tambahCekLab/add', 'cekLabController@tambahKunjungan');

Route::get('/lab/tambahCekLab/getTestLab/{id}', 'cekLabController@getTestLab');

Route::get('dokter/rujukan/detail/{id}', 'rujukanController@detail');

Auth::routes();

Route::get('/home', 'HomeController@index');
