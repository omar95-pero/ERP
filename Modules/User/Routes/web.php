<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomainOrSubdomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;


Route::middleware([
    'web',
    InitializeTenancyByDomainOrSubdomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {

    Route::prefix('admin')->group(function() {
        Route::get('/login', 'LoginController@login')->name('admin.login');
        Route::post('/login', 'LoginController@doLogin');

        Route::get('/dashboard', 'UserController@dashboard')->name('admin.dashboard');

        Route::get('/logout', 'LoginController@logout')->name('logout');

        Route::resource('roles','RoleController',['names' =>['index' => 'admin.roles']]);
        Route::put('role/update','RoleController@update');


        Route::get('/subscription/renew', 'SubscriptionController@renewSubscription');


        Route::resource('users','UserController',['names' =>['index' => 'admin.users']]);
        Route::put('user/update','UserController@update');
    });

});
