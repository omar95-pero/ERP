<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Landing\LandingController@index')
    ->middleware(['universal', \Stancl\Tenancy\Middleware\InitializeTenancyByDomainOrSubdomain::class])
    ->name('index');;


