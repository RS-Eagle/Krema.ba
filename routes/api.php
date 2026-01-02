<?php

use Illuminate\Support\Facades\Route;

// Health
Route::get('/health', fn() => response()->json(['ok'=>true]));

Route::get('/fix-migrations', function () {
    \Illuminate\Support\Facades\Artisan::call('migrate:fresh --seed --force');
    return 'Migrations run successfully: <pre>' . \Illuminate\Support\Facades\Artisan::output() . '</pre>';
});

// Modules (drop-in)
$modules = [
    __DIR__.'/api.module1.php',
    __DIR__.'/api.module2.php',
    __DIR__.'/api.module3.php',
    __DIR__.'/api.module4.php',
    __DIR__.'/api.module5.php',
    __DIR__.'/api.module6.php',
    __DIR__.'/api.module7.php',
    __DIR__.'/api.module8.php',
    __DIR__.'/api.module9.php',
];

foreach ($modules as $f) {
    if (file_exists($f)) require $f;
}
