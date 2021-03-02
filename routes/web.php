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
    return view('index');
});
Route::resource('payment','PaymentController');

Route::get('/master', function () {
    return view('master.index');
});
Route::get('/student', function () {
    return view('student.index');
});
Route::get('/parent', function () {
    return view('parent.index');
});
Route::get('/rombel', function () {
    return view('rombel.index');
});
Route::get('/rayon', function () {
    return view('rayon.index');
});
Route::get('/teacher', function () {
    return view('teacher.index');
});