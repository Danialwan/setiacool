<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
});
Route::get('tentangkami', function () {
    return view('pages.tentangkami');
});
Route::get('/service/cooler', function () {
    return view('pages.ServiceCooler');
});
Route::get('/service/belanja', function () {
    return view('pages.belanja');
});
Route::get('/service/storage', function () {
    return view('pages.ServiceStorage');
});
Route::get('/service/chiller', function () {
    return view('pages.ServiceChiller');
});
Route::get('/service/belanja/acstanding', function () {
    return view('Belanja.acstanding');
});
