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


Route::prefix('tenant')->group(function() {
    Route::get('/', 'TenantController@index');
    Route::get('/register', 'TenantController@register');
    Route::post('/register-post', 'TenantController@doRegister')->name('register.post');

    Route::get('/login', 'TenantController@login');
    Route::post('/login', 'TenantController@doLogin');
});

