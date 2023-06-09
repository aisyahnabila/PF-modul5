<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Welcome
Route::get('/', function () {
    return view('welcome');
});
//Home
Route::get('home', [HomeController::class, 'index'])->name('home');
//Profile
Route::get('/profile', ProfileController::class)->name('profile');
//EmployeeList
Route::resource('employees', EmployeeController::class);
//
// Route::newRoute();
