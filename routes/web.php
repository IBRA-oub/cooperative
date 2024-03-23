<?php

use App\Http\Controllers\financiereController;
use App\Http\Controllers\plannerController;
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

// __________________________financiere__________________________

Route::group([], function() {
    
    Route::get('/financiere-dashboard',[financiereController::class , 'dashboard'])->name('financiere-dashboard');
    Route::get('/financiere-revenu',[financiereController::class , 'redRevenu'])->name('financiere-revenu');
    Route::get('/financiere-achat',[financiereController::class , 'redAchat'])->name('financiere-achat');
    Route::get('/financiere-message',[financiereController::class , 'message'])->name('financiere-message');
    Route::get('/add-revenu',[financiereController::class , 'addRevenu'])->name('add-revenu');
    Route::get('/edit-revenu',[financiereController::class , 'editRevenu'])->name('edit-revenu');
    Route::get('/add-achat',[financiereController::class , 'addAchat'])->name('add-achat');
    Route::get('/edit-achat',[financiereController::class , 'editAchat'])->name('edit-achat');
});

// __________________________planner__________________________

Route::group([], function() {
    
    Route::get('/planner-dashboard',[plannerController::class , 'dashboard'])->name('planner-dashboard');
    Route::get('/planner-info-stati',[plannerController::class , 'infoStati'])->name('planner-info-stati');
    Route::get('/planner-message',[plannerController::class , 'message'])->name('planner-message');
    
    Route::get('/edit-materiaux-outils',[plannerController::class , 'editMateriauxOutils'])->name('edit-materiaux-outils');
    Route::get('/edit-produit',[plannerController::class , 'editProduit'])->name('edit-produit');
    Route::get('/edit-periode',[plannerController::class , 'editPeriode'])->name('edit-periode');
});