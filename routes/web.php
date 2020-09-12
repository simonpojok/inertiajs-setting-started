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

Route::get('/', function () {
    return Inertia\Inertia::render(
        'Welcome', [
            'foo' => 'bar'
        ]
    );
});

Route::get('/about', function () {
    return Inertia\Inertia::render(
        'About', [
            'foo' => 'bar'
        ]
    );
});

Route::get('/contact', function () {
    return Inertia\Inertia::render(
        'Contact', [
            'foo' => 'bar'
        ]
    );
});

Route::get('/users', 'UsersController@index') -> name('users.index');
