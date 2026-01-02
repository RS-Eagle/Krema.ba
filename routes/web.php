<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/fix-migrations', function () {
    \Illuminate\Support\Facades\Artisan::call('migrate:fresh --seed --force');
    return 'Migrations run successfully: <pre>' . \Illuminate\Support\Facades\Artisan::output() . '</pre>';
});
