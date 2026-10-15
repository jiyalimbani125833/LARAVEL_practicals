
<?php

use Illuminate\Support\Facades\Route;

Route::get('/student/{name}/{rollno}', function (string $name, string $rollno) {
    return 'Student Name: ' . $name . '<br>Roll Number: ' . $rollno;
});
