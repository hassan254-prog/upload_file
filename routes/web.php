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

Route::get('file-upload', 'App\Http\Controllers\FileController@fileUpload');
Route::post('file-upload', 'App\Http\Controllers\FileController@fileUploadPost')->name('fileUploadPost');
