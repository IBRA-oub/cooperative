<?php

use App\Http\Controllers\plannerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\financiereController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/admin-message-financiere',[adminController::class , 'messageFinanciere'])->name('admin-message-financiere');
Route::get('/admin-message-planner',[adminController::class , 'messagePlanner'])->name('admin-message-planner');
Route::get('/admin-message-stockiste',[adminController::class , 'messageStockiste'])->name('admin-message-stockiste');


Route::get('/message-financiere-admin',[financiereController::class , 'messageFinanciereAdmin'])->name('message-financiere-admin');
Route::get('/message-planner-admin',[plannerController::class , 'messagePlannerAdmin'])->name('message-planner-admin');