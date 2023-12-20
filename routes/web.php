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
})->name('welcome');

Route::get('/who', function () {
    return view('who');
})->name('who');


Route::get('/project', function () {
    return view('project');
})->name('project');

Route::get('/project/{id?}', function ($numero = 1) {
    return('número de la URL: ' . $numero);
})->name('project');
