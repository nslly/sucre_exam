<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\EmployeeSummaryController;





/**
 * Login routes
 * 
 */

Route::middleware('guest')->group(function () {    
    Route::get('/', function () {
        return redirect('/login');
    })->name('home');
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);

});



/**
 * Employees Routes
 * 
 */

Route::middleware('auth')->group(function () {

    Route::get('/summary', EmployeeSummaryController::class)->name('employees.summary');

    Route::resource('employees', EmployeeController::class);
});
