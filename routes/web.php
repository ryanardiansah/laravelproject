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

Route::get('/siswa', function () {
    $nama='rian ardiansah';
    $nilai=80;
    $nilaiarray=[20, 50, 70, 80, 95];
    return view('siswa',compact('nama','nilai', 'nilaiarray'));
});
