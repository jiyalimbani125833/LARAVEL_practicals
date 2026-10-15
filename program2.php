
<?php

use Illuminate\Support\Facades\Route;

Route::get('/student/{name}', function (string $name) {
    return 'Student Name: ' . $name;
});
