<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/projek', function () {
    return view('prooyek');
});
Route::get('/acara', function () {
    return view('acara');
});
Route::get('/tentang', function () {
    return view('tentang');
});
