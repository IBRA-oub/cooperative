<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\authController;
use App\Http\Controllers\adminController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login' , [authController::class , 'login']);


// __________________________admin__________________________

Route::group([], function() {
    
    Route::get('/admin-dashboard',[adminController::class , 'dashboard'])->name('admin-dashboard');
    Route::get('/admin-travailleur',[adminController::class , 'travailleur'])->name('admin-travailleur');
    Route::get('/travailleur-heurs',[adminController::class , 'travailleurHaurs'])->name('travailleur-heurs');
    Route::get('/admin-message',[adminController::class , 'message'])->name('admin-message');
    Route::get('/add-user',[adminController::class , 'addUser'])->name('add-user');
    Route::get('/edit-user',[adminController::class , 'editUser'])->name('edit-user');
});