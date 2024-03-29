<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\Api\UserController;

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

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::post('register', [UserController::class, 'register'])->name('register');
Route::post('login', [UserController::class, 'login'])->name('login');

Route::group(['middleware' => ["auth:sanctum"]], function () {
    //rutas
    Route::get('user-profile', [UserController::class, 'userProfile'])->name('userProfile');
    Route::get('logout', [UserController::class, 'logout'])->name('logout');
});


Route::resource('client', ClientController::class)->names('client');

Route::resource('inventory', InventoryController::class)->names('inventory');

Route::resource('invoice', InvoiceController::class)->names('invoice');

Route::resource('person', PersonController::class)->names('person');

Route::resource('product', ProductController::class)->names('product');

Route::resource('provider', ProviderController::class)->names('provider');

Route::resource('purchase', PurchaseController::class)->names('purchase');

Route::resource('roles', RolController::class)->names('roles');