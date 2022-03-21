<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;


use Stancl\Tenancy\Middleware\InitializeTenancyByDomainOrSubdomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

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





Route::middleware([
    'web',
    InitializeTenancyByDomainOrSubdomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {

    Route::prefix('ess')->group(function () {
        Route::get('/', 'ESSController@index');
        Route::get('/attendnaces', 'AttendanceController@index')->name('attendances.index');

        // clockIn and clockOut
        Route::post('/clock-in', 'AttendanceController@clockIn')->name('user.clock-in');      //user.clock-in
        Route::get('/checkClockIn', 'AttendanceController@checkClockIn')->name('check.clockin'); // check clock-in

        Route::post('/clock-out', 'AttendanceController@clockOut')->name('user.clockout');  //user.clockout
        Route::get('/checkClockOut', 'AttendanceController@checkClockOut')->name('check.clockout'); // check clock-out

        // // apply leaves
        Route::get('/apply-leaves', 'ApplyLeavesController@index')->name('apply-leaves.index'); // apply leaves get
        Route::post('/apply-leave', 'ApplyLeavesController@store')->name('apply-leaves.store'); // apply leaves post

    });
});
