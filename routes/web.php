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


Route::get('/', [adminController::class, 'welcome'])->name('welcome');




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

    Route::get('/publicitaire',[adminController::class , 'publicitaire'])->name('publicitaire');
    Route::get('/edit-publiciter/{id}',[adminController::class , 'editPubliciter'])->name('edit-publiciter');
    Route::put('/update-publiciter/{id}',[adminController::class , 'updatePubliciter'])->name('publiciter.update');
    Route::delete('/delete-publiciter/{id}',[adminController::class , 'PubliciterDelete'])->name('publiciter.delete');
    Route::post('/add-publiciter',[adminController::class , 'addPubliciter'])->name('add.publiciter');

});

// __________________________financiere__________________________

Route::middleware(['auth', CheckRole::class . ':financiere'])->group( function() {
    
    Route::get('/financiere-dashboard',[financiereController::class , 'dashboard'])->name('financiere-dashboard');
    Route::get('/financiere-message',[financiereController::class , 'message'])->name('financiere-message');
    
    Route::get('/financiere-revenu',[financiereController::class , 'redRevenu'])->name('financiere-revenu');
    Route::get('/add-revenu',[financiereController::class , 'addRevenu'])->name('add-revenu');
    Route::post('/add-revenu-post',[financiereController::class , 'addRevenuPost'])->name('add.revenu');
    Route::delete('/revenu-delete/{id}',[financiereController::class , 'revenuDelete'])->name('revenu.delete');
    Route::get('/edit-revenu/{id}',[financiereController::class , 'editRevenu'])->name('edit-revenu');
    Route::put('/update-revenu/{id}',[financiereController::class , 'updateRevenu'])->name('update.revenu');

    
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
    
    Route::get('/financiere-location',[financiereController::class , 'redLocation'])->name('financiere-location');
    Route::get('/add-materiaux',[financiereController::class , 'addMateriaux'])->name('add-materiaux');
    Route::get('/add-location',[financiereController::class , 'addLocation'])->name('add-location');
    Route::post('/add-location-post',[financiereController::class , 'addLocationPost'])->name('add.location');
    Route::delete('/location-delete/{id}',[financiereController::class , 'locationDelete'])->name('location.delete');
    Route::get('/edit-location/{id}',[financiereController::class , 'editLocation'])->name('edit-location');
    Route::put('/update-location/{id}',[financiereController::class , 'updateLocation'])->name('update.location');
    
    Route::get('/financiere-materiaux',[financiereController::class , 'redMateriaux'])->name('financiere-materiaux');
    Route::get('/add-materiaux',[financiereController::class , 'addMateriaux'])->name('add-materiaux');
    Route::post('/add-materiaux-post',[financiereController::class , 'addMateriauxPost'])->name('add.materiaux');
    Route::delete('/materiaux-delete/{id}',[financiereController::class , 'materiauxDelete'])->name('materiaux.delete');
    Route::get('/edit-materiaux/{id}',[financiereController::class , 'editmateriaux'])->name('edit-materiaux');
    Route::put('/update-materiaux/{id}',[financiereController::class , 'updatemateriaux'])->name('update.materiaux');
    
    Route::get('/financiere-charge',[financiereController::class , 'redCharge'])->name('financiere-charge');
});

// __________________________Responsable agricole__________________________

Route::middleware(['auth', CheckRole::class . ':planner'])->group( function() {
    
    Route::get('/planner-dashboard',[plannerController::class , 'dashboard'])->name('planner-dashboard');
    Route::get('/planner-info-stati',[plannerController::class , 'infoStati'])->name('planner-info-stati');
    Route::get('/planner-message',[plannerController::class , 'message'])->name('planner-message');
    
    Route::post('/add-periode-post',[plannerController::class , 'addPeriodePost'])->name('add.periode');
    Route::delete('/periode-delete/{id}',[plannerController::class , 'periodeDelete'])->name('periode.delete');
    Route::get('/edit-periode/{id}',[plannerController::class , 'editPeriode'])->name('edit-periode');
    Route::put('/update-periode/{id}',[plannerController::class , 'updatePeriode'])->name('update.periode');
    
    Route::post('/add-produit-post',[plannerController::class , 'addProduitPost'])->name('add.produit');
    Route::delete('/produit-delete/{id}',[plannerController::class , 'produitDelete'])->name('produit.delete');
    Route::get('/edit-produit/{id}',[plannerController::class , 'editProduit'])->name('edit-produit');
    Route::put('/update-produit/{id}',[plannerController::class , 'updateProduit'])->name('update.produit');
    
    Route::post('/add-materiauxOutils-post',[plannerController::class , 'addMateriauxOutilsPost'])->name('add.materiauxOutils');
    Route::delete('/materiauxOutils-delete/{id}',[plannerController::class , 'MateriauxOutilsDelete'])->name('materiauxOutils.delete');
    Route::get('/edit-materiaux-outils/{id}',[plannerController::class , 'editMateriauxOutils'])->name('edit-materiauxOutils');
    Route::put('/update-materiauxOutils/{id}',[plannerController::class , 'updateMateriauxOutils'])->name('update.materiauxOutils');
    



   

});

// __________________________stockiste__________________________

Route::middleware(['auth', CheckRole::class . ':stockiste'])->group( function() {
    
    Route::get('/stockiste-dashboard',[stockisteController::class , 'dashboard'])->name('stockiste-dashboard');

    Route::post('/add-ProduitStocke-post',[stockisteController::class , 'addProduitStockePost'])->name('add.ProduitStocke');
    Route::delete('/ProduitStocke-delete/{id}',[stockisteController::class , 'ProduitStockeDelete'])->name('ProduitStocke.delete');
    Route::get('/edit-produit-stocke/{id}',[stockisteController::class , 'editProduitStocke'])->name('edit-ProduitStocke');
    Route::put('/update-ProduitStocke/{id}',[stockisteController::class , 'updateProduitStocke'])->name('update.ProduitStocke');
    
    Route::get('/stockiste-info-stati',[stockisteController::class , 'infoStati'])->name('stockiste-info-stati');
    Route::get('/stockiste-message',[stockisteController::class , 'message'])->name('stockiste-message');
    
});