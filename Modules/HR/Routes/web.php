<?php

use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
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

    Route::prefix('admin')->group(function () {
        Route::prefix('hr')->group(function () {
            // Route::get('/', 'HRController@index')->name('admin.departments');
            Route::post('/departments/update-department','DepartmentController@update')->name('update.department');
            Route::resource('departments', 'DepartmentController')->except('update');
            Route::resource('job-titles', 'Employees\JobTitleController');
            Route::resource('employees', 'Employees\EmployeeController');
            Route::resource('employees_attendences', 'Employees\EmployeeAttendenceController');

        });
    });
});
