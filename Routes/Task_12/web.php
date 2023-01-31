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

Route::get('/test', function () {
    dump('Страница test');
});

Route::get('/dir/test', function () {
    dd('Страница /dir/test');
});

Route::get('/user/{name}', function ($name) {
    dd("Параметр страницы user = $name");
});

Route::get('/user/{surname}/{name}', function ($surname, $name) {
    dd("Параметр страницы user = $surname $name");
});

//Добавленный роут
Route::get('/city/{city?}', function ($city = 'minsk') {
    dd("Параметр страницы city = $city");
});
