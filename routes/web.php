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

Route::get('/', function () {return view('index'); })->name('index');
Route::get('/product/document', function () {return view('document'); })->name('document');
Route::get('/product/background', function () {return view('background'); })->name('background');
Route::get('/product/text', function () {return view('text'); })->name('text');
Route::get('/sample', function () {return view('sample'); })->name('sample');

// css
Route::get('/css/color.css', function () {return asset('css/color.css'); })->name('colorfile');
Route::get('/css/text.css', function () {return asset('css/text.css'); })->name('textfile');