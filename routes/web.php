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


Route::get('forge', function () {
    return "Hello forge, workign fine";
});


Route::get('adapt', function () {
    return "Adapt is the way";
});


Route::get('foo', function () {
    return "FooBar FooBar FooBar FooBar FooBar FooBar ";
});


Route::get('dance', function () {
    return "cha cha cha cha cha ";
});