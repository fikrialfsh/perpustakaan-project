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
 
Route::group(['middleware'=>'auth'],function(){
 
    Route::get('beranda','Beranda_controller@index');

    //master kategori
    Route::get('master/kategori','Kategori_controller@index');
    Route::get('master/kategori/add','Kategori_controller@add');
    Route::post('master/kategori/add','Kategori_controller@store');
    Route::get('master/kategori/{id}','Kategori_controller@edit');
    Route::put('master/kategori/{id}','Kategori_controller@update');
    Route::delete('master/kategori/{id}','Kategori_controller@delete');

    //master buku
    Route::get('master/buku','Buku_controller@index');
    Route::get('master/buku/add','Buku_controller@add');
    Route::post('master/buku/add','Buku_controller@store');
    Route::get('master/buku/{id}','Buku_controller@edit');
    Route::put('master/buku/{id}','Buku_controller@update');
    Route::delete('master/buku/{id}','Buku_controller@delete');
 
});
 
Route::get('keluar',function(){
    \Auth::logout();
    return view('welcome');
});

 
Auth::routes();
 
Route::get('/home', function(){
    return redirect('beranda');
});