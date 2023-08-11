<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/back','App\Http\Controllers\Admin\Admin@back');
Route::get('/trainerForm','App\Http\Controllers\Admin\TrainerController@trainerForm');
Route::post('/trainerForm','App\Http\Controllers\Admin\TrainerController@posttrainerForm');
Route::get('/trainerFormlist','App\Http\Controllers\Admin\TrainerController@trainerFormlist');
Route::get('/Trainer/{id}/formedit','App\Http\Controllers\Admin\TrainerController@edits');
Route::post('/Trainer/{id}/formedit','App\Http\Controllers\Admin\TrainerController@editdata');
Route::get('/Trainer/{id}/formdelete','App\Http\Controllers\Admin\TrainerController@deleted');

Route::get('/frontindexe','App\Http\Controllers\Front\IndexController@frontindexe');