<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/clear-cache', function() {
    $output = [];
    \Artisan::call('cache:clear', $output);
	\Artisan::call('config:clear', $output);
    \Artisan::call('config:cache', $output);	
    \Artisan::call('view:clear', $output);
    \Artisan::call('route:clear', $output);
    \Artisan::call('config:cache', $output);
    \Artisan::call('storage:link', $output);
    dd($output);
});

Route::get('/', function () {
    return view('welcome');
});
