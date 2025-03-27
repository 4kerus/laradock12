<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/versions', function (){
    return [
        'Laravel' => app()->version(),
        'PHP' => PHP_VERSION,
    ];
});
