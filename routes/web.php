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
    return view('graficas.index');
});

Route::get('menu', 'Graficas@index');
Route::get('1', 'Graficas@apMun')->name('apellidosMun');
Route::get('2', 'Graficas@apReg')->name('apellidosReg');
Route::get('3', 'Graficas@sinapMun')->name('sinapellidosMun');
Route::get('4', 'Graficas@sinapReg')->name('sinapellidosReg');
Route::get('menu/1', 'Graficas@apellidosMun')->name('apMun');;
Route::get('menu/2', 'Graficas@apellidosReg')->name('apReg');;
Route::get('menu/3', 'Graficas@sinApellidosMun')->name('sapMun');;
Route::get('menu/4', 'Graficas@sinApellidosReg')->name('sapReg');;
