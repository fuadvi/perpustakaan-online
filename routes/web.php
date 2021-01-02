<?php

use Illuminate\Support\Facades\Auth;
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


Route::get('/', 'HomeController@index')
    ->name('/');

Route::get('/books', 'DaftarbukController@index')
    ->name('books');

Route::prefix('admin')
    ->namespace('admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', 'DasboardController@index')
            ->name('dashboard');

        Route::resource('kategori', 'KategoriController');
        Route::resource('book', 'BookController');
    });

Auth::routes(['verify' => true]);
