<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // layouts.user.header
    return view('layouts.layoutMain.userPage.home');
});
Route::get('/info', function () {
    // layouts.user.header
    return view('layouts.layoutMain.userPage.customerInformation');
});
