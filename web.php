
<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return 'Welcome to Home Page';
});

Route::get('/about', function () {
    return 'Welcome to About Page';
});

Route::get('/student/{name}', function ($name) {
    return 'Student Name: ' . $name;
});
