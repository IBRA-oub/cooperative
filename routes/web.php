<?php

use App\Http\Controllers\Auth\ForgetPasswordController;
use App\Http\Controllers\financiereController;
use App\Http\Controllers\plannerController;
use App\Http\Controllers\publicitaireController;
use App\Http\Controllers\stockisteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\adminController;
use App\Http\Middleware\CheckRole;


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



Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class , 'loginAction'])->name('login.action');
Route::get('logout' , [AuthController::class , 'logout'])->middleware('auth')->name('logout');

Route::get('forget-password', [ForgetPasswordController::class , 'UserEmail'])->name('forget.password');
Route::post('forget-password', [ForgetPasswordController::class , 'forgetPassword'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgetPasswordController::class , 'ResetPassword'])->name('reset.password');
Route::post('reset-password', [ForgetPasswordController::class , 'ResetPasswordPost'])->name('reset.password.post');

// __________________________admin__________________________

Route::middleware(['auth', CheckRole::class . ':admin'])->group( function() {
    
    Route::get('/admin-dashboard',[adminController::class , 'dashboard'])->name('admin-dashboard');
    Route::get('/admin-message',[adminController::class , 'message'])->name('admin-message');
    Route::get('/add-user-pages',[adminController::class , 'addUserPage']);
    
    Route::get('/travailleur-heurs/{id}/{type}',[adminController::class , 'travailleurHaurs'])->name('travailleur-heurs');
    Route::post('/add-heur',[adminController::class , 'addHours'])->name('add-heur');
    Route::post('/add-user',[adminController::class , 'addUser'])->name('add-user');
    Route::get('/admin-travailleur',[adminController::class , 'travailleur'])->name('admin-travailleur');
    Route::get('/edit-user/{id}',[adminController::class , 'editUser'])->name('edit-user');
    Route::put('/update-user/{id}',[adminController::class , 'updateUser'])->name('user.update');
    Route::delete('/delete-user/{id}',[adminController::class , 'deleteUser'])->name('user.delete');
});

// __________________________financiere__________________________

Route::middleware(['auth', CheckRole::class . ':financiere'])->group( function() {
    
    Route::get('/financiere-dashboard',[financiereController::class , 'dashboard'])->name('financiere-dashboard');
    Route::get('/financiere-revenu',[financiereController::class , 'redRevenu'])->name('financiere-revenu');
    Route::get('/financiere-message',[financiereController::class , 'message'])->name('financiere-message');
    Route::get('/add-revenu',[financiereController::class , 'addRevenu'])->name('add-revenu');
    Route::get('/edit-revenu',[financiereController::class , 'editRevenu'])->name('edit-revenu');
    
    Route::get('/edit-materiaux',[financiereController::class , 'editMateriaux'])->name('edit-materiaux');
    
    Route::get('/financiere-materiel',[financiereController::class , 'redMateriel'])->name('financiere-materiel');
    Route::get('/add-materiel',[financiereController::class , 'addMateriel'])->name('add-materiel');
    Route::post('/add-materiel-post',[financiereController::class , 'addMaterielPost'])->name('add.materiel');
    Route::delete('/materiel-delete/{id}',[financiereController::class , 'materielDelete'])->name('materiel.delete');
    Route::get('/edit-materiel/{id}',[financiereController::class , 'editMateriel'])->name('edit-materiel');
    Route::put('/update-materiel/{id}',[financiereController::class , 'updateMateriel'])->name('update.materiel');
    
    Route::get('/financiere-electriciter-eau',[financiereController::class , 'redElectriciterEau'])->name('financiere-electriciter-eau');
    Route::get('/add-electriciter-eau',[financiereController::class , 'addElectriciterEeau'])->name('add-electriciter-eau');
    Route::post('/add-electriciter-eau-post',[financiereController::class , 'addElectriciterEeauPost'])->name('add.electriciter.eau');
    Route::delete('/electriciter-eau-delete/{id}',[financiereController::class , 'ElectriciterEeauDelete'])->name('electriciterEau.delete');
    Route::get('/edit-electriciter-eau/{id}',[financiereController::class , 'editElectriciterEau'])->name('edit-electriciter-eau');
    Route::put('/update-electriciterEau/{id}',[financiereController::class , 'updateElectriciterEau'])->name('update.electriciterEau');
    
    Route::get('/add-materiaux',[financiereController::class , 'addMateriaux'])->name('add-materiaux');
    Route::get('/add-location',[financiereController::class , 'addLocation'])->name('add-location');
    Route::post('/add-location-post',[financiereController::class , 'addLocationPost'])->name('add.location');
    Route::delete('/location-delete/{id}',[financiereController::class , 'locationDelete'])->name('location.delete');
    Route::get('/edit-location/{id}',[financiereController::class , 'editLocation'])->name('edit-location');
    Route::put('/update-location/{id}',[financiereController::class , 'updateLocation'])->name('update.location');
    
    Route::get('/financiere-materiaux',[financiereController::class , 'redMateriaux'])->name('financiere-materiaux');
    Route::get('/financiere-charge',[financiereController::class , 'redCharge'])->name('financiere-charge');
    Route::get('/financiere-location',[financiereController::class , 'redLocation'])->name('financiere-location');
});

// __________________________planner__________________________

Route::middleware(['auth', CheckRole::class . ':planner'])->group( function() {
    
    Route::get('/planner-dashboard',[plannerController::class , 'dashboard'])->name('planner-dashboard');
    Route::get('/planner-info-stati',[plannerController::class , 'infoStati'])->name('planner-info-stati');
    Route::get('/planner-message',[plannerController::class , 'message'])->name('planner-message');
    Route::get('/edit-materiaux-outils',[plannerController::class , 'editMateriauxOutils'])->name('edit-materiaux-outils');
    Route::get('/edit-produit',[plannerController::class , 'editProduit'])->name('edit-produit');
    Route::get('/edit-periode',[plannerController::class , 'editPeriode'])->name('edit-periode');
});

// __________________________stockiste__________________________

Route::middleware(['auth', CheckRole::class . ':stockiste'])->group( function() {
    
    Route::get('/stockiste-dashboard',[stockisteController::class , 'dashboard'])->name('stockiste-dashboard');
    Route::get('/stockiste-info-stati',[stockisteController::class , 'infoStati'])->name('stockiste-info-stati');
    Route::get('/stockiste-message',[stockisteController::class , 'message'])->name('stockiste-message');
    Route::get('//edit-produit-stocke',[stockisteController::class , 'editProduitStocke'])->name('/edit-produit-stocke');
    
});

// __________________________publicitaire__________________________

Route::middleware(['auth', CheckRole::class . ':publicitaire'])->group( function() {
    
    Route::get('/publicitaire-dashboard',[publicitaireController::class , 'dashboard'])->name('publicitaire-dashboard');
    Route::get('/publicitaire-info-stati',[publicitaireController::class , 'infoStati'])->name('publicitaire-info-stati');
    Route::get('/publicitaire-message',[publicitaireController::class , 'message'])->name('publicitaire-message');
    Route::get('//edit-publiciter',[publicitaireController::class , 'editPubliciter'])->name('/edit-publiciter');
    
});