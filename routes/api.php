<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\BillingsController;
use App\Http\Controllers\AdminController;
 
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::resource('/clients', ClientController::class);
Route::post('/login', [AdminController::class, 'login']);

Route::get('/getAdminInfo', [AdminController::class, 'showInfo']);
// Route::post('/createNewAdmin', [AdminController::class, 'showInfo']);

Route::get('/billings/{ClientId}', [BillingsController::class, 'index']);
Route::get('/billings/{id}', [BillingsController::class, 'BillDetail']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});