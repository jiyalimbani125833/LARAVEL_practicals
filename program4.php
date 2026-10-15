
<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome/{name?}', function (?string $name = 'Guest') {
    return 'Welcome, ' . ($name ?? 'Guest');
});
